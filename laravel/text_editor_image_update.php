// text editor update
        $post_description = $request->post_description;
        $old_post_description = $post->post_description;
        if ($old_post_description !== $post_description) {
            libxml_use_internal_errors(true);
            $dom = new \DomDocument();
            $dom->loadHtml('<?xml encoding="utf-8" ?>' . $post_description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    // must include this to avoid font problem
            $images = $dom->getElementsByTagName('img');
            if (count($images) > 0) {
                foreach ($images as  $img) {
                    $src = $img->getAttribute('src');
                    if (!preg_match('/data:image/', $src)) {
                        $filename = last(explode("/", $src));
                        $oldfile = "uploads/post_thumbnail/$filename";
                        $mimetype = last(explode(".", $src));
                        $newFilename =
                            Str::limit($slug, 5) . '_' . Auth::guard('admin')->id() . '_' . time() .
                            Str::random(8) . '_' . Carbon::now()->format('Y');
                        $filepath = "uploads/post_thumbnail/$newFilename.$mimetype";
                        copy($oldfile, $filepath);
                        unlink(base_path("public/" . $oldfile));
                        $new_src = asset($filepath);
                        $img->removeAttribute('src');
                        $img->setAttribute('src', $new_src);
                    }
                    # if the img source is 'data-url'
                    if (preg_match('/data:image/', $src)) {
                        # get the mimetype
                        preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                        $mimetype = $groups['mime'];
                        # Generating a random filename
                        $filename =
                            Str::limit($slug, 5) . '_' . Auth::guard('admin')->id() . '_' . time() .
                            Str::random(8) . '_' . Carbon::now()->format('Y');
                        $filepath = "uploads/post_thumbnail/$filename.$mimetype";
                        $image = Image::make($src)
                            ->encode($mimetype, 100)
                            ->save(public_path($filepath), 80);
                        $new_src = asset($filepath);
                        $img->removeAttribute('src');
                        $img->setAttribute('src', $new_src);
                    }
                }
            }
            # modified entity ready to store in database
            $post_description = $dom->saveHTML();
            $post->update([
                "post_description" => null,
            ]);
            $post->update([
                "post_description" => $post_description,
            ]);
        }
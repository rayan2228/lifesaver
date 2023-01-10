<?php
// 
$post_data = Post::onlyTrashed()->find($post);
unlink(base_path('public/uploads/post_thumbnail/' . $post_data->post_thumbnail));
$post_description = $post_data->post_description;
libxml_use_internal_errors(true);
$dom = new \DomDocument();
$dom->loadHtml('<?xml encoding="utf-8" ?>' . $post_description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    // must include this to avoid font problem
$images = $dom->getElementsByTagName('img');
if (count($images) > 0) {
    foreach ($images as  $img) {
        $src = $img->getAttribute('src');
        $filename = last(explode("/", $src));
        unlink(base_path('public/uploads/post_thumbnail/' . $filename));
        # if the img source is 'data-url'
        if (preg_match('/data:image/', $src)) {
            unlink(base_path('public/uploads/post_thumbnail/' . $filename));
        }
    }
}
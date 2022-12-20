<!-- ajax code -->
<script>
    $(document).ready(function() {
        // category ajax
        $('#parent_category').change(function() {
            var category_id = $(this).val();
            if (category_id) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: '/admin/post/subcategorylist',
                    data: {
                        category_id: category_id
                    },
                    success: function(data) {
                        $("#sub_category").html(data);
                    }
                });
            }
        })
    })
</script>

<!-- controller code -->
<?php
    // get sub category
    public function getSubCategory(Request $request)
    {
        $category_id = $request->category_id;
        $sub_categories_lists = SubCategory::where('category_id', $category_id)->get();
        $subCategoryName = '';
        foreach ($sub_categories_lists as  $sub_category_list) {
            $subCategoryName .= "<option value='$sub_category_list->id'> $sub_category_list->subCategory_name </option>";
        }
        return $subCategoryName;
    }
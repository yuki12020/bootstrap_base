<?php
$categories = get_categories();
foreach($categories as $category) {
echo 
'
<ul class="list-group list-group-flush">
<li class="list-group-item text-success bg-dark">
<a href="'.get_category_link($category->term_id).'">'.$category->name.'</a>
</li>
</ul>
';
}
?>
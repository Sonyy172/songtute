

<?php


$cat_id = get_query_var('cat');

if (category_has_parent($cat_id)){
   	locate_template('category-sub.php', true);
}else {
	locate_template('category-main.php', true);
}


?>


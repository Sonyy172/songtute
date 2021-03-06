<?php

$post_id = $post->ID;

$post_type = get_post_type($post_id);

$watch_id = get_query_var('watch');

$dinh_dang = '';

if ($watch_id != '') {
    locate_template('single-video-content.php', true);
    $dinh_dang = 'playlist-detail';

}

if ($post_type == 'playlist' && $dinh_dang == '') {
    $dinh_dang = 'single-classes';
}
if ($post_type == 'post' && $dinh_dang == '') {
    $dinh_dang = 'single-article';
}
if ($post_type == 'recipe' && $dinh_dang == '') {
    $dinh_dang = 'single-recipe';
}

switch ($dinh_dang) {
    case 'single-classes':
        locate_template('single-classes.php', true);
        break;

    case 'single-article':
        locate_template('single-article.php', true);
        break;

    case 'single-recipe':
        locate_template('single-recipe.php', true);
        break;

    case 'playlist-detail':
        locate_template('single-video-content.php', true);
        break;

    default:
        # code...
        break;
}

?>
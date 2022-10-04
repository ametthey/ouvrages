<?php

// J'utilisais que le lien vers le projet suivant, mais tu peux adapter pour le projet précédent
// tu mets la classe dans functions.php ou dans un autre fichier que tu includes dans functions.php si tu ranges

class PostMenuOrderUtils {

public static function getPostsByMenuOrder($postType){
    $args =[
        'post_type' => $postType,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => -1
    ];

    $posts = get_posts($args);

    return $posts;
}

public static function getNextPostByMenuOrder($postType, $postID){
    $posts = self::getPostsByMenuOrder($postType);

    $nextPost = null;

    foreach($posts as $key => $value) {
        if($value->ID == $postID){
            $nextPost = $posts[$key] !== end($posts) ? $posts[$key + 1] : $posts[0];

            break;
        }
    }

    return $nextPost;
}

public static function getPreviousPostByMenuOrder($postType, $postID){
    $posts = self::getPostsByMenuOrder($postType);


    $prevPost = null;

    foreach($posts as $key => $value) {
        if($value->ID == $postID){
            $prevPost = $key !== 0 ? $posts[$key - 1] : end($posts);
            break;
        }
    }

    return $prevPost;
}

}

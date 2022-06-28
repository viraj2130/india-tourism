<?php


function validatePost($post)
{
    $errors = array();

    if (empty($post['title'])) {
        array_push($errors, 'Header requested !');
    }

    if (empty($post['body'])) {
        array_push($errors, 'Body requested!');
    }

    if (empty($post['topic_id'])) {
        array_push($errors, 'Title requested !');
    }

    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if ($existingPost) {
        if (isset($post['update-post']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Exists post like that');
        }

        if (isset($post['add-post'])) {
            array_push($errors, 'Exists post like that');
        }
    }

    return $errors;
}

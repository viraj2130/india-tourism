<?php

function validateTopic($topic)
{
    $errors = array();

    if (empty($topic['name'])) {
        array_push($errors, 'Name requested !');
    }

    $existingTopic = selectOne('topics', ['name' => $post['name']]);
    if ($existingTopic) {
        if (isset($post['update-topic']) && $existingTopic['id'] != $post['id']) {
            array_push($errors, 'Exists  !');
        }

        if (isset($post['add-topic'])) {
            array_push($errors, 'Exists!');
        }
    }

    return $errors;
}

<?php

function validateUser($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username is requested !');
    }

    if (empty($user['email'])) {
        array_push($errors, 'Email is required !');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Password is required !');
    }

    if ($user['passwordConf'] !== $user['password']) {
        array_push($errors, 'Passwords dont match !');
    }

     $existingUser = selectOne('users', ['email' => $user['email']]);
     if ($existingUser) {
         array_push($errors, 'This email is already taken!');
     }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {
        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'This email is already taken !');
        }

        if (isset($user['create-admin'])) {
            array_push($errors, 'This email is already taken !');
        }
    }

    $password = $user['password'];
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
             array_push($errors, 'Password is not strong enough!');
        }else{
            echo 'Strong password.';
        }

    return $errors;
}


function validateLogin($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username is requested !');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Password is required!');
    }




    return $errors;
}

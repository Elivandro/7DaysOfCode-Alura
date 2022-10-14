<?php

function crud_create($user)
{
    $dataJson = file_get_contents(DATA_LOCATION);
    $dataJson = json_decode($dataJson);
    $user['password'] = password_hash($user['password'], PASSWORD_ARGON2ID);
    $dataJson[] = $user;
    $dataJson = json_encode($dataJson);
    file_put_contents(DATA_LOCATION, $dataJson);
}
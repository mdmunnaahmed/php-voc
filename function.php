<?php


function getStatusMessage($statusCode = 0) {
    $errors = [
        '0' => "",
        '1' => "Duplicate username",
        '2' => "Username or Password Empty",
        '3' => "User Created Successfully",
        '4' => "Password didt Match",
        '5' => "User not Exist",
    ];
    return $errors[$statusCode];
}
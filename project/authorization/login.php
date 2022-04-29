<?php

$host = 'localhost';
$base = 'users';
$baseUser = 'fryderykchopin';
$password = 'Pqeludiumdesz491';

function checkPass($user, $pass) {
  //Umożliwienie odwołań do zmiennych globalnych
  global $host, $base, $baseUser, $password;

  //Sprawdzenie długości przekazanych ciągów
    
    //Dla kodowania jednobajtowego
    //$userNameLength = strlen($user);
    //$userPassLength = strlen($pass);
    
    //Dla kodowania utf-8 (1)
    //$userNameLength = strlen(utf8_decode($user));

    //$userPassLength = strlen(utf8_decode($pass));
    
    //Dla kodowania utf-8 (2)

    $userNameLength = mb_strlen($user, 'UTF-8');
    $userPassLength = mb_strlen($pass, 'UTF-8');
}


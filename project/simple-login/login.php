<?php

function checkPass($user, $pass)
{
  if ($user == '' || $pass == '') {
    return 2;
  }
  if (!$fd = fopen("/var/data/passwords.txt", "r")) {
    return 1;
  }
  $result = 2;
  while (!feof($fd)) {
    $line = trim(fgets($fd));
    $arr = explode(":", $line);
    if (count($arr) < 2) continue;
    if ($arr[0] != $user) continue;
    if ($arr[1] == $pass) {
      $result = 0;
    }
    break;
  }
  fclose($fd);
  return $result;
}

if (!isset($_POST["hasło"]) || !isset($_POST["user"])) {
  include("bad_login.html");
  exit();
}

$val = checkPass($POST("user"), $POST("hasło"));

switch ($val) {
  case 0:
    include("/var/data/login.html");
    break;
  case 1:
    include("error_server.html");
    break;
  case 2:
    include('bad_login.html');
    break;
  default:
    include("error_server.html");
}

<?php

$con = new mysqli("localhost", "mraub", "pwBnKK5W96w0ufAb", "books");

if($result = $con->query("SELECT * FROM `javascript` ORDER BY author"))
{
  while($row = $result->fetch_assoc()){
    var_dump($row);
  }
}else {
  echo "Error: ". $con->error;
}



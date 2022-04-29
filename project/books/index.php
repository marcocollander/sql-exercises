<?php

if (isset($GET["value"])) {
  $value = $GET["value"];
  $con = new mysqli("localhost", "mraub", "pwBnKK5W96w0ufAb", "books");

  if ($con->query("INSERT INTO `javascript` (`author`, `title`, `published_by`, `year`, `isbn`) VALUES('$value')")) {
    echo "Wszystko ok";
  } else {
    echo "Error: " . $con->error;
  }
}

?>

<form action="" method="get">
  <p>
    <label for="author">Autor:</label>
    <input id="author" type="text" name="author">
  </p>
  <p>
    <label for="title">Tytuł:</label>
    <input id="title" type="text" name="title">
  </p>
  <p>
    <label for="published_by">Wydawnictwo:</label>
    <input id="published_by" type="text" name="published_by">
  </p>
  <p>
    <label for="year">Rok wydania:</label>
    <input id="year" type="text" name="year">
  </p>
  <p>
    <label for="isbn">ISBN:</label>
    <input id="isbn" type="text" name="isbn">
  </p>
  <p>
    <input type="submit" value="Dodaj">
  </p>
</form>





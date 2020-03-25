<?php include __DIR__ . "/layout/header.php"; ?>

  <form method="post" action="Erfassung.php">
    <label for="Datum">Datum:</label>
    <input type="date" id="date" name="date">

    <label for="Datum">Von:</label>
    <input type="time" id="timefrom" name="timefrom">

    <label for="Datum">Bis:</label>
    <input type="time" id="timeto" name="timeto">

    <label for="Datum">Projekt:</label>
    <input type="text" id="project" name="project">

    <input type="submit" value="Speichern">
  </form>

<?php
  $date = $_POST['date'];
  $timefrom = $_POST['timefrom'];
  $timeto = $_POST['timeto'];
  $project = $_POST['project'];

  var_dump($date);
  var_dump($timefrom);
  var_dump($timeto);
  var_dump($project);
?>

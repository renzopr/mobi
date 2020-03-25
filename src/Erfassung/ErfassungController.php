<?php
  $date = "2020-03-16";
  $timefrom = "10:00";
  $timeto = "12:00";
  $project = "Foo";



  
  var_dump($date);
  var_dump($timefrom);
  var_dump($timeto);
  var_dump($project);

  var_dump ($x = makeTimeStamp($date, $timefrom));
  var_dump ($y = makeTimeStamp($date, $timeto));
  var_dump(calcHour($x, $y));



  function makeTimeStamp($date, $time)
  {
    $arrTime = explode(":", $time);
    $arrDate = explode("-", $date);

    return mktime($arrTime[0],$arrTime[1], 0, $arrDate[1], $arrDate[2], $arrDate[0]);
    //mktime(H m s M d y)
  }

  function calcHour($tmstmp1, $tmstmp2)
  {
    return ($tmstmp2 - $tmstmp1) / (60 * 60);
  }
  /*
      echo date("d.m.Y H:i:s", $tmstmp);

      $date = $_POST['date'];
      $timefrom = $_POST['timefrom'];
      $timeto = $_POST['timeto'];
      $project = $_POST['project'];
  */

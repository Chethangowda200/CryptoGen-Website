<?php
$mysqli = new mysqli('localhost','root','','db');
   if($mysqli->connect_errno){
      echo $mysqli->connect_errno.": ".$mysqli->connect_error;
   }
 ?>

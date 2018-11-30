<?php

include ('database.php');

$tbl="CREATE TABLE IF NOT EXISTS inquiry(
      id int(11) not null auto_increment primary key,
      email varchar(50) not null,
      name varchar(50) not null,
      message varchar(50) not null);";
      $db->myExec($tbl);

 $insert="INSERT INTO inquiry VALUES
        (1,'test@gmail.com','test','mok1');";

       $db->myExec($insert);
       ?>

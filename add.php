<?php
include ('database.php');

if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $message=$_POST['message'];
 $email=$_POST['email'];

 $int=$db->insertRow("INSERT INTO inquiry(name,message,email) VALUES(?,?,?,?)",array($name,$message,$email));

 if($int>0)
 {
  echo "<font color='green'>Data Added successffully!";
     header("Location:index.php");
 }
 else
 {
  echo "Error";
     header("Location:index.php");
 }
}

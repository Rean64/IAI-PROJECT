<?php
session_start();
require 'db.php';


if(isset($_POST['taken']))
{
  $id = mysqli_real_escape_string($con, $_POST['taken']);
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $message = "Client Accepted";

  $query = "INSERT INTO messages(id,name,message)";

  $query .= "VALUES ('$id','$name','$message')";
  
  mysqli_query($con, $query);

  }

  ?>
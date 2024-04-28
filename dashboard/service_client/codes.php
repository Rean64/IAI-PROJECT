<?php
session_start();
require 'db.php';


if(isset($_POST['delete_personel']))
{
  $personel_id = mysqli_real_escape_string($con, $_POST['delete_personel']);

  $query = "DELETE FROM admin WHERE id='$personel_id'";
  $query_run = mysqli_query($con, $query);

  if($query_run)
  {
    $_SESSION['message'] = "Personel Deleted Successfully";
      header("Location: index.php"); 
      exit(0);
  }else {
    $_SESSION['message'] = "Personel Not Deleted";
      header("Location: index.php");
      exit(0);
  }
}




// update table section

if(isset($_POST['update_personel']))
{
  
  $personel_id = mysqli_real_escape_string($con, $_POST['personel_id']);
  $position = mysqli_real_escape_string($con, $_POST['position']);
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $date = mysqli_real_escape_string($con, $_POST['date']);


  $query = "UPDATE admin SET  position='$position', name='$name', password='$password', date='$date'";
  $query_run = mysqli_query($con, $query);
  

  if($query_run)
  {
    $_SESSION['message'] = "Personel Update Successfully";
      header("Location: index.php");
      exit(0);
  }else{
    $_SESSION['message'] = "Personel Not Updated";
      header("Location: edits.php");
      exit(0);
  }
}




// save section
if(isset($_POST['save_personel']))
{
  
    $position = mysqli_real_escape_string($con, $_POST['position']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $date = mysqli_real_escape_string($con, $_POST['date']);

    $query = "INSERT INTO admin(position,name,password,date)";
    $query .= "VALUES ('$position','$name','$password','$date')";


    $query_run = mysqli_query($con, $query);
    

    if($query_run){
      $_SESSION['message'] = "Personel Created Successfully";
      header("Location: index.php");
      exit(0);
    }else {
      $_SESSION['message'] = "Personel Not Created";
      header("Location: creates.php");
      exit(0);
    }
  }
 

?>
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
    $_SESSION['message'] = "Suppression effectuer";
      header("Location: index.php"); 
      exit(0);
  }else {
    $_SESSION['message'] = "Echec de la suppression";
      header("Location: index.php");
      exit(0);
  }
}

if(isset($_POST['delete_chef']))
{
  $personel_id = mysqli_real_escape_string($con, $_POST['delete_chef']);

  $query = "DELETE FROM chef WHERE id='$personel_id'";
  $query_run = mysqli_query($con, $query);

  if($query_run)
  {
    $_SESSION['message'] = "Suppression effectuer";
      header("Location: index.php"); 
      exit(0);
  }else {
    $_SESSION['message'] = "Echec de la suppression";
      header("Location: index.php");
      exit(0);
  }
}

if(isset($_POST['delete_director']))
{
  $personel_id = mysqli_real_escape_string($con, $_POST['delete_director']);

  $query = "DELETE FROM director WHERE id='$personel_id'";
  $query_run = mysqli_query($con, $query);

  if($query_run)
  {
    $_SESSION['message'] = "Suppression effectuer";
      header("Location: index.php"); 
      exit(0);
  }else {
    $_SESSION['message'] = "Echec de la suppression";
      header("Location: index.php");
      exit(0);
  }
}

if(isset($_POST['delete_service']))
{
  $personel_id = mysqli_real_escape_string($con, $_POST['delete_service']);

  $query = "DELETE FROM services WHERE id='$personel_id'";
  $query_run = mysqli_query($con, $query);

  if($query_run)
  {
    $_SESSION['message'] = "Suppression effectuer";
      header("Location: index.php"); 
      exit(0);
  }else {
    $_SESSION['message'] = "Echec de la suppression";
      header("Location: index.php");
      exit(0);
  }
}

if(isset($_POST['delete_personels']))
{
  $personel_id = mysqli_real_escape_string($con, $_POST['delete_personels']);

  $query = "DELETE FROM client WHERE id='$personel_id'";
  $query_run = mysqli_query($con, $query);

  if($query_run)
  {
    $_SESSION['message'] = "Suppression effectuer";
      header("Location: index.php"); 
      exit(0);
  }else {
    $_SESSION['message'] = "Echec de la suppression";
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
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $age = mysqli_real_escape_string($con, $_POST['age']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $location = mysqli_real_escape_string($con, $_POST['location']);


  $query = "UPDATE admin SET  position='$position', name='$name', email='$email', password='$password', gender='$gender', age='$age', phone='$phone', location='$location' WHERE id ='$personel_id'";
  $query_run = mysqli_query($con, $query);
  

  if($query_run)
  {
    $_SESSION['message'] = "Modification effectuer";
      header("Location: index.php");
      exit(0);
  }else{
    $_SESSION['message'] = "Echec de la modification";
      header("Location: edits.php");
      exit(0);
  }
}

if(isset($_POST['update_personel1']))
{
  
  $personel_id = mysqli_real_escape_string($con, $_POST['personel_id']);

  $position = mysqli_real_escape_string($con, $_POST['position']);
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $age = mysqli_real_escape_string($con, $_POST['age']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $location = mysqli_real_escape_string($con, $_POST['location']);


  $query = "UPDATE chef SET  position='$position', name='$name', email='$email', password='$password', gender='$gender', age='$age', phone='$phone', location='$location' WHERE id ='$personel_id'";
  $query_run = mysqli_query($con, $query);
  

  if($query_run)
  {
    $_SESSION['message'] = "Modification effectuer";
      header("Location: index.php");
      exit(0);
  }else{
    $_SESSION['message'] = "Echec de la modification";
      header("Location: edits.php");
      exit(0);
  }
}

if(isset($_POST['update_personel2']))
{
  
  $personel_id = mysqli_real_escape_string($con, $_POST['personel_id']);

  $position = mysqli_real_escape_string($con, $_POST['position']);
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $age = mysqli_real_escape_string($con, $_POST['age']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $location = mysqli_real_escape_string($con, $_POST['location']);


  $query = "UPDATE director SET  position='$position', name='$name', email='$email', password='$password', gender='$gender', age='$age', phone='$phone', location='$location' WHERE id ='$personel_id'";
  $query_run = mysqli_query($con, $query);
  

  if($query_run)
  {
    $_SESSION['message'] = "Modification effectuer";
      header("Location: index.php");
      exit(0);
  }else{
    $_SESSION['message'] = "Echec de la modification";
      header("Location: edits.php");
      exit(0);
  }
}

if(isset($_POST['update_personel3']))
{
  
  $personel_id = mysqli_real_escape_string($con, $_POST['personel_id']);

  $position = mysqli_real_escape_string($con, $_POST['position']);
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $age = mysqli_real_escape_string($con, $_POST['age']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $location = mysqli_real_escape_string($con, $_POST['location']);


  $query = "UPDATE services SET  position='$position', name='$name', email='$email', password='$password', gender='$gender', age='$age', phone='$phone', location='$location' WHERE id ='$personel_id'";
  $query_run = mysqli_query($con, $query);
  

  if($query_run)
  {
    $_SESSION['message'] = "Modification effectuer";
      header("Location: index.php");
      exit(0);
  }else{
    $_SESSION['message'] = "Echec de la modification";
      header("Location: edits.php");
      exit(0);
  }
}

if(isset($_POST['update_personels']))
{
  
  $personel_id = mysqli_real_escape_string($con, $_POST['personel_id']);

  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $age = mysqli_real_escape_string($con, $_POST['age']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $location = mysqli_real_escape_string($con, $_POST['location']);


  $query = "UPDATE client SET  name='$name', email='$email', password='$password', gender='$gender', age='$age', phone='$phone', location='$location' WHERE id ='$personel_id'";
  $query_run = mysqli_query($con, $query);
  

  if($query_run)
  {
    $_SESSION['message'] = "Modification effectuer";
      header("Location: index.php");
      exit(0);
  }else{
    $_SESSION['message'] = "Echec de la modification";
      header("Location: edits.php");
      exit(0);
  }
}




// save section
if(isset($_POST['save_personel']))
{
  
  $position = mysqli_real_escape_string($con, $_POST['position']);
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $age = mysqli_real_escape_string($con, $_POST['age']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $location = mysqli_real_escape_string($con, $_POST['location']);

    $query = "INSERT INTO admin(position,name,email,password,gender,age,phone,location)";
    $query .= "VALUES ('$position','$name','$email','$password','$gender','$age','$phone','$location')";
    

  $query_run = mysqli_query($con, $query);

    if($query_run){
      $_SESSION['message'] = "Ajouter avec succes";
      header("Location: index.php");
      exit(0);
    }else {
      $_SESSION['message'] = "Echec de l'ajout";
      header("Location: creates.php");
      exit(0);
    }
  }


  
if(isset($_POST['save_chef']))
{ 
  $position = mysqli_real_escape_string($con, $_POST['position']);
  $name = mysqli_real_escape_string($con, $_POST['nom']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $age = mysqli_real_escape_string($con, $_POST['age']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $location = mysqli_real_escape_string($con, $_POST['location']);

  $query = "INSERT INTO chef(position,name,email,password,gender,age,phone,location)";
  $query .= "VALUES ('$position','$name','$email','$password','$gender','$age','$phone','$location')";
    
  $query_run = mysqli_query($con, $query);

  
    if($query_run){
      $_SESSION['message'] = "Ajouter avec succes";
      header("Location: index.php");
      exit(0);
    }else {
      $_SESSION['message'] = "Echec de l'ajout";
      header("Location: creates.php");
      exit(0);
    }
  }


if(isset($_POST['save_director']))
{
  $position = mysqli_real_escape_string($con, $_POST['position']);
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $age = mysqli_real_escape_string($con, $_POST['age']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $location = mysqli_real_escape_string($con, $_POST['location']);

    $query = "INSERT INTO director(position,name,email,password,gender,age,phone,location)";
    $query .= "VALUES ('$position','$name','$email','$password','$gender','$age','$phone','$location')";
    

  $query_run = mysqli_query($con, $query);

    if($query_run){
      $_SESSION['message'] = "Ajouter avec succes";
      header("Location: index.php");
      exit(0);
    }else {
      $_SESSION['message'] = "Echec de l'ajout";
      header("Location: creates.php");
      exit(0);
    }
  }


if(isset($_POST['save_service']))
{
  
  $position = mysqli_real_escape_string($con, $_POST['position']);
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $age = mysqli_real_escape_string($con, $_POST['age']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $location = mysqli_real_escape_string($con, $_POST['location']);

    $query = "INSERT INTO services(position,name,email,password,gender,age,phone,location)";
    $query .= "VALUES ('$position','$name','$email','$password','$gender','$age','$phone','$location')";
    

  $query_run = mysqli_query($con, $query);

      if($query_run){
      $_SESSION['message'] = "Ajouter avec succes";
      header("Location: index.php");
      exit(0);
    }else {
      $_SESSION['message'] = "Echec de l'ajout";
      header("Location: creates.php");
      exit(0);
    }
  }



 
  if(isset($_POST['save_personels'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $location = mysqli_real_escape_string($con, $_POST['location']);

    $query = "INSERT INTO client(name,email,password,gender,age,phone,location)";
    $query .= "VALUES ('$name','$email','$password','$gender','$age','$phone','$location')";


    $query_run = mysqli_query($con, $query);


    if($query_run){
      $_SESSION['message'] = "Creer avec succes";
      header("Location: index.php");
      exit(0);
    }else {
      $_SESSION['message'] = "Echec de l'ajout";
      header("Location: create.php");
      exit(0);
    }
  }

?>
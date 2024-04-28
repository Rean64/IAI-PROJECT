<?php
session_start();
require 'db.php';

if(isset($_POST['delete_personel']))
{
  $personel_id = mysqli_real_escape_string($con, $_POST['delete_personel']);

  $query = "DELETE FROM contract WHERE id='$personel_id'";
  $querys = "DELETE FROM messages WHERE id='$personel_id'";
  $query_run = mysqli_query($con, $query);
  mysqli_query($con, $querys);

  if($query_run)
  {
    $_SESSION['message'] = "Suppression effectuer";
      header("Location: home.php");
      exit(0);
  }else {
    $_SESSION['message'] = "Echec de la suppression";
      header("Location: home.php");
      exit(0);
  }
}




// update table section
if(isset($_POST['update_personel']))
{
  
  $personel_id = mysqli_real_escape_string($con, $_POST['personel_id']);

  $assure = mysqli_real_escape_string($con, $_POST['assure']);
  $montant = mysqli_real_escape_string($con, $_POST['montant']);
  $taille = mysqli_real_escape_string($con, $_POST['taille']);
  $poid = mysqli_real_escape_string($con, $_POST['poid']);
  $product_name = mysqli_real_escape_string($con, $_POST['product_name']);
  $banque = mysqli_real_escape_string($con, $_POST['banque']);
  $etat = mysqli_real_escape_string($con, $_POST['etat']);
  $prime = mysqli_real_escape_string($con, $_POST['prime']);
  $beneficaire = mysqli_real_escape_string($con, $_POST['beneficaire']);
  $age = mysqli_real_escape_string($con, $_POST['age']);
  $date = mysqli_real_escape_string($con, $_POST['date']);
  $duree = mysqli_real_escape_string($con, $_POST['duree']);

  $query = "UPDATE contract SET  assure='$assure', montant='$montant', taille='$taille', poid='$poid', product_name='$product_name', banque='$banque', etat='$etat', prime='$prime', beneficaire='$beneficaire', age='$age', date='$date', duree='$duree' WHERE id='$personel_id'";

  $query_run = mysqli_query($con, $query);

  if($query_run)
  {
    $_SESSION['message'] = "Modification effectuer";
      header("Location: home.php");
      exit(0);
  }else{
    $_SESSION['message'] = "Echec de la modification";
      header("Location: home.php");
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

  $query = "UPDATE director SET  name='$name', email='$email', password='$password', gender='$gender', age='$age', phone='$phone', location='$location' WHERE id='$personel_id'";

  $query_run = mysqli_query($con, $query);

  if($query_run)
  {
    $_SESSION['message'] = "Modification effectuer";
      header("Location: index.php");
      exit(0);
  }else{
    $_SESSION['message'] = "Echec de la modification";
      header("Location: personel-edit.php");
      exit(0);
  }
}




// save section
if(isset($_POST['save_student']))
{
  $personel_id = mysqli_real_escape_string($con, $_POST['personel_id']);

  $assure = mysqli_real_escape_string($con, $_POST['assure']);
  $montant = mysqli_real_escape_string($con, $_POST['montant']);
  $taille = mysqli_real_escape_string($con, $_POST['taille']);
  $poid = mysqli_real_escape_string($con, $_POST['poid']);
  $product_name = mysqli_real_escape_string($con, $_POST['product_name']);
  $banque = mysqli_real_escape_string($con, $_POST['banque']);
  $etat = mysqli_real_escape_string($con, $_POST['etat']);
  $prime = mysqli_real_escape_string($con, $_POST['prime']);
  $beneficaire = mysqli_real_escape_string($con, $_POST['beneficaire']);
  $age = mysqli_real_escape_string($con, $_POST['age']);
  $date = mysqli_real_escape_string($con, $_POST['date']);
  $duree = mysqli_real_escape_string($con, $_POST['duree']);

  $query = "INSERT INTO contract(assure,montant,taille,poid,product_name,banque,etat,prime,beneficaire,age,date,duree)";

  $query .= "VALUES ('$assure','$montant','$taille','$poid','$product_name','$banque','$etat','$prime','$beneficaire','$age','$date','$duree')";
  
  $query_run = mysqli_query($con, $query);



    if($query_run){
      $_SESSION['message'] = "Modification effectuer";
      header("Location: create.php");
      exit(0);
    }else {
      $_SESSION['message'] = "Echec de la modification";
      header("Location: create.php");
      exit(0);
    }
  }


?>
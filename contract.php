<?php
session_start();
include_once 'db.php';


// save section
if(isset($_POST['store']))
{
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
      $_SESSION['message'] = "Client Created Successfully";
      header("Location: home.php");
      exit(0);
    }else {
      die("Connection error" .mysqli_error());
      exit(0);
    }
  }
 

?>
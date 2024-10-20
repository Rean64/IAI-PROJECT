<?php
// Start the session (this must be at the top of the script)
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
require 'db.php';


$id = $_POST['id'];
$sqls = "SELECT * FROM messages WHERE unique_id='$id'";
$stmt = $con->prepare($sqls);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0){
  echo '<script>alert("This already exist!")</script>';
  echo '<script>window.location.href="home.php"</script>';
}else 
{
if(isset($_POST['taken']))
{
  $name =  $_POST['assure'];
  // Add a new message to the session
  $message = [
    'icon' => 'fa-check',        // Example icon
    'title' => 'Verification Code',  // Message title
    'content' => "{$name} Souscription reussi.", // Message content
    'color' => '#28a745'        // Color for success
  ];
  $messageD = [
    'icon' => 'fa-check',        // Example icon
    'title' => 'Verification Code',  // Message title
    'content' => "{$name} Souscription reussi.", // Message content
    'color' => '#28a745'        // Color for success
  ];

  $_SESSION['maxi'] = true;
  $_SESSION['info'] = true;
  $_SESSION['status'] = true;
  $_SESSION['payment'] = true;
  $_SESSION['ids'] = $id;
  $status="accepted";
  $user=$_POST['id'];
  $messagePass = [
    'icon' => 'fa-check',        // Example icon
    'title' => "{$name} Verification Code",  // Message title
    'content' => $user, // Message content
    'color' => '#28a745'        // Color for success
  ];
  
  $query = "INSERT INTO messages(name, valid, unique_id)";
  $query .= "VALUES ('$name','$status','$user')";
  $sql = mysqli_query($con, $query);


  $querys = "UPDATE contract SET valid = '$status' WHERE unique_id = $user";
  $sqls = mysqli_query($con, $querys);
  
  if($sql){
    // If $_SESSION['mess'] doesn't exist, create an array
    if (!isset($_SESSION['notifications'])) {
      $_SESSION['notifications'] = [];
    }
    // Add the new notifications to the session array
    $_SESSION['notifications'][] = $message;
    // If $_SESSION['mess'] doesn't exist, create an array
    if (!isset($_SESSION['notificationsd'])) {
      $_SESSION['notifications'] = [];
    }
    // Add the new notifications to the session array
    $_SESSION['notificationsd'][] = $messageD;
    $_SESSION['home'] = $message; 
    $_SESSION['view'] = $status;
    if (!isset($_SESSION['motdepass'])) {
        $_SESSION['motdepass'] = [];
    }
    // Add messages to session
    $_SESSION['motdepass'][] =$messagePass;
    $_SESSION['papi'] = true;
    header("Location: home.php");
  }
  
}



if(isset($_POST['reject']))
{
  $name = mysqli_real_escape_string($con, $_POST['assure']);
    // Add a new message to the session
    $message = [
      'icon' => 'fa-xmark',        // Example icon
      'title' => 'Verification Code',  // Message title
      'content' => "{$name} Soustription rejecter.", // Message content
      'color' => 'red'        // Color for success
    ];
    $messageD = [
      'icon' => 'fa-xmark',        // Example icon
      'title' => 'Verification Code',  // Message title
      'content' => "{$name} Soustription rejecter.", // Message content
      'color' => 'red'        // Color for success
    ];
  $_SESSION['maxi'] = true;
  $_SESSION['info'] = false;
  $_SESSION['status'] = false;
  $status="rejected";
  $user=$_POST['id'];

  $query = "INSERT INTO messages(name, valid, unique_id)";
  $query .= "VALUES ('$name','$status','$user')";
  $sql = mysqli_query($con, $query);

  $querys = "UPDATE contract SET valid = '$status' WHERE unique_id = $user";
  $sqls = mysqli_query($con, $querys);
  
  if($sql){
    // If $_SESSION['mess'] doesn't exist, create an array
    if (!isset($_SESSION['notifications'])) {
      $_SESSION['notifications'] = [];
    }
    // Add the new notifications to the session array
    $_SESSION['notifications'][] = $message;
    // If $_SESSION['mess'] doesn't exist, create an array
    if (!isset($_SESSION['notificationsd'])) {
      $_SESSION['notifications'] = [];
    }
    // Add the new notifications to the session array
    $_SESSION['notificationsd'][] = $messageD;
    $_SESSION['views'] = $status;
    header("Location: home.php");
  }
  
}
}


if(isset($_POST['id'])){
  
}

// if(isset($_POST['delete_personel']))
// {
//   $personel_id = mysqli_real_escape_string($con, $_POST['delete_personel']);

//   $query = "DELETE FROM contract WHERE id='$personel_id'";
//   $query_run = mysqli_query($con, $query);

//   if($query_run)
//   {
//     $_SESSION['message'] = "Personel Deleted Successfully";
//       header("Location: index.php");
//       exit(0);
//   }else {
//     $_SESSION['message'] = "Personel Not Deleted";
//       header("Location: index.php");
//       exit(0);
//   }
// }




// update table section
// if(isset($_POST['update_personel']))
// {
  
//   $personel_id = mysqli_real_escape_string($con, $_POST['personel_id']);

//   $assure = mysqli_real_escape_string($con, $_POST['assure']);
//   $montant = mysqli_real_escape_string($con, $_POST['montant']);
//   $taille = mysqli_real_escape_string($con, $_POST['taille']);
//   $poid = mysqli_real_escape_string($con, $_POST['poid']);
//   $product_name = mysqli_real_escape_string($con, $_POST['product_name']);
//   $banque = mysqli_real_escape_string($con, $_POST['banque']);
//   $etat = mysqli_real_escape_string($con, $_POST['etat']);
//   $prime = mysqli_real_escape_string($con, $_POST['prime']);
//   $beneficaire = mysqli_real_escape_string($con, $_POST['beneficaire']);
//   $age = mysqli_real_escape_string($con, $_POST['age']);
//   $date = mysqli_real_escape_string($con, $_POST['date']);
//   $duree = mysqli_real_escape_string($con, $_POST['duree']);

//   $query = "UPDATE contract SET  assure='$assure', montant='$montant', taille='$taille', poid='$poid', product_name='$product_name', banque='$banque', etat='$etat', prime='$prime', beneficaire='$beneficaire', age='$age', date='$date', duree='$duree' WHERE id='$personel_id'";

//   $query_run = mysqli_query($con, $query);

//   if($query_run)
//   {
//     $_SESSION['message'] = "Modification effectuer";
//       header("Location: index.php");
//       exit(0);
//   }else{
//     $_SESSION['message'] = "Personel Not Updated";
//       header("Location: index.php");
//       exit(0);
//   }
// }


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

  $query = "UPDATE chef SET  name='$name', email='$email', password='$password', gender='$gender', age='$age', phone='$phone', location='$location' WHERE id='$personel_id'";

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
if(isset($_POST['save_personel']))
{
  // $personel_id = mysqli_real_escape_string($con, $_POST['personel_id']);

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
      header("Location: create.php");
      exit(0);
    }else {
      $_SESSION['message'] = "Client Not Created";
      header("Location: create.php");
      exit(0);
    }
  }


?>
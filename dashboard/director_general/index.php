<?php
  session_start();
  require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <!-- Glide js -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css.css?<?php echo time();?>" />
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/all.min.css">
    <title>Director General</title>
    <style>
      body{
        padding-top: 200px;
        font-family: Roboto;
        font-size: 15px;
        background-image: linear-gradient(rgba(6, 3, 131, 0.767),rgba(0, 0, 0, 0.644)),url(./image/preview.jpg);
        background-size: cover !important;
        background-position: center !important;
        background-repeat: no-repeat;
        background-attachment: fixed;
        height: 100vh;
      }
      .nav-link{
        color: white !important;
      }
      .bg{
        background-color:#1e1e53;
      }
    </style>
  </head>
  <body>
  <!-- header -->
  <nav class="navbar navbar-light navbar-expand-lg bg py-3 text-light fixed-top">
    <div class="container">
      <a href="#" class="navbar-brand">
      <img src="image/logo1.jpeg" alt="" style="width:50px;border-radius:25px">
      </a>

      <div class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <div class="navbar-toggler-icon"></div>
      </div>

      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="home.php" class="nav-link active">Souscription</a>
          </li>
          <li class="nav-item">
            <a href="https://chat.whatsapp.com/H2mSCu6Uawg125vnwuAVKH" class="nav-link"> <img src="image/logo.png" alt="" style="width:30px;margin-top:-5px"></a>
          </li>
        </ul>
      </div>
      
  </nav>
  <!-- header end  -->


<div class="container mt-5">
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4>Compte personnel
        </h4>
      </div>
      <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
              <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Mot de passe</th>
                    <th>Sexe</th>
                    <th>Date de naissance</th>
                    <th>Telephone</th>
                    <th>Localisation</th>
                    <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  $query = "SELECT * FROM director";
                  $query_run = mysqli_query($con, $query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                      foreach ($query_run as $personel) {

                        ?>

                        <tr>
                          <td><?= $personel['id']; ?></td>
                          <td><?= $personel['name']; ?></td>
                          <td><?= $personel['email']; ?></td>
                          <td><?= $personel['password']; ?></td>
                          <td><?= $personel['gender']; ?></td>
                          <td><?= $personel['age']; ?></td>
                          <td><?= $personel['phone']; ?></td>
                          <td><?= $personel['location']; ?></td>
                          <td>
                            <a href="personel-view.php?id=<?= $personel['id']; ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"  style="color:white"></i></a>
                            <a href="personel-edit.php?id=<?= $personel['id']; ?>" class="btn btn-success btn-sm"><i class="fas fa-pen"  style="color:white"></i></a>
                          </td>
                        </tr>

                       <?php
                      }
                  } else {
                    echo "<h5>No Record Found</h5>";
                  }
              ?>
             
            </tbody>
          </table>
      </div>
    </div>
  </div>
</div>
</div>
 



  </body>
  <script src="js/bootstrap.min.js"></script>
</html>

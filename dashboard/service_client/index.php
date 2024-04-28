<?php
  session_start();
  require 'db.php';
?>
<style>
  body{
    padding-top:150px;
  }

  .nav-link{
    color: white !important;
  }
  .bg{
    background-color:#1e1e53;
  }
</style>

<?php include('includes/header.php'); ?>
  
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
            <a href="index.php" class="nav-link active">Compte</a>
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
                  $position = "Service Client";
                  $query = "SELECT * FROM services WHERE position = '$position'";
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


<?php include('includes/footer.php'); ?>
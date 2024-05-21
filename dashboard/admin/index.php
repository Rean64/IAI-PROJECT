<?php
  session_start();
  require 'db.php';
?>
<style>
  body{
    padding-top:100px;
    color: white;
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
            <a href="../post.php" class="nav-link active">Post</a>
          </li>
          <li class="nav-item">
            <a href="index.php" class="nav-link active">Compte</a>
          </li>
          <li class="nav-item">
            <a href="https://chat.whatsapp.com/H2mSCu6Uawg125vnwuAVKH" class="nav-link"> <img src="image/logo.png" alt="" style="width:30px;margin-top:-5px;z-index:99"></a>
          </li>
        </ul>
      </div>
      
  </nav>
  <!-- header end  -->

  <div class="container mt-5">
 
    <?php include('message.php') ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Compte administrateur
              <a href="../index.php" class="btn btn-danger float-end ms-1">Deconnecter</a>
              <a href="creates.php" class="btn btn-primary float-end">Ajouter</a>
            </h4>
          </div>
          <div class="form-group me-3">
            <input type="text" id="myInput" placeholder="Search...." class="form-control float-end" style="max-width:200px">
          </div>
          <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Position</th>
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
                <tbody id="myTable">
                  <?php
                  $count = 1;
                      $query = "SELECT * FROM admin";
                      $query_run = mysqli_query($con, $query);

                      if(mysqli_num_rows($query_run) > 0)
                      {
                          foreach ($query_run as $personel) {

                            ?>

                            <tr>
                              <td><?= $count++; ?></td>
                              <td><?= $personel['position']; ?></td>
                              <td><?= $personel['name']; ?></td>
                              <td><?= $personel['email']; ?></td>
                              <td><?= $personel['password']; ?></td>
                              <td><?= $personel['gender']; ?></td>
                              <td><?= $personel['age']; ?></td>
                              <td><?= $personel['phone']; ?></td>
                              <td><?= $personel['location']; ?></td>
                              <td>
                                <a href="views.php?id=<?= $personel['id']; ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"  style="color:white"></i></a>
                                <a href="edits.php?id=<?= $personel['id']; ?>" class="btn btn-success btn-sm"><i class="fas fa-pen"  style="color:white"></i></a>
                                <form action="codes.php" method="POST" class="d-inline">
                                  <button type="submit" name="delete_personel" value="<?=$personel['id'];?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-can"  style="color:white"></i></button>
                                </form>
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
  
  <div class="container mt-5">
 
    <?php include('message.php') ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Compte chef d'agence
              <a href="../index.php" class="btn btn-danger float-end ms-1">Deconnecter</a>
              <a href="creates3.php" class="btn btn-primary float-end">Ajouter</a>
            </h4>
          </div>
          <div class="form-group me-3">
            <input type="text" id="myInput1" placeholder="Search...." class="form-control float-end" style="max-width:200px">
          </div>
          <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>ID</th>
                    <th>Position</th>
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
                <tbody id="myTable1">
                  <?php
                  $count = 1;
                      $query = "SELECT * FROM chef";
                      $query_run = mysqli_query($con, $query);

                      if(mysqli_num_rows($query_run) > 0)
                      {
                          foreach ($query_run as $personel) {

                            ?>

                            <tr>
                              <td><?= $count++; ?></td>
                              <td><?= $personel['position']; ?></td>
                              <td><?= $personel['name']; ?></td>
                              <td><?= $personel['email']; ?></td>
                              <td><?= $personel['password']; ?></td>
                              <td><?= $personel['gender']; ?></td>
                              <td><?= $personel['age']; ?></td>
                              <td><?= $personel['phone']; ?></td>
                              <td><?= $personel['location']; ?></td>
                              <td>
                                <a href="views1.php?id=<?= $personel['id']; ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"  style="color:white"></i></a>
                                <a href="edits1.php?id=<?= $personel['id']; ?>" class="btn btn-success btn-sm"><i class="fas fa-pen"  style="color:white"></i></a>
                                <form action="codes.php" method="POST" class="d-inline">
                                  <button type="submit" name="delete_chef" value="<?=$personel['id'];?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-can"  style="color:white"></i></button>
                                </form>
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
  
  <div class="container mt-5">
 
    <?php include('message.php') ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Compte directeur general
              <a href="../index.php" class="btn btn-danger float-end ms-1">Deconnecter</a>
              <a href="creates2.php" class="btn btn-primary float-end">Ajouter</a>
            </h4>
          </div>
          <div class="form-group me-3">
            <input type="text" id="myInput2" placeholder="Search...." class="form-control float-end" style="max-width:200px">
          </div>
          <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>ID</th>
                    <th>Position</th>
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
                <tbody id="myTable2">
                  <?php
                      $count = 1;
                      $query = "SELECT * FROM director";
                      $query_run = mysqli_query($con, $query);

                      if(mysqli_num_rows($query_run) > 0)
                      {
                          foreach ($query_run as $personel) {

                            ?>

                            <tr>
                              <td><?= $count++; ?></td>
                              <td><?= $personel['position']; ?></td>
                              <td><?= $personel['name']; ?></td>
                              <td><?= $personel['email']; ?></td>
                              <td><?= $personel['password']; ?></td>
                              <td><?= $personel['gender']; ?></td>
                              <td><?= $personel['age']; ?></td>
                              <td><?= $personel['phone']; ?></td>
                              <td><?= $personel['location']; ?></td>
                              <td>
                                <a href="views2.php?id=<?= $personel['id']; ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"  style="color:white"></i></a>
                                <a href="edits2.php?id=<?= $personel['id']; ?>" class="btn btn-success btn-sm"><i class="fas fa-pen"  style="color:white"></i></a>
                                <form action="codes.php" method="POST" class="d-inline">
                                  <button type="submit" name="delete_director" value="<?=$personel['id'];?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-can"  style="color:white"></i></button>
                                </form>
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
  
  <div class="container mt-5">
 
    <?php include('message.php') ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Compte service d'aide
              <a href="../index.php" class="btn btn-danger float-end ms-1">Deconnecter</a>
              <a href="creates1.php" class="btn btn-primary float-end">Ajouter</a>
            </h4>
          </div>
          <div class="form-group me-3">
            <input type="text" id="myInput3" placeholder="Search...." class="form-control float-end" style="max-width:200px">
          </div>
          <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>ID</th>
                    <th>Position</th>
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
                <tbody id="myTable3">
                  <?php
                  $count = 1;
                      $query = "SELECT * FROM services";
                      $query_run = mysqli_query($con, $query);

                      if(mysqli_num_rows($query_run) > 0)
                      {
                          foreach ($query_run as $personel) {

                            ?>

                            <tr>
                              <td><?= $count++; ?></td>
                              <td><?= $personel['position']; ?></td>
                              <td><?= $personel['name']; ?></td>
                              <td><?= $personel['email']; ?></td>
                              <td><?= $personel['password']; ?></td>
                              <td><?= $personel['gender']; ?></td>
                              <td><?= $personel['age']; ?></td>
                              <td><?= $personel['phone']; ?></td>
                              <td><?= $personel['location']; ?></td>
                              <td>
                                <a href="views3.php?id=<?= $personel['id']; ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"  style="color:white"></i></a>
                                <a href="edits3.php?id=<?= $personel['id']; ?>" class="btn btn-success btn-sm"><i class="fas fa-pen"  style="color:white"></i></a>
                                <form action="codes.php" method="POST" class="d-inline">
                                  <button type="submit" name="delete_service" value="<?=$personel['id'];?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-can"  style="color:white"></i></button>
                                </form>
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
  
  <div class="container mt-5">
 
    <?php include('message.php') ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Compte client
              <!-- <a href="create.php" class="btn btn-primary float-end">Ajouter</a> -->
            </h4>
          </div>
          <div class="form-group me-3">
            <input type="text" id="myInputs" placeholder="Search...." class="form-control float-end" style="max-width:200px">
          </div>
          <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th>ID</th>
                    <th>Position</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Mot de passe</th>
                    <th>Sexe</th>
                    <th>Date de naissance</th>
                    <th>Telephone</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="myTables">
                  <?php
                  $count = 1;
                      $query = "SELECT * FROM client";
                      $query_run = mysqli_query($con, $query);

                      if(mysqli_num_rows($query_run) > 0)
                      {
                          foreach ($query_run as $personel) {

                            ?>

                            <tr>
                              <td><?= $count++; ?></td>
                              <td><?= $personel['name']; ?></td>
                              <td><?= $personel['email']; ?></td>
                              <td><?= $personel['password']; ?></td>
                              <td><?= $personel['gender']; ?></td>
                              <td><?= $personel['age']; ?></td>
                              <td><?= $personel['phone']; ?></td>
                              <td><?= $personel['location']; ?></td>
                              <td>
                                <a href="view.php?id=<?= $personel['id']; ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"  style="color:white"></i></a>
                                <a href="edit.php?id=<?= $personel['id']; ?>" class="btn btn-success btn-sm"><i class="fas fa-pen"  style="color:white"></i></a>
                                <form action="codes.php" method="POST" class="d-inline">
                                  <button type="submit" name="delete_personels" value="<?=$personel['id'];?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-can"  style="color:white"></i></button>
                                </form>
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
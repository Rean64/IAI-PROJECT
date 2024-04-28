<?php
session_start();
require 'db.php';
?>

<?php include('includes/header.php'); ?>
  

  <div class="container mt-5" style="max-width:800px">

  <?php include('message.php') ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header mb-3">
            <h4>Modifier
              <a href="index.php" class="btn btn-danger float-end">Retour</a>
            </h4>
          </div>
          <div class="card_body">

          <?php
            if(isset($_GET['id']))
            {
              $personel_id = mysqli_real_escape_string($con, $_GET['id']);
              $query = "SELECT * FROM director WHERE id='$personel_id'";
              $query_run = mysqli_query($con, $query);

              if(mysqli_num_rows($query_run) > 0){

                $personel = mysqli_fetch_array($query_run);
                ?>
                <form action="code.php" method="POST">
                    <input type="hidden" name="personel_id" value="<?= $personel['id'];?>">
                
                <div class="row">
                  <div class="col-12 d-flex">
                    <div class="col-5 ms-2">
                      <div class="mb-3">
                        <label>Nom</label>
                        <input type="text" name="name" class="form-control" value="<?= $personel['name'];?>">
                      </div>
                    </div>
                    <div class="col-6 ms-5">
                      <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?= $personel['email'];?>">
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-12 d-flex">
                    <div class="col-5 ms-2">
                      <div class="mb-3">
                        <label>Mot de passe</label>
                        <input type="text" name="password" class="form-control" value="<?= $personel['password'];?>">
                      </div>
                    </div>
                    <div class="col-6 ms-5">
                      <div class="mb-3">
                        <label>Sexe</label>
                        <input type="text" name="gender" class="form-control" value="<?= $personel['gender'];?>">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12 d-flex">
                    <div class="col-5 ms-2">
                      <div class="mb-3">
                      <label>Date de naissance</label>
                        <input type="text" name="age" class="form-control" value="<?= $personel['age'];?>">
                      </div>
                    </div>
                    <div class="col-6 ms-5">
                      <div class="mb-3">
                        <label>Telephone</label>
                        <input type="text" name="phone" class="form-control" value="<?= $personel['phone'];?>">
                      </div>
                    </div>
                  </div>
                </div>
               
                <div class="row">
                  <div class="col-12 d-flex">
                    <div class="col-5 ms-2">
                      <div class="mb-3">
                        <label>Localisation</label>
                        <input type="text" name="location" class="form-control" value="<?= $personel['location'];?>">
                      </div>
                    </div>
                  </div>
                </div>
                
                
                    <div class="mb-3">
                      <button type="submit" name="update_personels" class="btn btn-primary ms-2">Modifier</button>
                    </div>
                </form>
                <?php
              } else {
                echo "<h4>No Such Id Found!</h4>";
              }
            }
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('includes/footer.php'); ?>
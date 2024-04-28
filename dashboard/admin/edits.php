<?php
session_start();
require 'db.php';
?>

<?php include('includes/header.php'); ?>
  

  <div class="container mt-5" style="width:800px">

  <?php include('message.php') ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header mb-3">
            <h4>Modifier compte
              <a href="index.php" class="btn btn-danger float-end">Retour</a>
            </h4>
          </div>
          <div class="card_body">

          <?php
            if(isset($_GET['id']))
            {
              $personel_id = mysqli_real_escape_string($con, $_GET['id']);
              $query = "SELECT * FROM admin WHERE id='$personel_id'";
              $query_run = mysqli_query($con, $query);

              if(mysqli_num_rows($query_run) > 0){

                $personel = mysqli_fetch_array($query_run);
                ?>
                <form action="codes.php" method="POST">
                    <input type="hidden" name="personel_id" value="<?= $personel['id'];?>">

                    <div class="row">
                      <div class="col-12 d-flex">
                        <div class="col-5 ms-2">
                          <div class="mb-3">
                            <label>Position</label>
                            <input type="text" name="position" value="<?=$personel['position'];?>" class="form-control">
                          </div>
                        </div>
                        <div class="col-6 ms-5">
                          <div class="mb-3">
                            <label>Nom</label>
                            <input type="text" name="name" value="<?=$personel['name'];?>" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-12 d-flex">
                        <div class="col-5 ms-2">
                          <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" value="<?=$personel['email'];?>" class="form-control">
                          </div>
                        </div>
                        <div class="col-6 ms-5">
                          <div class="mb-3">
                            <label>Mot de passe</label>
                            <input type="text" name="password" value="<?=$personel['password'];?>" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                   
                   <div class="row">
                    <div class="col-12 d-flex">
                      <div class="col-5 ms-2">
                          <div class="mb-3">
                            <label>Sexe</label>
                            <input type="text" name="gender" value="<?=$personel['gender'];?>" class="form-control">
                          </div>
                      </div>
                      <div class="col-6 ms-5">
                        <div class="mb-3">
                          <label>Date de naissance</label>
                          <input type="text" name="age" value="<?=$personel['age'];?>" class="form-control">
                        </div>
                      </div>
                    </div>
                   </div>
                   
                   <div class="row">
                    <div class="col-12 d-flex">
                      <div class="col-5 ms-2">
                        <div class="mb-3">
                          <label>Telephone</label>
                          <input type="text" name="phone" value="<?=$personel['phone'];?>" class="form-control">
                        </div>
                        <button type="submit" name="update_personel" class="btn btn-primary mb-3">Modifier</button>
                      </div>
                      <div class="col-6 ms-5">
                        <div class="mb-3">
                          <label>Localisation</label>
                          <input type="text" name="location" value="<?=$personel['location'];?>" class="form-control">
                        </div>
                        <div class="mb-3">
                      </div>
                    </div>
                   </div>
                    
                  
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
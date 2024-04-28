<?php
require 'db.php';
?>

<?php include('includes/header.php'); ?>
  

  <div class="container mt-5" style="width:800px">


    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header mb-3">
            <h4>Compte service
              <a href="index.php" class="btn btn-danger float-end">Retour</a>
            </h4>
          </div>
          <div class="card_body">

          <?php
            if(isset($_GET['id']))
            {
              $personel_id = mysqli_real_escape_string($con, $_GET['id']);
              $query = "SELECT * FROM services WHERE id='$personel_id'";
              $query_run = mysqli_query($con, $query);

              if(mysqli_num_rows($query_run) > 0){

                $personel = mysqli_fetch_array($query_run);
                ?>

                    <div class="row">
                      <div class="col-12 d-flex">
                        <div class="col-5 ms-2">
                          <div class="mb-3">
                            <label>Position</label>
                            <p class="form-control">
                              <?=$personel['position'];?>
                            </p>
                          </div>
                        </div>
                        <div class="col-6 ms-5">
                          <div class="mb-3">
                            <label>Nom</label>
                            <p class="form-control">
                              <?=$personel['name'];?>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                   
                   <div class="row">
                    <div class="col-12 d-flex">
                      <div class="col-5 ms-2">
                        <div class="mb-3">
                          <label>Email</label>
                          <p class="form-control">
                            <?=$personel['email'];?>
                          </p>
                        </div>
                      </div>
                      <div class="col-6 ms-5">
                        <div class="mb-3">
                          <label>Mot de passe</label>
                          <p class="form-control">
                            <?=$personel['password'];?>
                          </p>
                        </div>
                      </div>
                    </div>
                   </div>
                   
                   <div class="row">
                    <col-12 class="d-flex">
                      <div class="col-5 ms-2">
                        <div class="mb-3">
                          <label>Sexe</label>
                          <p class="form-control">
                            <?=$personel['gender'];?>
                          </p>
                        </div>
                      </div>
                      <div class="col-6 ms-5">
                        <div class="mb-3">
                          <label>Date de naissance</label>
                          <p class="form-control">
                            <?=$personel['age'];?>
                          </p>
                        </div>
                      </div>
                    </col-12>
                   </div>
                   
                   <div class="row">
                    <div class="col-12 d-flex">
                      <div class="col-5 ms-2">
                        <div class="mb-3">
                          <label>Telephone</label>
                          <p class="form-control">
                            <?=$personel['phone'];?>
                          </p>
                        </div>
                      </div>
                      <div class="col-6 ms-5">
                        <div class="mb-3">
                          <label>Localisation</label>
                          <p class="form-control">
                            <?=$personel['location'];?>
                          </p>
                        </div>
                      </div>
                    </div>
                   </div>
                    
                    
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

<script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>
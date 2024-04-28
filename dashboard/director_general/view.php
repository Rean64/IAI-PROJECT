<?php
require 'db.php';
?>

<?php include('includes/header.php'); ?>
  

  <div class="container mt-5" style="max-width: 800px">


    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header mb-3">
            <h4>Compte personnel
              <a href="home.php" class="btn btn-danger float-end">Retour</a>
            </h4>
          </div>
          <div class="card_body">

          <?php
            if(isset($_GET['id']))
            {
              $personel_id = mysqli_real_escape_string($con, $_GET['id']);
              $query = "SELECT * FROM contract WHERE id='$personel_id'";
              $query_run = mysqli_query($con, $query);

              if(mysqli_num_rows($query_run) > 0){

                $personel = mysqli_fetch_array($query_run);
                ?>
                    <div class="row">
                      <div class="col-12 d-flex">
                        <div class="col-5 ms-2">
                          <div class="mb-3">
                            <label>Assure</label>
                            <p class="form-control">
                              <?=$personel['assure'];?>
                            </p>
                          </div>
                        </div>
                        <div class="col-6 ms-5">
                          <div class="mb-3">
                            <label>Montant</label>
                            <p class="form-control">
                              <?=$personel['montant'];?>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                   
                  <div class="row">
                    <div class="col-12 d-flex">
                      <div class="col-5 ms-2">
                        <div class="mb-3">
                          <label>Taille</label>
                          <p class="form-control">
                            <?=$personel['taille'];?>
                          </p>
                        </div>
                      </div>
                      <div class="col-6 ms-5">
                        <div class="mb-3">
                          <label>Poid</label>
                          <p class="form-control">
                            <?=$personel['poid'];?>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                   
                    <div class="row">
                      <div class="col-12 d-flex">
                        <div class="col-5 ms-2">
                          <div class="mb-3">
                            <label>Nom du produit</label>
                            <p class="form-control">
                              <?=$personel['product_name'];?>
                            </p>
                          </div>
                        </div>
                        <div class="col-6 ms-5">
                          <div class="mb-3">
                            <label>Banque</label>
                            <p class="form-control">
                              <?=$personel['banque'];?>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-12 d-flex">
                        <div class="col-5 ms-2">
                          <div class="mb-3">
                            <label>Etat sante</label>
                            <p class="form-control">
                              <?=$personel['etat'];?>
                            </p>
                          </div> 
                        </div>
                        <div class="col-6 ms-5">
                          <div class="mb-3">
                            <label>Prime</label>
                            <p class="form-control">
                              <?=$personel['prime'];?>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                   
                   
                    <div class="row">
                      <div class="col-12 d-flex">
                        <div class="col-5 ms-2">
                          <div class="mb-3">
                            <label>Beneficaire</label>
                            <p class="form-control">
                              <?=$personel['beneficaire'];?>
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
                      </div>
                    </div>
                  
                  <div class="row">
                    <div class="col-12 d-flex">
                      <div class="col-5 ms-2">
                        <div class="mb-3">
                          <label>Date</label>
                          <p class="form-control">
                            <?=$personel['date'];?>
                          </p>
                        </div>
                      </div>
                      <div class="col-6 ms-5">
                        <div class="mb-3">
                        <label>Duree</label>
                        <p class="form-control">
                          <?=$personel['duree'];?>
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
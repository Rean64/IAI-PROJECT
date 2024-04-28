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
                <form action="code.php" method="POST">
                    <input type="hidden" name="personel_id" value="<?= $personel['id'];?>">
                
                <div class="row">
                  <div class="col-12 d-flex">
                    <div class="col-5 ms-2">
                      <div class="mb-3">
                        <label>Assure</label>
                        <input type="text" name="assure" class="form-control" value="<?= $personel['assure'];?>">
                      </div>
                    </div>
                    <div class="col-6 ms-5">
                      <div class="mb-3">
                        <label>Montant</label>
                        <input type="text" name="montant" class="form-control" value="<?= $personel['montant'];?>">
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-12 d-flex">
                    <div class="col-5 ms-2">
                      <div class="mb-3">
                        <label>Taille</label>
                        <input type="text" name="taille" class="form-control" value="<?= $personel['taille'];?>">
                      </div>
                    </div>
                    <div class="col-6 ms-5">
                      <div class="mb-3">
                        <label>Poids</label>
                        <input type="text" name="poid" class="form-control" value="<?= $personel['poid'];?>">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12 d-flex">
                    <div class="col-5 ms-2">
                      <div class="mb-3">
                      <label>Nom produit</label>
                        <input type="text" name="product_name" class="form-control" value="<?= $personel['product_name'];?>">
                      </div>
                    </div>
                    <div class="col-6 ms-5">
                      <div class="mb-3">
                        <label>Banque</label>
                        <input type="text" name="banque" class="form-control" value="<?= $personel['banque'];?>">
                      </div>
                    </div>
                  </div>
                </div>
               
                <div class="row">
                  <div class="col-12 d-flex">
                    <div class="col-5 ms-2">
                      <div class="mb-3">
                        <label>Etat sante</label>
                        <input type="text" name="etat" class="form-control" value="<?= $personel['etat'];?>">
                      </div>
                    </div>
                    <div class="col-6 ms-5">
                      <div class="mb-3">
                        <label>Prime</label>
                        <input type="text" name="prime" class="form-control" value="<?= $personel['prime'];?>">
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-12 d-flex">
                    <div class="col-5 ms-2">
                      <div class="mb-3">
                        <label>Beneficaire</label>
                        <input type="text" name="beneficaire" class="form-control" value="<?= $personel['beneficaire'];?>">
                      </div>
                    </div>
                    <div class="col-6 ms-5"> 
                      <div class="mb-3">
                        <label>Date de naissance</label>
                        <input type="text" name="age" class="form-control" value="<?= $personel['age'];?>">
                      </div>
                    </div>
                  </div>
                </div>
               
                <div class="row">
                  <div class="col-12 d-flex">
                    <div class="col-5 ms-2">
                      <div class="mb-3">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" value="<?= $personel['date'];?>">
                      </div>
                    </div>
                    <div class="col-6 ms-5">
                      <div class="mb-3">
                        <label>Duree</label>
                        <input type="text" name="duree" class="form-control" value="<?= $personel['duree'];?>">
                      </div>
                    </div>
                  </div>
                </div>
                
                
                    <div class="mb-3">
                      <button type="submit" name="update_personel" class="btn btn-primary ms-2">Modifier</button>
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
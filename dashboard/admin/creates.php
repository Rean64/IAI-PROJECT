<?php
session_start();
?>

<?php include('includes/header.php'); ?>
  

  <div class="container mt-5" style="width:800px">

  <?php include('message.php') ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header mb-3">
            <h4>Ajouter
              <a href="index.php" class="btn btn-danger float-end">Retour</a>
            </h4>
          </div>
          <div class="card_body">
            <form action="codes.php" method="POST">
                <div class="row">
                  <div class="col-12 d-flex">
                    <div class="col-5 ms-2 ms-2">
                      <div class="mb-3">
                        <label>Position</label>
                        <input type="text" name="position" class="form-control" placeholder="Position">
                      </div>
                    </div>
                    <div class="col-6 ms-5">
                      <div class="mb-3">
                        <label>Nom</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name">
                      </div>
                    </div>
                  </div>
                </div>
                
               <div class="row">
                <div class="col-12 d-flex">
                  <div class="col-5 ms-2">
                    <div class="mb-3">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" placeholder="Enter email">
                    </div> 
                  </div>
                  <div class="col-6 ms-5">
                    <div class="mb-3">
                      <label>Mot de passe</label>
                      <input type="text" name="password" class="form-control" placeholder="Enter password">
                    </div>
                  </div>
                </div>
               </div>
                
              <div class="row">
                <div class="col-12 d-flex">
                  <div class="col-5 ms-2">
                    <div class="mb-3">
                      <label>Sexe</label>
                      <input type="text" name="gender" class="form-control" placeholder="Enter gender">
                    </div>
                  </div>
                  <div class="col-6 ms-5">
                    <div class="mb-3">
                      <label>Age</label>
                      <input type="text" name="age" class="form-control" placeholder="Enter  age">
                    </div>
                  </div>
                </div>
              </div>
                
               <div class="row">
                <div class="col-12 d-flex">
                  <div class="col-5 ms-2">
                    <div class="mb-3">
                      <label>Telephone</label>
                      <input type="tell" name="phone" class="form-control" placeholder="Enter phone number">
                    </div>
                  </div>
                  <div class="col-6 ms-5">
                    <div class="mb-3">
                      <label>Localisation</label>
                      <input type="text" name="location" class="form-control" placeholder="Enter location">
                    </div>
                  </div>
                </div>
               </div>
                
                <div class="mb-3 ms-2">
                  <button type="submit" name="save_personel" class="btn btn-primary">Ajouter</button>
                </div>
            </form>
          </div> 
        </div>
      </div>
    </div>
  </div>



  <?php include('includes/footer.php'); ?>
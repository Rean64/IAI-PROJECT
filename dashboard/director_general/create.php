<?php
session_start();
?>

<?php include('includes/header.php'); ?>
  

  <div class="container mt-5" style="max-width:800px">

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
            <form action="code.php" method="POST">
              <div class="row">
                <div class="col-12 d-flex">
                  <div class="col-5 ms-2">
                    <div class="mb-3">
                      <label>Assure</label>
                      <input type="text" name="assure" class="form-control" placeholder="Assure">
                    </div>
                  </div>
                  <div class="col-6 ms-5">
                    <div class="mb-3">
                      <label>Montant</label>
                      <input type="text" name="montant" class="form-control" placeholder="Enter montant">
                    </div>
                  </div>
                </div>
              </div>
                
              <div class="row">
                <div class="col-12 d-flex">
                  <div class="col-5 ms-2">
                    <div class="mb-3">
                      <label>Taille</label>
                      <input type="text" name="taille" class="form-control" placeholder="Enter taille">
                    </div>
                  </div>
                  <div class="col-6 ms-5">
                    <div class="mb-3">
                      <label>Poids</label>
                      <input type="text" name="poid" class="form-control" placeholder="Enter poid">
                    </div> 
                  </div>
                </div>
              </div>
               
              <div class="row">
                <div class="col-12 d-flex">
                  <div class="col-5 ms-2">
                    <div class="mb-3">
                    <label>Nom produit:</label>
                    <select name="product_name" id="product" style="height:40px;display:block;width:100%">
                        <option disabled selected>Select product</option>
                        <option value="Mixte anticipe">Mixte anticipe</option>
                        <option value="Mixte revalorisable">Mixte revalorisable</option>
                        <option value="Education scolaire">Education scolaire</option>
                        <option value="Mixte retraite individuelle">Mixte retraite individuelle</option>
                        <option value="Triple paiement">Triple paiement</option>
                        <option value="Bancassurance">Bancassurance</option>
                    </select>
                    </div>
                  </div>
                  <div class="col-6 ms-5">
                    <div class="mb-3">
                      <label>Banque</label>
                      <input type="text" name="banque" class="form-control" placeholder="Enter banque">
                    </div>
                  </div>
                </div>
              </div>
              
                <div class="row">
                  <div class="col-12 d-flex">
                    <div class="col-5 ms-2">
                      <div class="mb-3">
                        <label>Etat sante</label>
                        <input type="text" name="etat" class="form-control" placeholder="Enter etat">
                      </div>
                    </div>
                    <div class="col-6 ms-5">
                      <div class="mb-3">
                      <label>Prime</label>
                      <select name="prime" id="prime" style="height:40px;display:block;width:100%">
                          <option disabled selected>Select Prime</option>
                          <option value="hebdomadaire">Hebdomadaire</option>
                          <option value="mensuelle">Mensuelle</option>
                          <option value="annuelle">Annuelle</option>
                      </select>
                      </div>
                    </div>
                  </div>
                </div>
              
                <div class="row">
                  <div class="col-12 d-flex">
                    <div class="col-5 ms-2">
                      <div class="mb-3">
                        <label>Beneficaire</label>
                        <input type="text" name="beneficaire" class="form-control" placeholder="Enter beneficaire">
                      </div>
                    </div>
                    <div class="col-6 ms-5">
                      <div class="mb-3">
                        <label>Date de naissance</label>
                        <input type="text" name="age" class="form-control" placeholder="Enter age">
                      </div>
                    </div>
                  </div>
                </div>
                
               
               <div class="row">
                <div class="col-12 d-flex">
                  <div class="col-5 ms-2">
                    <div class="mb-3">
                      <label>Date</label>
                      <input type="date" name="date" class="form-control" placeholder="Enter date">
                    </div>
                  </div>
                  <div class="col-6 ms-5">
                    <div class="mb-3">
                      <label>Duree</label>
                      <input type="text" name="duree" class="form-control" placeholder="Enter duree">
                    </div>
                  </div>
                </div>
               </div>
              
                
                
                <div class="mb-3">
                  <button type="submit" name="save_student" class="btn btn-primary ms-2">Ajouter</button>
                </div>
            </form>
          </div> 
        </div>
      </div>
    </div>
  </div>

  <?php include('includes/footer.php'); ?>
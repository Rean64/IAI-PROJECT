<?php
  session_start();
  require 'db.php';  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="../icons/css/all.min.css">
  <link rel="stylesheet" href="notify.css?<?php echo time(); ?>">
  <script src="./js/jquery.js"></script>
  <title>Director General</title>
  <style>
    body{
      font-family: Roboto;
      font-size: 15px;
      background-image: linear-gradient(rgba(6, 3, 131, 0.767),rgba(0, 0, 0, 0.644)),url(./image/preview.jpg);
      background-size: cover !important;
      background-position: center !important;
      background-repeat: no-repeat;
      background-attachment: fixed;
      height: 100vh;
      padding-bottom: 130px !important;
      padding-top: 130px !important;
    }


  .nav-link{
    color: white !important;
  }
  .bg{
    background-color:#1e1e53;
  }
  
.popup{
    position: fixed;
    top: 8%;
    left: 35%;
    z-index: 99999;
    transform: translate(0%, 0%) scale(1);
    width: 400px;
    height: 200px;
    background-color: #4070f4;
    border-radius: 6px;
    text-align: center;
    opacity: 0;
    padding: 0 30px 30px;
    color: #fff;
    transition: transform 0.4s, opacity 0.4s;
  }
  
  
  .popup .i {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100px;
    height: 100px;
    padding: 20px;
    background-color:#4070f4;
    font-size: 24px;
    margin-top: -50px;
    margin-left: 120px;
    /* margin-bottom: 30px; */
    border-radius: 50%;
  }
  
  
  .show {
    transform: scale(1);
    opacity: 1;
    visibility: visible;
  }
  
  .close-btn{
    padding: 5px 30px;
    border: none;
    color: white;
    border-radius: 5px;
    margin-left: 0px !important;
    background-color: #051b58 !important;
  }

  </style>
  <script>
    $(document).ready(function(){
      $("#myInput").on("keyup",function(){
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function(){
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
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
            <a href="index.php" class="nav-link active">Compte</a>
          </li>
          <li class="nav-item">
            <a href="https://chat.whatsapp.com/H2mSCu6Uawg125vnwuAVKH" class="nav-link"> <img src="image/logo.png" alt="" style="width:30px;margin-top:-5px"></a>
          </li>
        </ul>
      </div>
      
  </nav>
  <!-- header end  -->

  <?php include 'message.php' ?>
  
  <div class="container-fluid mt-5">
 

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Liste des demande de souscription
              <a href="../index.php" class="btn btn-danger float-end">Deconnecter</a>
              <!-- <a href="create.php" class="btn btn-primary float-end me-2">Ajouter</a> -->
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
                    <th>Assure</th>
                    <th>Montant</th>
                    <th>Taille</th>
                    <th>Poids</th>
                    <th>Produit</th>
                    <th>Banque</th>
                    <th>Etat sante</th>
                    <th>Prime</th>
                    <th>Beneficaire</th>
                    <th>Date de naissance</th>
                    <th>Date</th>
                    <th>Duree</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="myTable">
                  <?php
                    $count = 1;
                      $query = "SELECT * FROM contract";
                      $query_run = mysqli_query($con, $query);

                      if(mysqli_num_rows($query_run) > 0)
                      {
                          foreach ($query_run as $personel) {

                            ?>

                            <tr>
                              <td><?= $count++; ?></td>
                              <td><?= $personel['assure']; ?></td>
                              <td><?= $personel['montant']; ?></td>
                              <td><?= $personel['taille']; ?></td>
                              <td><?= $personel['poid']; ?></td>
                              <td><?= $personel['product_name']; ?></td>
                              <td><?= $personel['banque']; ?></td>
                              <td><?= $personel['etat']; ?></td>
                              <td><?= $personel['prime']; ?></td>
                              <td><?= $personel['beneficaire']; ?></td>
                              <td><?= $personel['age']; ?></td>
                              <td><?= $personel['date']; ?></td>
                              <td><?= $personel['duree']; ?></td>
                              <td>
                                <a href="view.php?id=<?= $personel['id']; ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"  style="color:white"></i></a>
                                <a href="edit.php?id=<?= $personel['id']; ?>" class="btn btn-success btn-sm"><i class="fas fa-pen"  style="color:white"></i></a>
                                <a href="pdf.php?id=<?= $personel['id']; ?>" class="btn btn-success btn-sm"><i class="fas fa-print"  style="color:white"></i></a>
                                <form action="code.php" method="POST" class="d-inline">
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


  <script>
  let popup = document.querySelector(".popup");
  let closePopup = document.querySelector(".popup-close");

if (popup) {
  window.addEventListener("load", () => {
    setTimeout(() => {
        popup.classList.add("show");
    }, 10000);
  });

  closePopup.addEventListener("click", () => {
    popup.classList.remove("show");
  });

}
</script>


<script src="script.js"></script>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>
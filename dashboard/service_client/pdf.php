<?php session_start(); ?>
<?php
require 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>PDF_Copy</title>
  <script type="text/javascript" src="unpkg/jspdf.min.js"></script>
  <script type="text/javascript" src="unpkg/html2canvas.js"></script>
  <style>
    body{
      height: 100vh;
      padding-left:200px;
    }
    #line{
      margin-top: 19px;
      margin-left: 120px;
      width: 500px;
      border-bottom: 1px solid black;
      border-top: 1px solid black;
    }
    #lines{
      margin-top: 19px;
      margin-left: 120px;
      width: 500px;
      border-style: dotted;
      border-bottom-style: 1px solid black;
      border-top-style: none;
      border-left-style: none;
      border-right-style: none;
    }
    .container{
      max-width: 1000px;
    }

    input{
      border: none;
    }
    #result{
     margin: 0 auto;
      background-color: white;
      font-family: roboto;
      max-width:1000px;
    }
  </style>
</head>
<bod>

  <div id="result">
  <div class="head">
    <a href="#" class="navbar-brand">
      <img src="logo1.png" alt="" width="200" style="margin-left: -70px">
    </a>
    <h3 class="text-center" style="margin-left: -280px;">ASSURLIFECAMER</h3>
    <h3 class="text-center" id="line">CONTRAT D'ASSURANCE VIE</h3>
    <h3 class="text-center" id="lines">Conditions Participations</h3>
  </div>

  
  <?php
            if(isset($_GET['id']))
            {
              $personel_id = mysqli_real_escape_string($con, $_GET['id']);
              $query = "SELECT * FROM contract WHERE id='$personel_id'";
              $query_run = mysqli_query($con, $query);

              if(mysqli_num_rows($query_run) > 0){

                $personel = mysqli_fetch_array($query_run);
                ?>
  <div class="container mt-5">
    <div class="row justify-content-between align-items-center py-2 g-5">
      <div class="col-md col-md-6">
        Nom Produit: <input type="text" value="<?=$personel['product_name'];?>" >
      </div>
      <div class="col-md col-md-6">
        Rep: PAUL ASSAMBA
      </div>
    </div>
    <div class="row justify-content-between align-items-center py-2 g-5">
      <div class="col-md col-md-6">
        ASSURE: <input type="text" value="<?=$personel['assure'];?>">
      </div>
      <div class="col-md col-md-6">
        DATE DE NAISSANCE: <input type="text" value="<?=$personel['date'];?>" >
      </div>
    </div>
    <div class="row justify-content-between align-items-center py-2 g-5">
      <div class="col-md col-md-6">
        BENEFICAIRE: <input type="text" value="<?=$personel['beneficaire'];?>" >
      </div>
      <div class="col-md col-md-6">
        MONNAIE DE: CAMEROUN
      </div>
    </div>
    <div class="row justify-content-between align-items-center py-2 g-5">
      <div class="col-md col-md-6">
        PRIME PAYABLE: <input type="text" value="<?=$personel['prime'];?>" >
      </div>
      <div class="col-md col-md-6">
        DUREE: <input type="text" value="<?=$personel['duree'];?>" >
      </div>
    </div>
    <div class="row justify-content-between align-items-center py-2 g-5">
      <div class="col-md col-md-6">
        MONTANT NOMIMALE FCFA: <input type="text" value="<?=$personel['montant']." FCFA";?>" >
      </div>
      <div class="col-md col-md-6">
        DATE DU JOUR: <input type="text" value="<?=$personel['date'];?>" >
      </div>
    </div>
    <div class="row justify-content-between align-items-center py-2 g-5">
      <div class="col-md col-md-6">
       FAIT A DOUALA
      </div>
      <div class="col-md col-md-6">
        TOTAL: <input type="text" value="<?=$personel['montant']." FCFA";?>"
      </div>
    </div>
  </div>
   <div class="container py-2 px-5">
    <div class="row">
      <div class="col-md col-md-12">
        <input type="text" value="<?=$personel['assure']." ,";?>" style="width: 100px;"> Je Reconnous avoir pris connocument
        des conditions et avautaguen lees a ce contract.
      </div>
    </div>
  </div>

  <?php
              } else {
                echo "<h4>No Such Id Found!</h4>";
              }
            }
  ?>
  <div class="d-flex justify-content-between align-content-center px-5 mt-3" style="width: 800px;">
    <p>Signature Client</p>
    <p>Signature DG</p>
  </div>
</div>

  <script type="text/javascript">
    function gendf() {
        var doc = new jsPDF();

        doc.addHTML(document.getElementById('result')[0], function () {
            doc.save('contract form');
            alert("Downloaded!");

        });
    }

</script>
<div align="center" style="margin-top: 10px;margin-left:-250px">
    <button id="saveaspdf" class="btn btn-info btn-lg" onclick="gendf()">SAVE AS PDF</button>
</div>
  <script src="./node_modules/js/bootstrap.min.js"></script>
</body>
</html>
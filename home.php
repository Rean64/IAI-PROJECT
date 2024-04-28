<?php
  session_start();
  require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <!-- Glide js -->
    <link rel="stylesheet" href="node_modules/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css.css?<?php echo time();?>" />
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
    <title>Shopnow</title>
    <style>
      img{
        object-fit:cover;
      }
    </style>
  </head>
  <body>
  <!-- header -->
  <nav class="navbar navbar-light navbar-expand-lg  text-light fixed-top">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="images/logo1.jpeg" alt="" style="width:80px;border-radius:40px">
      </a>

      <div class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <div class="navbar-toggler-icon"></div>
      </div>

      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="#" class="nav-link  active">Accueil</a>
          </li>
          <li class="nav-item">
            <a href="contract_form.php" class="nav-link">Compte</a>
          </li>
          <li class="nav-item">
            <a href="https://chat.whatsapp.com/H2mSCu6Uawg125vnwuAVKH" class="nav-link"> <img src="images/logo.png" alt="" style="width:30px;margin-top:-5px"></a>
          </li>
        </ul>
      </div>
      
  </nav>
  <!-- header end  -->

  <!-- product -->
  <?php include('message.php') ?>
  <section>
    <div class="container">
    <div class="row g-3">
              <div class="col-lg-4 col-sm-6">
              
                  <div class="project">
                      <img src="images/p-1.jpg" alt="" class="img-fluid">
                      <div class="overlay d-block">
                          <div class="mb-5">
                              <h4 class="text-white">EDUCATION SCOLAIRE</h4>
                              <h6 class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h6>
                          </div>
                          <div>
                           <a href="view/productDetails.php"><button class="btn btn-info py-1 px-4">Voir plus</button></a>
                          <a href="contract_form.php"><button class="btn btn-primary py-1 px-4">Souscrire</button></a>
                          </div>
                      </div>
                  </div>
                  
              </div>
              <div class="col-lg-4 col-sm-6">
                  <div class="project">
                      <img src="images/p-2.jpg" alt="">
                      <div class="overlay d-block">
                        <div class="mb-5">
                            <h4 class="text-white">MIXTE Retraite Individuelle (MIRI)</h4>
                            <h6 class="text-white">Lorem ipsum dolor sit amet.</h6>
                        </div>
                        <div>
                         <a href="view/productDetails 2.php"><button class="btn btn-info py-1 px-4">Voir plus</button></a>
                         <a href="contract_form.php"><button class="btn btn-primary py-1 px-4">Souscrire</button></a>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                  <div class="project">
                      <img src="images/p-3.jpg" alt="">
                      <div class="overlay d-block">
                        <div class="mb-5">
                            <h4 class="text-white">MIXTE ANTICIPEE</h4>
                            <h6 class="text-white">Lorem ipsum dolor sit amet.</h6>
                        </div>
                        <div>
                         <a href="view/productDetails 3.php"><button class="btn btn-info py-1 px-4">Voir plus</button></a>
                        <a href="contract_form.php"><button class="btn btn-primary py-1 px-4">Souscrire</button></a>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                  <div class="project">
                      <img src="images/product-4.jpg" alt="">
                      <div class="overlay d-block">
                        <div class="mb-5">
                            <h4 class="text-white">Nom Du Product</h4>
                            <h6 class="text-white">Lorem ipsum dolor sit amet.</h6>
                        </div>
                        <div>
                         <a href="view/productDetails 4.php"><button class="btn btn-info py-1 px-4">Voir plus</button></a>
                        <a href="contract_form.php"><button class="btn btn-primary py-1 px-4">Souscrire</button></a>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                  <div class="project">
                      <img src="images/product-5.jpg" alt="">
                      <div class="overlay d-block">
                        <div class="mb-5">
                            <h4 class="text-white">Nom Du Product</h4>
                            <h6 class="text-white">Lorem ipsum dolor sit amet.</h6>
                        </div>
                        <div>
                         <a href="view/productDetails 5.php"><button class="btn btn-info py-1 px-4">Voir plus</button></a>
                        <a href="contract_form.php"><button class="btn btn-primary py-1 px-4">Souscrire</button></a>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                  <div class="project">
                      <img src="images/product-6.jpg" alt="">
                      <div class="overlay d-block">
                        <div class="mb-5">
                            <h4 class="text-white">Nom Du Product</h4>
                            <h6 class="text-white">Lorem ipsum dolor sit amet.</h6>
                        </div>
                        <div>
                         <a href="view/productDetails 6.php"><button class="btn btn-info py-1 px-4">Voir plus</button></a>
                        <a href="contract_form.php"><button class="btn btn-primary py-1 px-4">Souscrire</button></a>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
    </div>
  </section>
  <?php include('message1.php') ?>

<script> 
  let popup = document.querySelector(".popup");
  let closePopup = document.querySelector(".popup-close");

if (popup) {
  window.addEventListener("load", () => {
    setTimeout(() => {
         popup.classList.add("show");
    }, 3000);
  });

  closePopup.addEventListener("click", () => {
    popup.classList.remove("show");
  });

}
</script>

  </body>
  <script src="./node_modules/js/bootstrap.min.js"></script>
</html>

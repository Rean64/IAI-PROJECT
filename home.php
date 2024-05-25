<?php
  session_start();
  require 'db.php';


// Language : fr $ en
if (!isset($_SESSION['language'])) {
  $_SESSION['language'] = "fr";
}

if ($_GET) {
  // var_dump($_GET);
  // die();
  switch ($_GET['lang']) {
    case 'fr':
      $_SESSION['language'] = 'fr';
      break;
    case 'en':
      $_SESSION['language'] = 'en';
      break;
    default:
      $_SESSION['language'] = 'en';
  }
}
// Define the phone number in international format (without spaces or special characters)
$phoneNumber = '670844193'; // Example number

// URL Encode the message you want to send
$message = urlencode("Hello, I'm interested in your services.");

// Create the WhatsApp link
$whatsAppLink = "https://wa.me/{$phoneNumber}?text={$message}";

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
    <link rel="stylesheet" href="style.css?<?php echo time();?>" />
    <link rel="stylesheet" href="notify.css"/>
    <link rel="stylesheet" href="icons/css/all.min.css">

  
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
                <?php 
                  if(isset($_SESSION['payment'])){ 
                  echo "<a href='#' class='nav-link' style='color:white;'>Payment</a>";
                  }
                  else{
                    echo " ";
                  }
              ?>

                <!-- <a href="#" class="nav-link" style="color:white;display: <?php echo htmlspecialchars($_SESSION['payment'] ? 'inline-block' : 'none');?>">Payment</a> -->
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link i">Compte</a>
          </li>
          <li class="nav-item">
            <a href="https://chat.whatsapp.com/H2mSCu6Uawg125vnwuAVKH" class="nav-link"> <img src="images/logo.png" alt="" style="width:30px;margin-top:-5px"></a>
          </li>
          <li class="dropdown">
                        <a><span><?php echo htmlspecialchars($_SESSION['language'] == 'en' ? 'Language' : 'Langage'); ?>
                                <b style="color:#297559"><?php echo $_SESSION['language'] ?></b></span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <form action="" method="get">
                                <li>
                                    <label htmlfor="en">
                                        <a href="home.php?lang=en"
                                            style="color:<?php echo $_SESSION['language'] == 'en' ?  'red' :  ''  ?>"><?php echo htmlspecialchars($_SESSION['language'] == 'en' ? 'English' : 'Anglais'); ?></a>
                                    </label>
                                </li>
                                <!-- <input type="submit" name="en" id="en" value="en" hidden /> -->

                                <li>
                                    <label htmlfor="fr">
                                        <a href="home.php?lang=fr"
                                            style="color:<?php echo $_SESSION['language'] == 'fr' ?  'red' :  ''  ?>"><?php echo htmlspecialchars($_SESSION['language'] == 'en' ? 'French' : 'Francais'); ?></a>
                                    </label>
                                </li>
                                <!-- <input type="submit" name="fr" id="fr" value="fr" hidden/> -->


                            </form>
                        </ul>
                    </li>
        </ul>
      </div>
      
  </nav>
  <!-- header end  -->

  <!-- product -->

  <?php include('message.php') ?>

  <section class="size">
    <div class="container">
    <div class="row g-3">
    <?php
          include_once 'functions.php';
          $activities = getAllActivity();
          // Reverse the order of activities
          $reversedActivities = $activities;

          // Initialize counter to limit displayed activities
          

          $lang = $_SESSION['language'] == 'en' ? 'en' : 'fr';
          // Loop through the reversed array of activities
          foreach ($reversedActivities as $data) {
           
            $jsonData = json_encode($data);

          ?>

<div class="col-lg-4 col-sm-6">
              
              <div class="project">
                  <img src="dashboard/assets/post_images/<?php echo htmlspecialchars($data['image']); ?>" alt="" class="img-fluid">
                  <div class="overlay d-block">
                      <div class="mb-5">
                      <?php 
                       $texte = substr($data['descEnglish'], 0, 28).'...';
                       $textf = substr($data['descFrench'], 0, 28).'...';
                       ?>
                          <h4 class="text-white"><?php echo htmlspecialchars($_SESSION['language'] == 'en' ? $data['titleEnglish'] : $data['titleFrench']); ?></h4>
                          <h6 class="text-white"><?php echo $_SESSION['language'] == 'en' ? $texte   : $textf; ?></h6>
                      </div>
                      <div class="action" onclick='openPopUp(<?php echo $jsonData; ?>, "<?php echo $lang; ?>")'>
                      <button class="btn btn-info py-1 px-4"><?php echo htmlspecialchars($_SESSION['language'] == 'en' ? 'Learn More ' : 'Voir plus'); ?>&nbsp;<i
                                    class="fas fa-angle-right"></i></button>
                      <!-- <button class="btn btn-primary py-1 px-4 i">Souscrire</button> -->Z
                      </div>
                  </div>
              </div>
              
          </div>

                    <?php
       
          }

          ?>
              
           
    </div>
    <div id="popup1" class="popup hide-popup1">
                        <div class="popup-content1">
                            <div class="popup-close1">
                                <i class='fas fa-xmark text-danger'></i>
                            </div>
                            <div class="popup-left1">
                                <div class="popup-img-container1">
                                    <img src="dashboard/assets/post_images/<?php echo htmlspecialchars($data['image']); ?>"
                                        class="img-fluid popup-img1" alt="">
                                </div>
                            </div>
                            <div class="popup-right1">
                                <div class="right-content1">
                                    <h1 id="title">
                                        <?php echo htmlspecialchars($_SESSION['language'] == 'en' ? $data['titleEnglish'] : $data['titleFrench']); ?>
                                    </h1>
                                    <p id="description">
                                        <?php echo htmlspecialchars($_SESSION['language'] == 'en' ? $data['descEnglish'] : $data['descFrench']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
    
  </section><!-- popup section -->
  <script>
    function openPopUp(data, lang) {
        // Assuming 'data' is the object passed from PHP
        const popup = document.getElementById('popup1');
        const close = document.querySelector('.popup-close1');

        // Setting image source
        const img = popup.querySelector('.popup-img1');
        img.src = `dashboard/assets/post_images/${data.image}`;
        img.alt = data.titleEnglish; // Or titleFrench, depending on the session language

        // Setting title
        const title = popup.querySelector('.popup-right1 .right-content1 h1');
        title.textContent = lang == 'en' ? data.titleEnglish : data.titleFrench; // Or titleFrench

        // Setting description
        const desc = popup.querySelector('.popup-right1 .right-content1 p');
        desc.textContent = lang == 'en' ? data.descEnglish : data.descFrench; // Or descFrench

        // Show the popup
        popup.classList.remove("hide-popup1");
        popup.classList.add("show-popup1");
        close.addEventListener('click', ()=>{
          popup.classList.add("hide-popup1");
        })
    }
</script>
 <div class="pop hide">
                <div class="close">
                   <i class="fas fa-xmark"></i>
                </div>
  <div class="xp">
        <header>Souscription</header>

        <form action="contract.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Identifiant</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Assure</label>
                            <input type="text" name="assure" placeholder="Assure" required>
                        </div>

                        <div class="input-field">
                            <label>Montant</label>
                            <input type="text" name="montant" placeholder="Enter montant" required>
                        </div>

                        <div class="input-field">
                            <label>Taille</label>
                            <input type="number" min="0" name="taille" placeholder="Enter taille" required>
                        </div>

                        <div class="input-field">
                            <label>Poids</label>
                            <input type="number" min="0" name="poid" placeholder="Enter poid" required>
                        </div>

                        <div class="input-field">
                            <label>Nom Product</label>
                            <select name="product_name" required>
                                <option disabled selected>Select product</option>
                                <option value="Mixte anticipe">Mixte anticipe</option>
                                <option value="Mixte revalorisable">Mixte revalorisable</option>
                                <option value="Education scolaire">Education scolaire</option>
                                <option value="Mixte retraite individuelle">Mixte retraite individuelle</option>
                                <option value="Triple paiement">Triple paiement</option>
                                <option value="Bancassurance">Bancassurance</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Banque affiliee</label>
                            <input type="text" name="banque" placeholder="Enter banque affiliee" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <!-- <span class="title">Identity Details</span> -->

                    <div class="fields">
                        <div class="input-field">
                            <label>Etat de sante</label>
                            <input type="text" name="etat" placeholder="Enter etat" required>
                        </div>

                        <div class="input-field">
                        <label>Prime</label>
                            <select name="prime" required>
                                <option disabled selected>Select Prime</option>
                                <option value="hebdomadaire">Hebdomadaire</option>
                                <option value="mensuelle">Mensuelle</option>
                                <option value="annuelle">Annuelle</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Beneficaire</label>
                            <input type="text" name="beneficaire" placeholder="Enter Beneficaire" required>
                        </div>

                        <div class="input-field">
                            <label>Date de naissance</label>
                            <input type="date" name="age" value="<?= date('Y-m-d'); ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Date de virement</label>
                            <input type="date" name="date" value="<?= date('Y-m-d'); ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Duree</label>
                            <input type="text" name="duree" placeholder="Enter Duree" required>
                        </div>
                    </div>

                    <button type="button" onclick="openPopup()">
                        <span>Souscrire</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                    <div class="popp" id="popup">
                        <div class="i">
                            <i class="fas fa-check"  style="color:white;font-size:40px"></i>
                        </div>
                        <h2>Succes</h2>
                        <h3>Votre demande a ete prise en compte. Merci</h3>
                        <div class="d-flex">
                          <input class="close-btn stop"  value="Fermer">
                           <input class="close-btn" type="submit" value="Ok" name="store">
                        </div>
                    </div> 
                </div> 
            </div>

        </form>
    </div>
    </div>

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
<script>
        const open = document.querySelector('.i');
        const pop = document.querySelector('.pop');
        const hide = document.querySelector('.close');

        open.addEventListener('click', () =>{
            pop.classList.remove('hide');
        })
        hide.addEventListener('click', () =>{
            pop.classList.add('hide');
        })
        

    </script>
<script type="text/javascript">
   let popp = document.getElementById("popup");
   let stop = document.querySelector('.stop');
   function openPopup(){
        popp.classList.add("open-popup");
   }
   stop.addEventListener('click', () =>{
      popp.classList.remove("open-popup");
    })
</script>
<script src="script.js" defer></script>
  </body>
  <script src="./node_modules/js/bootstrap.min.js"></script>
</html>

<?php
 session_start();
 if(isset($_SESSION['myuser'])){
  header("Location:home.php");
 }
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
      $_SESSION['language'] = 'fr';
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
  
   <!-- bootstrap -->
   <link rel="stylesheet" href="node_modules/css/bootstrap.min.css">


    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="css/index.css?<?php echo time(); ?>" />
    <link rel="stylesheet" href="style.css?<?php echo time(); ?>" />
    <link rel="stylesheet" href="icons/css/all.css" />
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
            <!-- <a href="#" class="nav-link  active">Accueil</a> -->
          </li>
          <li class="nav-item">
            <a href="login.php" class="btn btn-primary py-1 px-3 ">Connexion</a>
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
                                        <a href="index.php?lang=en"
                                            style="color:<?php echo $_SESSION['language'] == 'en' ?  'red' :  ''  ?>"><?php echo htmlspecialchars($_SESSION['language'] == 'en' ? 'English' : 'Anglais'); ?></a>
                                    </label>
                                </li>
                                <!-- <input type="submit" name="en" id="en" value="en" hidden /> -->

                                <li>
                                    <label htmlfor="fr">
                                        <a href="index.php?lang=fr"
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

    <!-- <h1 class="welcome" style="display: flex;justify-content: center; color: rgba(34, 34, 212, 0.863); margin-bottom: -50px;"></h1> -->

    <!-- Categories Section -->
    <section id="projects">
      <div class="container">
      <div class="row mb-5">
              <div class="col-md-8 mx-auto text-center">
                  <!-- <h6 class="text-primary">PROJECTS</h6> -->
                  <h1 class="text-light mt-3">BIENVENUE CHEZ ASSURELIFECAMER</h1>
                  <p class="text-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, impedit.</p>
              </div>
          </div>
          <div class="row g-3">
    <?php
          include_once 'functions.php';
          $activities = getAllActivityS();
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
                      <!-- <button class="btn btn-primary py-1 px-4 i">Souscrire</button> -->
                      </div>
                  </div>
              </div>
              
          </div>

                    <?php
       
          }

          ?>
              
           
    </div>
         
      
      <div id="popup" class="popup hide-popup">
                        <div class="popup-content">
                            <div class="popup-close">
                                <i class='fas fa-xmark text-danger'></i>
                            </div>
                            <div class="popup-left">
                                <div class="popup-img-container">
                                    <img src="dashboard/assets/post_images/<?php echo htmlspecialchars($data['image']); ?>"
                                        class="img-fluid popup-img" alt="">
                                </div>
                            </div>
                            <div class="popup-right">
                                <div class="right-content">
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


  </section><!-- PROJECTS -->
<script>
    function openPopUp(data, lang) {
        // Assuming 'data' is the object passed from PHP
        const popup = document.getElementById('popup');
        const close = document.querySelector('.popup-close');

        // Setting image source
        const img = popup.querySelector('.popup-img');
        img.src = `dashboard/assets/post_images/${data.image}`;
        img.alt = data.titleEnglish; // Or titleFrench, depending on the session language

        // Setting title
        const title = popup.querySelector('.popup-right .right-content h1');
        title.textContent = lang == 'en' ? data.titleEnglish : data.titleFrench; // Or titleFrench

        // Setting description
        const desc = popup.querySelector('.popup-right .right-content p');
        desc.textContent = lang == 'en' ? data.descEnglish : data.descFrench; // Or descFrench

        // Show the popup
        popup.classList.remove("hide-popup");
        popup.classList.add("show-popup");
        close.addEventListener('click', ()=>{
          popup.classList.add("hide-popup");
        })
    }
</script>
    <script src="node_modules/js/bootstrap.min.js"></script>
  </body>
</html>

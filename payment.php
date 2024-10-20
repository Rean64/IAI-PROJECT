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
    <link rel="stylesheet" href="notify.css?<?php echo time();?>"/>
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
            <a href="home.php" class="nav-link i">Accueil</a>
          </li>
          <!-- <li class="nav-item">
            <a href="https://chat.whatsapp.com/H2mSCu6Uawg125vnwuAVKH" class="nav-link"> <img src="images/logo.png" alt="" style="width:30px;margin-top:-5px"></a>
          </li> -->
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

  <body>
  <?php echo include('message.php') ?>

    <div class="pay">
        <div class="content">
            <form action="code.php" method="POST">
                <div class="head">
                    <p>-- PAY WITH US --</p>
                </div>

                <div class="d-flex">
                    <div class="gray">
                        <p>+237</p>
                    </div>
                    <input type="text" name="number" value="" placeholder="Enter Phone">
                </div>

                <div class="d-flex2">
                    <input type="text" placeholder="10000">
                </div>
                 
                <div class="d-flex2 my-3">
                    <input type="text" placeholder="Enter varification code">
                </div>

                <div class="d-flex">
                <select name="method" id="">
                    <option selected disabled>-- Select Payment -- </option>
                    <option value="momo">Mobile Money</option>
                    <option value="om">Orange Money</option>
                </select>
                </div>
                <div class="d-sub">
                    <input type="submit" value="Submit" name="pay">
                </div>
            </form>
        </div>
    </div>


    <script src="script2.js?<?php echo time(); ?>"></script>

  </body>
  </html>
<?php
  session_start();
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
    

    <!-- <h1 class="welcome" style="display: flex;justify-content: center; color: rgba(34, 34, 212, 0.863); margin-bottom: -50px;"></h1> -->

    <!-- Categories Section -->
    <section id="projects">
    
      <div class="container">
      
    <?php
          include_once 'functions.php';
          $activities = getAllPost();
          // Reverse the order of activities
          $reversedActivities = $activities;

          // Initialize counter to limit displayed activities
          

          
          // Loop through the reversed array of activities
          foreach ($reversedActivities as $data) {
           
            $jsonData = json_encode($data);

          ?>

    

                    <?php
       
          }

          ?>
    <div class="row">
      <div class="col-6">
        <img src="" alt="">
      </div>
      <div class="col-6">
        <h1>TITLE HERE</h1>
        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi facere ducimus expedita rem dolorem laborum earum quisquam, voluptas sapiente voluptates enim velit quia voluptate neque veritatis nisi doloribus ea quod ex at. A nisi nam magni labore laborum at esse ad, fugit voluptatem fuga odit hic placeat quam obcaecati veniam similique enim maiores voluptatibus cum cupiditate iure quod. Perferendis eum iure, accusantium, consequuntur distinctio sequi rem ea enim cum culpa quia voluptas ullam veniam soluta. Est autem quae nisi, illum dolores in ex quia, eveniet veniam molestiae sed voluptatum, odio inventore vel. Exercitationem consectetur, ullam quisquam minima amet ipsum, commodi itaque fugit tenetur enim sunt nostrum! Modi enim, dolorum eveniet iusto sint aliquam sed asperiores perferendis cupiditate quo veniam similique minima aspernatur deserunt quae. Ipsam nesciunt odio ipsa nisi dolorum quaerat maiores sit possimus! Laudantium pariatur, aliquam deserunt excepturi quaerat sapiente sequi esse temporibus placeat harum, labore itaque est accusantium iusto assumenda animi reiciendis quas facilis, velit aliquid expedita odit amet! Facilis ipsa provident aliquam labore non maiores laboriosam modi, nihil minima, facere beatae neque, repellat voluptatum excepturi ratione? Sapiente corporis error explicabo voluptatum quis labore harum adipisci nulla facere! Unde cumque nesciunt labore ab fugiat exercitationem nulla quod voluptatem.</P>
      </div>
    </div>
              
           
    </div>
         
      
    

  </section><!-- PROJECTS -->

    <script src="node_modules/js/bootstrap.min.js"></script>
  </body>
</html>

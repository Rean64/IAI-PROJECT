<?php 
session_start();
include_once "db.php";
?>
<?php
    
if(isset($_POST['login'])){
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $password = mysqli_real_escape_string($con, $_POST['password']);
      if(!empty($email) && !empty($password)){
          $sql = mysqli_query($con, "SELECT * FROM client WHERE email = '{$email}'");
          if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
              $user_pass = $password;
              $enc_pass = $row['password'];
              if($user_pass === $enc_pass){
                  echo "Succefully Login";
                  header("Location: home.php");
                  exit(0);
              }else{
                  $error = "Email ou Mot de passe incorrect!";
              }
          }else{
            $error = "Email ou Mot de passe incorrect!";
          }
      }else{
          echo "All input fields are required!";
      }
    }
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Box icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css?<?php echo time(); ?>" />
    <title>Login</title>
    <style>
      .text-danger{
        /* color: red !important; */
      }
    </style>
  </head>
  <body>
    <!-- Login -->
    <div class="container">
      <div class="login-form">
        <form action="#" method="post">
          <h1>Connexion</h1>
          <p>
            Avez vous deja un compte? Connecter vous ou
            <a href="signup.php" class="text-danger">Inscription</a>
          </p>

          <?php if(isset($error)){ ?>
            <p style="color:red;" id="error"><?php echo $error;?></p>
            <?php } ?>

          <label for="email">Email</label>
          <input type="email" placeholder="Entrer Email" name="email" required />

          <label for="psw">Mot de passe</label>
          <input
            type="password"
            placeholder="Entrer Mot de passe"
            name="password"
            required
          />

          <label>
            <input
              type="checkbox"
              checked="checked"
              name="remember"
              style="margin-bottom: 15px"
            />
            Remember me
          </label>
          
          
         
          <div class="buttons">
            <a href="index.php"><button type="button" class="cancelbtn">Retour</button></a>
            <button type="submit" name="login" class="signupbtn">Connexion</button>
          </div>
        </form>
      </div>
    </div>

   

    <!-- Custom Script -->
    <script src="./js/index.js"></script>
  </body>
</html>

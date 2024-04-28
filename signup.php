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
    <title>Sign Up</title>
  </head>
  <body>
    <!-- Login --> 
    <div class="container">
      <div class="login-form">
        <form action="auth.php" method="post">
          <h1>Inscription</h1>
          <p>
            Inscrivez vos identifiant ou connecter vous 
            <a href="login.php">Connexion</a>
          </p>

          <label for="name">Nom</label>
          <input type="text" placeholder="Entrer Nom" name="name" required />

          <label for="email">Email</label>
          <input type="email" placeholder="Entrer Email" name="email" required />

          <label for="psw">Mot de passe</label>
          <input
            type="password"
            placeholder="Entrer votre mot de passe"
            name="password"
            required
          />

          <label for="phone">Telephone</label>
          <input
            type="tel"
            placeholder="Entrer votre numero de telephone"
            name="phone"
            required
          />
          <label for="location">Localisation</label>
          <input
            type="text"
            placeholder="Entrer votre Localisation"
            name="location"
            required
          />
          <label for="age">Date de naissance</label>
          <input
            type="date"
            placeholder="Entrer votre date de naissance"
            name="age"
            required
          />
          <label for="gender">Sexe</label>
         <select name="gender" id="gender" required>
          <option value=""></option>
          <option value="Homme">Homme</option>
          <option value="Femme">Femme</option>
         </select>

          

          <p>
           
          </p>

          <div class="buttons">
           <a href="index.php"><button type="button" name="cancel" class="cancelbtn">Retour</button></a>
           <button type="submit" name="signup" class="signupbtn">S'inscrire</button>
          </div>
        </form>
      </div>
    </div>


    <!-- Custom Script -->
    <script src="./js/index.js"></script>
  </body>
</html>

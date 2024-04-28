
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css?<?php echo time(); ?>">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Responsive Regisration Form </title> 
</head>
<body>
    <div class="container">
        <header>Souscription</header>

        <form action="contract.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Identifiant</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Assure</label>
                            <input type="text" name="assure" placeholder="Assure">
                        </div>

                        <div class="input-field">
                            <label>Montant</label>
                            <input type="text" name="montant" placeholder="Enter montant">
                        </div>

                        <div class="input-field">
                            <label>Taille</label>
                            <input type="number" min="0" name="taille" placeholder="Enter taille">
                        </div>

                        <div class="input-field">
                            <label>Poids</label>
                            <input type="number" min="0" name="poid" placeholder="Enter poid">
                        </div>

                        <div class="input-field">
                            <label>Nom Product</label>
                            <select name="product_name">
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
                            <input type="text" name="banque" placeholder="Enter banque affiliee">
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <!-- <span class="title">Identity Details</span> -->

                    <div class="fields">
                        <div class="input-field">
                            <label>Etat de sante</label>
                            <input type="text" name="etat" placeholder="Enter etat">
                        </div>

                        <div class="input-field">
                        <label>Prime</label>
                            <select name="prime">
                                <option disabled selected>Select Prime</option>
                                <option value="hebdomadaire">Hebdomadaire</option>
                                <option value="mensuelle">Mensuelle</option>
                                <option value="annuelle">Annuelle</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Beneficaire</label>
                            <input type="text" name="beneficaire" placeholder="Enter Beneficaire">
                        </div>

                        <div class="input-field">
                            <label>Date de naissance</label>
                            <input type="date" name="age" placeholder="Enter date">
                        </div>

                        <div class="input-field">
                            <label>Date de virement</label>
                            <input type="date" name="date" placeholder="Enter date de virement">
                        </div>

                        <div class="input-field">
                            <label>Duree</label>
                            <input type="text" name="duree" placeholder="Enter Duree">
                        </div>
                    </div>

                    <button type="button" onclick="openPopup()">
                        <span>Souscrire</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                    <div class="popup" id="popup">
                        <div class="i">
                            <i class="fas fa-check"  style="color:white;font-size:40px"></i>
                        </div>
                        <h2>Succes</h2>
                        <h3>Votre demande a ete prise en compte. Merci</h3>
                        <button class="close-btn" type="submit" name="store">Fermer</button>
                    </div> 
                </div> 
            </div>

        </form>
    </div>
<script type="text/javascript">
   let popup = document.getElementById("popup");
   function openPopup(){
        popup.classList.add("open-popup")
   }
</script>
</body>
</html>
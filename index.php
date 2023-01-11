<?php

    $email_securite = "";
    if (!empty($email_securite)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_securite = "TRUE";
        }else{
            $email_securite = "FALSE";
        };
    };
    
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil - Bernard & cie</title>
        <link rel="stylesheet" href="publique/css/variables.css">
        <link rel="stylesheet" href="publique/css/generiques.css">
        <link rel="stylesheet" href="publique/css/layout.css">
        <link rel="stylesheet" href="publique/css/modules.css">
        <link rel="stylesheet" href="publique/css/etats.css">
    </head>
    <body>
        <header>
            <div class="logo">
                <h1>
                    <svg width="75" height="75" viewBox="0 0 75 75" fill="none">
                        <path d="M65.625 15.625C62.1562 14.5313 58.3438 14.0625 54.6875 14.0625C48.5938 14.0625 42.0312 15.3125 37.5 18.75C32.9688 15.3125 26.4062 14.0625 20.3125 14.0625C14.2188 14.0625 7.65625 15.3125 3.125 18.75V64.5312C3.125 65.3125 3.90625 66.0938 4.6875 66.0938C5 66.0938 5.15625 65.9375 5.46875 65.9375C9.6875 63.9062 15.7812 62.5 20.3125 62.5C26.4062 62.5 32.9688 63.75 37.5 67.1875C41.7188 64.5312 49.375 62.5 54.6875 62.5C59.8438 62.5 65.1562 63.4375 69.5312 65.7812C69.8438 65.9375 70 65.9375 70.3125 65.9375C71.0938 65.9375 71.875 65.1562 71.875 64.375V18.75C70 17.3438 67.9688 16.4062 65.625 15.625Z" fill="#6E6E6E"/>
                        <path d="M9.375 57.8125V21.875C12.8125 20.7813 16.5625 20.3125 20.3125 20.3125C24.5 20.3125 30.0938 21.5937 34.375 23.4062V59.3438C30.0938 57.5312 24.5 56.25 20.3125 56.25C16.5625 56.25 12.8125 56.7188 9.375 57.8125ZM65.625 57.8125C62.1875 56.7188 58.4375 56.25 54.6875 56.25C50.5 56.25 44.9062 57.5312 40.625 59.3438V23.4062C44.9062 21.5625 50.5 20.3125 54.6875 20.3125C58.4375 20.3125 62.1875 20.7813 65.625 21.875V57.8125Z" fill="#939393"/>
                        <path d="M54.6875 32.8125C57.4375 32.8125 60.0938 33.0938 62.5 33.625V28.875C60.0312 28.4062 57.375 28.125 54.6875 28.125C50.6875 28.125 47 28.625 43.75 29.5938V34.5C46.8438 33.4063 50.5625 32.8125 54.6875 32.8125ZM54.6875 41.125C57.4375 41.125 60.0938 41.4063 62.5 41.9375V37.1875C60.0312 36.7187 57.375 36.4375 54.6875 36.4375C50.6875 36.4375 47 36.9375 43.75 37.9063V42.8125C46.8438 41.75 50.5625 41.125 54.6875 41.125ZM54.6875 49.4688C57.4375 49.4688 60.0938 49.75 62.5 50.2813V45.5312C60.0312 45.0625 57.375 44.7813 54.6875 44.7813C50.6875 44.7813 47 45.2813 43.75 46.25V51.1563C46.8438 50.0625 50.5625 49.4688 54.6875 49.4688Z" fill="#C4C4C4"/>
                    </svg>
                </h1>
                <h2>Bernard & cie</h2>
            </div>
        </header>

        <h3>Créer un devis</h3>

        <form action="vue/devis.php" method="post">

            <div class="boites">

                <div class="boite_gauche">
                    <h4>Informations client:</h4>
                    <label for="femme" class="block">Civilité:</label>

                    <div class="radios">
                        <div class="radio_femme">
                            <input type="radio" name="civilite" id="femme" checked>
                                <label for="femme">Femme</label>
                        </div>
                        <div class="radio_homme">
                            <input type="radio" name="civilite" id="homme">
                                <label for="homme">Homme</label>
                        </div>
                    </div>

                    <label class="block" for="nom">Nom <span>(obligatoire)</span>:</label>
                        <input class="<?php if(empty($nom)) {echo 'erreur';}; ?>" type="text" name="nom" id="nom" required>
                        <?php if(empty($nom)){echo '<p class="erreur">Merci de renseigner le nom du client</p>';} ?>

                    <label for="prenom">Prénom <span>(obligatoire)</span>:</label>
                        <input class="<?php if(empty($prenom)) {echo 'erreur';}; ?>" type="text" name="prenom" id="prenom" required>
                        <?php if(empty($prenom)) {echo '<p class="erreur">Merci de renseigner le prénom du client</p>';} ?>

                    <label for="email">Adresse e-mail <span>(obligatoire)</span>:</label>
                        <input class="<?php if(empty($email)) {echo 'erreur';}; ?>" type="email" name="email" id="email" required>
                        <?php 
                            if(empty($email)) {
                                echo '<p class="erreur">Merci de renseigner l\'adresse e-mail du client</p>';
                            }else if($email_securite == "FALSE") {
                                echo 'Adresse e-mail invalide';
                            }
                        ?>

                    <label for="telephone">Numéros de téléphone <span>(facultatif)</span>:</label>
                        <div class="numeros_telephone">
                            <input type="tel" name="telephone" id="telephone">
                            <input type="tel" name="telephone" id="telephone">
                        </div>

                    <label for="adresse">Adresse <span>(facultatif)</span>:</label>
                        <input type="text" name="adresse" id="adresse">

                    <label for="complement">Compément adresse <span>(facultatif)</span>:</label>
                        <input type="text" name="complement" id="complement">

                    <label for="code_postal">Code postal <span>(facultatif)</span>:</label>
                        <input type="number" name="code_postal" id="code_postal" min="">

                    <label for="ville">Ville <span>(facultatif)</span>:</label>
                        <input type="text" name="ville" id="ville">
                </div>
                
                <div class="boite_droite">
                    <div class="titre-devis">
                        <label for="titre_devis">Donner le titre de votre devis: </label>
                            <input class="<?php if(empty($titre_devis)) {echo 'erreur';}; ?>" type="text" name="titre_devis" id="titre_devis" required>
                            <?php if(empty($element)) {echo '<p class="erreur">Merci de renseigner le titre de votre devis</p>';} ?>
                    </div>
                    <div class="produits">
                        <h4>Commander des elements:</h4>
                        <label for="element1">Stylos à plumes <span>(2,95 &euro; l'unité HT)</span> :</label>
                            <input class="<?php if(empty($elements)) {echo 'erreur';}; ?>" type="number" name="element1" id="element1" min="0">
    
                        <label for="element2">Stylos à billes: <span>(0,90 &euro; l'unité HT)</span> :</label>
                            <input class="<?php if(empty($elements)) {echo 'erreur';}; ?>" type="number" name="element2" id="element2" min="0">
    
                        <label for="element3">Crayon à papier <span>(0,50 &euro; l'unité HT)</span> :</label>
                            <input class="<?php if(empty($elements)) {echo 'erreur';}; ?>" type="number" name="element3" id="element3" min="0">
    
                        <label for="element4">Gommes: <span>(0,35 &euro; l'unité HT)</span> :</label>
                            <input class="<?php if(empty($elements)) {echo 'erreur';}; ?>" type="number" name="element4" id="element4" min="0">
    
                        <?php if(empty($element)) {echo '<p class="erreur">Merci de choisir au moins un element à commander</p>';} ?>
                    </div>
                </div>
            </div>

            <div class="btn-resultat-devis">
                <div class="absolu-devant">
                    <svg 
                        preserveAspectRatio="xMidYMid meet" 
                        viewBox="0 0 32 32">
                        <circle cx="22" cy="24" r="2" fill="currentColor"/>
                        <path fill="currentColor" d="M29.777 23.479A8.64 8.64 0 0 0 22 18a8.64 8.64 0 0 0-7.777 5.479L14 24l.223.521A8.64 8.64 0 0 0 22 30a8.64 8.64 0 0 0 7.777-5.479L30 24zM22 28a4 4 0 1 1 4-4a4.005 4.005 0 0 1-4 4zM7 17h5v2H7zm0-5h12v2H7zm0-5h12v2H7z"/>
                        <path fill="currentColor" d="M22 2H4a2.006 2.006 0 0 0-2 2v24a2.006 2.006 0 0 0 2 2h8v-2H4V4h18v11h2V4a2.006 2.006 0 0 0-2-2Z"/>
                    </svg>
                    <h4>Résultat du devis</h4>
                </div>
                <input type="submit" value="">
            </div>
        </form>
    </body>
</html>

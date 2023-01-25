<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de devis</title>
     <meta name="author" content="Fabien Chedouteaud">
    <meta name="description" content="Exemple de générateur de devis">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/normalize.min.css">
</head>
<body>
    <main>
        <h1>Générateur de devis</h1>
        <p>Compl&eacute;tez ce formulaire pour créer un devis pour vos clients.</p>
        <hr>
        
        <section class="formulaire">
            <form action="" method="post">
                <div class="champ display-flex">
                    <label for="nom_client">Nom de l'entreprise</label>
                    <input type="text" name="nom_entreprise_client" id="nom_entreprise_client" placeholder="Entreprise de votre client" required autocomplete="off" value="Latour">
                </div>
                <div class="champ display-flex">
                    <label for="nom_client">Nom du Client</label>
                    <div class="display-flex flex-max">
                        <input type="text" name="prenom_client" id="prenom_client" placeholder="Prénom" required autocomplete="off" value="Pierre">
                        <input type="text" name="nom_client" id="nom_client" placeholder="Nom" required autocomplete="off" value="Latour">
                    </div>
                </div>
                <div class="champ display-flex">
                    <label for="telephone">Téléphone</label>
                    <input type="tel" name="telephone" id="telephone" placeholder="Numéro de téléphone" required autocomplete="off" value="0123456789">
                </div>
                <div class="champ display-flex">
                    <label for="email">Adresse courriel</label>
                    <input type="email" name="email" id="email" placeholder="Adresse e-mail" required autocomplete="off" value="platour@orange.fr">
                </div>
                <div class="champ display-flex">
                    <label for="adresse">Adresse</label>
                    <div class="display-flex flex-colonne">
                        <div class="display-flex flex-max">
                            <input type="text" name="adresse" id="adresse" placeholder="Adresse" required autocomplete="off" value="Rue des Lits Militaires">
                            <input type="text" name="complement_adresse" id="complement_adresse" placeholder="Complément" autocomplete="off" value="12">
                        </div>
                        <div class="display-flex flex-max">
                            <input type="number" name="code_postal" id="code_postal" min="00001" step="1" max="99999" placeholder="Code postal" required autocomplete="off" value="06600">
                            <input type="text" name="ville" id="ville" placeholder="Ville" required autocomplete="off" value="Antibes">
                        </div>
                    </div>
                </div>
                <div class="champ display-flex">
                    <h3>Formules</h3>
                    <div class="formules display-flex flex-wrap">
                        <div class="option">
                            <input type="radio" name="formules[]" id="petit_budget" value="petit_budget" checked>
                            <label for="petit_budget">Petit Budget</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="formules[]" id="professionnel" value="professionnel">
                            <label for="professionnel">Professionnel</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="formules[]" id="e_commerce" value="e-commerce">
                            <label for="e_commerce">E-commerce</label>
                        </div>
                    </div>
                </div>
                <div class="champ display-flex">
                    <h3>Suppléments</h3>
                    <div class="options display-flex flex-wrap">
                        <div class="option">
                            <input type="checkbox" name="supplements[]" id="maquettage" value="maquettage">
                            <label for="maquettage">Maquettage</label>
                        </div>
                        <div class="option">
                            <input type="checkbox" name="supplements[]" id="hebergement" value="hebergement">
                            <label for="hebergement">Hébergement</label>
                        </div>
                        <div class="option">
                            <input type="checkbox" name="supplements[]" id="sea" value="sea">
                            <label for="sea">SEA</label>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Obtenir votre devis">
            </form>
        </section>
    </main>
</body>
</html>

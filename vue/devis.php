<?php

    //Données déjà sauvegardées dans la BDD
    $nom_vendeur = "Bernard";
    $email_vendeur = "bernard.lermite@gmail.com";
    $adresse_vendeur = "4 route des moules, île d'Oléron 40125";

    //Récupération des données du formulaire
    $tableau = $_POST;

    //transformer une partie du tableau pour  créer un tableau de deuxième étage pour 
    //les produits à commander et leurs prix
    $produits = [
        'produit1' => $tableau['element1'],
        'produit2' => $tableau['element2'],
        'produit3' => $tableau['element3'],
        'produit4' => $tableau['element4'],
    ];
    //suppression des éléments transférés
    unset($tableau['element1']);
    unset($tableau['element2']);
    unset($tableau['element3']);
    unset($tableau['element4']);
    //Intégrer le nouveau tableau au tableau existant
    $tableau["produits"] = $produits;
    
    
    // Donne le numéro du client pour le retrouver dans la BDD
    $numero_client = random_int(1, 500);

    // Donne la date de création du devis
    $date = date('d/m/Y \à H\hi');
    
    
    /*===================================================
    Calcule des prix HT, TTC et TVA des produits 
    ===================================================*/
    
    //Calcule des prix HT et du prix total HT:
    
    //Tableau des prix des produits récupéré dans la BDD
    $prix = [
        '1' => 2.95,
        '2' => 0.90,
        '3' => 0.50,
        '4' => 0.35
    ];

    //Création du tableau prix pour la collecte des données
    $tableau_prix = [];

    // Calcule du prix HT de chaque produit
    $i = 1;
    $prix_total_ht = 0;

    foreach ($prix as $produits) {

        $tableau_prix["produit" . $i]["prix_ht"] = $tableau["produits"]['produit' . $i] * $produits;
                
        //Calcule du prix total HT:
        $prix_total_ht += $tableau_prix["produit" . $i]["prix_ht"];

        $i++;
    }

    //ajout de la variable prix total HT au tableau
    $tableau_prix["prix_total_ht"] = $prix_total_ht;



    //Calcule du prix TTC:
    $tableau_prix["prix_ttc"] = round($tableau_prix["prix_total_ht"] * 1.1, 3);

    //Calcule du prix TTC:
    $tableau_prix["prix_tva"] = round($tableau_prix["prix_ttc"] - $tableau_prix["prix_total_ht"], 3);

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bernard & cie</title>
        <link rel="stylesheet" href="../publique/css/variables.css">
        <link rel="stylesheet" href="../publique/css/generiques.css">
        <link rel="stylesheet" href="../publique/css/layout.css">
        <link rel="stylesheet" href="../publique/css/modules.css">
        <link rel="stylesheet" href="../publique/css/etats.css">
    </head>
    <body>
        <header>
            <div class="logo">
                <h1>
                    <svg width="50" height="50" viewBox="0 0 75 75" fill="none">
                        <path d="M65.625 15.625C62.1562 14.5313 58.3438 14.0625 54.6875 14.0625C48.5938 14.0625 42.0312 15.3125 37.5 18.75C32.9688 15.3125 26.4062 14.0625 20.3125 14.0625C14.2188 14.0625 7.65625 15.3125 3.125 18.75V64.5312C3.125 65.3125 3.90625 66.0938 4.6875 66.0938C5 66.0938 5.15625 65.9375 5.46875 65.9375C9.6875 63.9062 15.7812 62.5 20.3125 62.5C26.4062 62.5 32.9688 63.75 37.5 67.1875C41.7188 64.5312 49.375 62.5 54.6875 62.5C59.8438 62.5 65.1562 63.4375 69.5312 65.7812C69.8438 65.9375 70 65.9375 70.3125 65.9375C71.0938 65.9375 71.875 65.1562 71.875 64.375V18.75C70 17.3438 67.9688 16.4062 65.625 15.625Z" fill="#6E6E6E"/>
                        <path d="M9.375 57.8125V21.875C12.8125 20.7813 16.5625 20.3125 20.3125 20.3125C24.5 20.3125 30.0938 21.5937 34.375 23.4062V59.3438C30.0938 57.5312 24.5 56.25 20.3125 56.25C16.5625 56.25 12.8125 56.7188 9.375 57.8125ZM65.625 57.8125C62.1875 56.7188 58.4375 56.25 54.6875 56.25C50.5 56.25 44.9062 57.5312 40.625 59.3438V23.4062C44.9062 21.5625 50.5 20.3125 54.6875 20.3125C58.4375 20.3125 62.1875 20.7813 65.625 21.875V57.8125Z" fill="#939393"/>
                        <path d="M54.6875 32.8125C57.4375 32.8125 60.0938 33.0938 62.5 33.625V28.875C60.0312 28.4062 57.375 28.125 54.6875 28.125C50.6875 28.125 47 28.625 43.75 29.5938V34.5C46.8438 33.4063 50.5625 32.8125 54.6875 32.8125ZM54.6875 41.125C57.4375 41.125 60.0938 41.4063 62.5 41.9375V37.1875C60.0312 36.7187 57.375 36.4375 54.6875 36.4375C50.6875 36.4375 47 36.9375 43.75 37.9063V42.8125C46.8438 41.75 50.5625 41.125 54.6875 41.125ZM54.6875 49.4688C57.4375 49.4688 60.0938 49.75 62.5 50.2813V45.5312C60.0312 45.0625 57.375 44.7813 54.6875 44.7813C50.6875 44.7813 47 45.2813 43.75 46.25V51.1563C46.8438 50.0625 50.5625 49.4688 54.6875 49.4688Z" fill="#C4C4C4"/>
                    </svg>
                </h1>
                <h2>Bernard & cie</h2>
            </div>
            <div class="btn_print" onclick="window.print()">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"/>
                    </svg>
                </h2>
                <h3>Imprimer le devis</h3>
            </div>
        </header>

        <main>
            <div class="infos-vendeur">
                <p><?= $nom_vendeur ?></p>
                <p><?= $email_vendeur ?></p>
                <p><?= $adresse_vendeur ?></p>
            </div>
            <div class="infos-client">
                <p><?= $tableau['nom'] . ' ' . $tableau['prenom'] ?></p>
                <p><?= $tableau['email'] ?></p>
                <p><?= $tableau['adresse'] ?></p>
            </div>
            <div class="infos-devis">
                <p class="titre-devis"><?= $tableau['titre_devis'] ?></p>
                <p>Date: <?= $date ?></p>
                <p>N° client: <?= $numero_client ?></p>
            </div>

            <div class="tableau_principal">
                <div class="thead description">Description</div>
                <div class="thead quantite">Quantité</div>
                <div class="thead prix-unitaire-ht">Prix unitaire HT</div>
                <div class="thead total-ht-produit">Total HT</div>
                <div class="thead pourcentage-tva">TVA</div>

                <div class="contenu contenu_description">
                    <p>Stylos à plumes</p>
                    <p>Stylos à billes</p>
                    <p>Crayons à papier</p>
                    <p>Gommes</p>
                </div>
                <div class="contenu contenu_quantite">
                    <p><?= $tableau["produits"]['produit1'] ?></p>
                    <p><?= $tableau["produits"]['produit2'] ?></p>
                    <p><?= $tableau["produits"]['produit3'] ?></p>
                    <p><?= $tableau["produits"]['produit4'] ?></p>
                </div>
                <div class="contenu contenu_prix-unitaire-ht">
                    <p><?= sprintf('%.2f', $prix[1]); ?> &euro;</p>
                    <p><?= sprintf('%.2f', $prix[2]); ?> &euro;</p>
                    <p><?= sprintf('%.2f', $prix[3]); ?> &euro;</p>
                    <p><?= sprintf('%.2f', $prix[4]); ?> &euro;</p>
                </div>
                <div class="contenu contenu_total-ht">
                    <p><?= sprintf('%.2f', $tableau_prix["produit1"]["prix_ht"]); ?> &euro;</p>
                    <p><?= sprintf('%.2f', $tableau_prix["produit2"]["prix_ht"]); ?> &euro;</p>
                    <p><?= sprintf('%.2f', $tableau_prix["produit3"]["prix_ht"]); ?> &euro;</p>
                    <p><?= sprintf('%.2f', $tableau_prix["produit4"]["prix_ht"]); ?> &euro;</p>
                </div>
                <div class="contenu contenu_tva">
                    <p>10 &#37;</p>
                    <p>10 &#37;</p>
                    <p>10 &#37;</p>
                    <p>10 &#37;</p>
                </div>
            </div>

            <div class="flex">
                <div class="tableau-totaux">
                    <div class="total-ht">
                        <h3>Total HT</h3>
                        <div class="prix"><?= $tableau_prix["prix_total_ht"]; ?> &euro;</div>
                    </div>
                    <div class="tva">
                        <h3>TVA 10 &#37;</h3>
                        <div class="prix"><?= $tableau_prix["prix_tva"]; ?> &euro;</div>
                    </div>
                    <div class="total-ttc">
                        <h3>Total TTC</h3>
                        <div class="prix"><?= $tableau_prix["prix_ttc"]; ?> &euro;</div>
                    </div>
                </div>
            </div>

            <div class="btn-retour">
                <svg viewBox="0 0 448 512">
                    <path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/>
                </svg>
                <h3>Retour à l'accueil</h3>
            </div>
        </main>
    </body>
</html>

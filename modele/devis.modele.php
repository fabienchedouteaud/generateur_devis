<?php


/**
 * Déterminer somme des articles
 */
$articles = [];
foreach($_POST['formules'] as $valeur) {
    $articles["site_web"] = [
        'nom' => 'Site internet<span>' . ucwords(strtr($valeur, "_", " ")) . '</span>',
        'quantite' => "1<span>Unité</span>",
        'reduction' => 10,
    ];
    if($valeur == 'petit_budget') {
        $articles['site_web']['tarif'] = 750;
    } else if($valeur == "professionnel") {
        $articles['site_web']['tarif'] = 1200;
    } else {
        $articles['site_web']['tarif'] = 3000;
    }
    $articles['site_web']['total'] = round(0.9 * $articles['site_web']['tarif'] / 1, 2);
}

if(isset($_POST['supplements'])) {
    foreach($_POST['supplements'] as $valeur) {
    
        if($valeur == 'maquettage') {
            $articles['maquettage'] = [
                'nom' => 'Maquettage<span>- Zoning<br>- Maquettes fonctionnelles<br>- Maquettes graphiques</span>',
                'quantite' => '6<span>Maquettes</span>',
                'tarif' => 500,
                'reduction' => '&nbsp;',
                'total' => 500
            ];
        } else if($valeur == 'hebergement') {
            $articles['hebergement'] = [
                'nom' => 'Hébergement<span>Forfait annuel</span>',
                'quantite' => '1<span>Forfait</span>',
                'tarif' => 5.00,
                'reduction' => '&nbsp;',
                'total' => 5.00
            ];
        } else if($valeur == 'sea') {
            $articles['sea'] = [
                'nom' => 'SEA<span>Booster sa visibilité</span>',
                'quantite' => '1<span>Unité</span>',
                'tarif' => 100,
                'reduction' => '&nbsp;',
                'total' => 100
            ];
        }
    }
}



/**
 * Déterminer somme total
 */
$totaux = [];
$totaux = [
    'sous_total' => 0,
    'total_remise' => 0,
    'tva_taux' => 20,
    'tva_total' => 0,
    'montant_total' => 0,
];

foreach($articles as $article) {
    // echo gettype(strtr($article['reduction'], " %", ""));
    $totaux['sous_total'] = $totaux['sous_total'] + $article['tarif'];
    $totaux['total_remise'] = $totaux['total_remise'] + ((is_int($article['reduction'])) ? $article['tarif'] - $article['total'] : 0);
    $totaux['montant_total'] = $totaux['montant_total'] + $article['total'];
}
$totaux['tva_total'] = ($totaux['tva_taux']/100) * $totaux['montant_total'];
$totaux['montant_total'] = $totaux['montant_total'] + $totaux['tva_total'];


$mois = [
    1 => "Janvier",
    2 => "Fevrier",
    3 => "Mars",
    4 => "Avril",
    5 => "Mai",
    6 => "Juin",
    7 => "Juillet",
    8 => "Aout",
    9 => "Septembre",
    10 => "Octobre",
    11 => "Novembre",
    12 => "Decembre",
];

require_once 'vues/devis.vue.php';

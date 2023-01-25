<?php

/**
 * Utiliser du Hérédoc comme quand on crée un template (header, main, footer)
 */



?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Devis de Portail auto-entreprise</title>
    </head>
    <style>*{print-color-adjust:exact}:root{--couleur-principale:rgb(51, 51, 255);--couleur-fond-bleu:rgb(218, 218, 255);--couleur-gris:rgb(128, 128, 128);--couleur-fond-gris:rgb(242, 242, 242);--police-trèspetit:12px;--police-petit:15px;--police-moyenne:18px;--police-grand:24px}.display-flex{display:flex;flex-direction:row}.flex-colonne{flex-direction:column}.espace-max{justify-content:space-between}html{background-color:#a9a9a9}body{background-color:#fff;border:1px solid #000;width:21cm;height:29.6cm;margin:50px auto}@media print{body{margin:0}}header{align-items:center;margin:36px}header h1{margin:0}header .numero_devis span{text-align:end;font-size:var(--police-moyenne)}header .numero_devis h2{margin:0;color:var(--couleur-principale);font-size:var(--police-grand)}.informations{margin-bottom:36px}.informations div.infos_client,.informations div.infos_entreprise{width:100%;margin:0 56px}.informations div.infos_client h3,.informations div.infos_entreprise h3{color:var(--couleur-principale);margin-bottom:0;font-size:var(--police-moyenne)}.informations div.infos_client div.separateur,.informations div.infos_entreprise div.separateur{background-color:var(--couleur-fond-bleu);height:2px;width:100%;margin-top:6px}.informations div.infos_client p,.informations div.infos_entreprise p{margin:6px 0 0 0;font-size:var(--police-trèspetit)}.informations div.infos_client p.nom_entreprise,.informations div.infos_entreprise p.nom_entreprise{margin-top:16px}.informations div.infos_client div.infos_sup span,.informations div.infos_entreprise div.infos_sup span{color:var(--couleur-gris)}.chiffres_clefs{margin:0 56px 36px 56px;padding:12px 18px;background-color:var(--couleur-fond-bleu);border-radius:6px}.chiffres_clefs .donnee{width:fit-content}.chiffres_clefs .donnee h3{margin-top:12px;font-size:var(--police-petit)}.chiffres_clefs .donnee div.display-flex{align-items:center}.chiffres_clefs .donnee div.display-flex svg{height:24px;width:24px;margin-right:12px;fill:var(--couleur-principale)}.chiffres_clefs .donnee div.display-flex p{margin:0}div.articles table{margin:0 56px;width:calc(100% - 112px);border-collapse:collapse}div.articles table tr{width:100%}div.articles table thead{position:relative;line-height:56px;height:56px;font-size:var(--police-petit);color:var(--couleur-gris)}div.articles table thead:before{position:absolute;bottom:0;left:0;height:2px;width:100%;content:'';background-color:var(--couleur-fond-bleu)}div.articles table thead tr{text-align:left}div.articles table tbody tr{height:64px;max-height:max-content}div.articles table tbody tr td:nth-child(1),div.articles table thead tr th:nth-child(1){width:50px;text-align:center}div.articles table tbody tr td:nth-child(2),div.articles table thead tr th:nth-child(2){width:200px}div.articles table tbody tr td:nth-child(3),div.articles table thead tr th:nth-child(3){width:100px;text-align:start}div.articles table tbody tr td:nth-child(4),div.articles table tbody tr td:nth-child(5),div.articles table tbody tr td:nth-child(6),div.articles table thead tr th:nth-child(4),div.articles table thead tr th:nth-child(5),div.articles table thead tr th:nth-child(6){width:100px;text-align:center}div.articles table tbody tr td{font-size:var(--police-petit);padding:16px 0}div.articles table tbody tr td span{display:block;font-size:var(--police-trèspetit);color:var(--couleur-gris)}div.articles table tbody tr:nth-child(2n){background-color:var(--couleur-fond-gris)}div.totaux{width:350px;margin:36px 0 0 calc(100% - 406px);text-align:end}div.totaux table tr{height:24px;position:relative}div.totaux table tr:not(:last-child) th{color:var(--couleur-gris)}div.totaux table tr td,div.totaux table tr th{line-height:24px;height:24px;font-size:var(--police-petit)}div.totaux table tr th{width:150px}div.totaux table tr td{width:100px}div.totaux table tr:last-child:after{position:absolute;top:0;left:0;height:2px;width:100%;content:'';background-color:var(--couleur-fond-bleu)}div.totaux table tr:last-child{height:48px;line-height:48px}div.totaux table tr:last-child td:last-child{font-weight:600}</style>
    <body>
        <header class="display-flex espace-max">
            <h1 class="logo">LOGO</h1>
            <div class="numero_devis display-flex flex-colonne">
                <span>devis n°</span>
                <?= '<!--Premier devis de '.$mois[date('n')].' '.date('Y').' -->'; ?> 
                <h2 title="Premier devis de <?= $mois[date('n')].' '.date('Y') ?>"><?=date('Y-m')?>-001</h2>
            </div>
        </header>
        <main>
            <div class="informations display-flex espace-max">
                <div class="infos_entreprise">
                    <h3>Devis proposé par</h3>
                    <div class="separateur"></div>
                    <p class="nom_entreprise">Mon Portail Entrepreneur EI</p>
                    <p class="adresse">22 Rue du Général, 75002 Paris</p>
                    <p class="numero_telephone">0123456789</p>
                    <p class="email">monportailentrepeneur7@orange.fr</p>
                    <div class="infos_sup">
                        <p class="siret"><span>SIRET:</span> 222 222 222</p>
                        <p class="rm"><span>ENREGISTR&Eacute; AU RM DE:</span> Limoges</p>
                    </div>
                </div>
                <div class="infos_client">
                    <h3>Devis proposé à</h3>
                    <div class="separateur"></div>
                    <p class="nom_entreprise">Entreprise <?php print_r($_POST['nom_entreprise_client']); ?></p>
                    <p class="alattention">à l'attention de M. <?php print_r($_POST['prenom_client'] . ' ' . $_POST['nom_client']); ?></p>
                    <p class="adresse"><?php if(!isset($_POST['complement_adresse'])) print_r($_POST['complement_adresse'] . '. ');print_r($_POST['adresse'] . ', ' . $_POST['code_postal'] . ' ' . $_POST['ville']); ?></p>
                    <p class="numero_telephone"><?php print_r($_POST['telephone']); ?></p>
                    <p class="email"><?php print_r($_POST['email']) ?></p>
                    <div class="infos_sup">
                        <p class="siret"><span>SIRET:</span> 222 222 222</p>
                        <p class="tva"><span>TVA:</span> FR85 978 978</p>
                    </div>
                </div>
            </div>
            <div class="chiffres_clefs display-flex espace-max">
                <div class="donnee">
                    <h3>Création du devis</h3>
                    <div class="display-flex">
                        <svg viewBox="0 0 24 24"><path d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z"></path><path d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z"></path></svg>
                        <p><?= date('d/m/Y') ?></p>
                    </div>
                </div>
                <div class="donnee">
                    <h3>Conditions de règlement</h3>
                    <div class="display-flex">
                        <svg viewBox="0 0 24 24"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"></path></svg>
                        <p>30 jours</p>
                    </div>
                </div>
                <div class="donnee">
                    <h3>Durée de production</h3>
                    <div class="display-flex">
                        <svg viewBox="0 0 24 24"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M13 7h-2v5.414l3.293 3.293 1.414-1.414L13 11.586z"></path></svg>
                        <p>4 jours</p>
                    </div>
                </div>
                <div class="donnee">
                    <h3>Validité de l'offre</h3>
                    <div class="display-flex">
                        <svg viewBox="0 0 24 24"><path d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z"></path><path d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z"></path></svg>
                        <p><?= date('d/m/Y',strtotime('+30 day')) ?></p>
                    </div>
                </div>
            </div>
            <div class="articles">
                <table>
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>ARTICLE</th>
                            <th>QUANTIT&Eacute;</th>
                            <th>PRIX UNIT&Eacute;</th>
                            <th>REMISE</th>
                            <th>TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $i=1;
                            foreach ($articles as $article) {
                                $unite = ($article['reduction'] == "&nbsp;") ? "" : " %";
                                echo <<<EOF
                                    <tr>
                                        <td>{$i}</td>
                                        <td>{$article['nom']}</td>
                                        <td>{$article['quantite']}</td>
                                        <td>{$article['tarif']} &euro;</td>
                                        <td>{$article['reduction']} {$unite}</td>
                                        <td>{$article['total']} &euro;</td>
                                    </tr>
                                EOF;
                                $i++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="totaux">
                <table>
                    <tr>
                        <th>SOUS-TOTAL</th>
                        <td></td>
                        <td><?= $totaux['sous_total']; ?> &euro;</td>
                    </tr>
                    <tr>
                        <th>TOTAL REMISE</th>
                        <td></td>
                        <td><?= (!is_int($totaux['total_remise'])) ? '- ' . $totaux['total_remise'] : $totaux['total_remise']; ?> &euro;</td>
                    </tr>
                    <tr>
                        <th>TVA</th>
                        <td><?= $totaux['tva_taux']; ?> %</td>
                        <td>+ <?= $totaux['tva_total']; ?> &euro;</td>
                    </tr>
                    <tr>
                        <th>MONTANT TOTAL</th>
                        <td></td>
                        <td><?= $totaux['montant_total']; ?> &euro;</td>
                    </tr>
                </table>
            </div>
        </main>
    </body>
</html>

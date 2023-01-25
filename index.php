<?php 

/**
 * 
 * index.php : entrée de notre application
 * 
 * @author Fabien <contact.fabienchedouteaud@gmail.com>
 * 20230110
*/

if(isset($_POST['nom_entreprise_client']) && isset($_POST['prenom_client'])) {
    require_once 'modele/devis.modele.php';
} else {
    require_once 'vues/vue.php';
}

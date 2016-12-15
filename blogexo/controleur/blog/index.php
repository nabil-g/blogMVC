<?php

// On demande les 5 derniers billets (depuis le modèle)
include_once('modele/blog/get_billets.php');
$billets = get_billets(0, 4);

// On effectue du traitement sur les données (dans le controleur)
// sécurisation de l'interface_exists
foreach ($billets as $cle => $billet) {
  $billets[$cle]['titre'] = htmlspecialchars($billet['titre']);
  $billets[$cle]['contenu'] = nl2br(htmlspecialchars($billet['contenu']));
}

include_once('vue/blog/index.php');

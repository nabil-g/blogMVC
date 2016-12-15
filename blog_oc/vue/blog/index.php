<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mon blog</title>
  </head>
  <body>
    <h1>My awesome blog !</h1>
    <p>Last messages :</p>
    <?php
    foreach ($billets as $billet) {
      echo '<div class="news"><h3>' . $billet['titre'] . '</h3><p>' . $billet['contenu'] . '<br><em><a href="commentaires.php?billet='. $billet['id'] .'">Commentaires</a></em></p></div>';
    }
     ?>
  </body>
</html>

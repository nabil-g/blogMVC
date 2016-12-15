<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mon blog</title>
    <!-- Bien penser à mettre le chemin depuis la où est généré la page finale -->
    <link rel="stylesheet" href="vue/blog/style.css">
  </head>
  <body>
    <header class="fonce">
      <a class="mainLink" href="#"><h3><span class="fonce beige">MON</span> BLOG</h3></a>
      <nav class="mainbar">
        <ul>
          <li><a href="#">Accueil</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Login</a></li>
        </ul>
      </nav>
    </header>

    <section class="ban">
      <h2>Un pack de &lt;br /&gt; s'il vous plaît !</h2>
    </section>

    <section class="content">

      <section class="articles">
        <h2 class="fonce beige maintitle">Derniers articles du blog</h2>
        <?php
        foreach ($billets as $billet) {
          echo '<div class="news"><h2 class="articleTitle">' . $billet['titre'] . '</h2><p class="beige">' . $billet['date_creation_fr'] . '</p><p>' . $billet['contenu'] . '<br><a  class="fonce beige" href="#">Lire la suite</a></p></div>';
        }
         ?>
      </section>

      <section class="cat">
        <div class="categories fonce beige">
          <h3>
            Catégories
          </h3>
          <ul>
            <li><a href="#">Catégorie 1</a></li>
            <li><a href="#">Catégorie 2</a></li>
            <li><a href="#">Catégorie 3</a></li>
            <li><a href="#">Catégorie 4</a></li>
          </ul>
        </div>
      </section>


   </section>
   <footer class="fonce beige">

     <p>
       Site réalisé par moi-même !
     </p>

   </footer>
  </body>
</html>

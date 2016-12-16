<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mon blog</title>
    <!-- Bien penser à mettre le chemin depuis la où est généré la page finale (donc depuis le répertoire du controleur global)-->
    <link rel="stylesheet" href="vue/blog/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

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
          echo '<div class="news"><h2 class="articleTitle">' . $billet['titre'] . '</h2><p class="beige">' . $billet['date_creation_fr'] . '</p><p>' . $billet['contenu'] . '</p><a  class="fonce beige" href="#">Lire la suite</a></div>';
        }
         ?>
      </section>

      <section class="cat">
        <div class="categories fonce beige" id="my-sticky-element">
          <h3 id="catTitle">
            Catégories
          </h3>
          <hr>
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
   <script type="text/javascript">
     var controller = new ScrollMagic.Controller();

     new ScrollMagic.Scene({
             duration: 1000,    // la scène va durer sur une distance de défilement de 1000px (dans la limite de la taille de son parent)
             offset: 200        // cette scène commence après avoir fait défiler **px
         })
         .setPin("#my-sticky-element") // accroche l'élément pour la durée de la scène
         .addTo(controller); // attribue la scène au contrôleur
   </script>
  </body>
</html>

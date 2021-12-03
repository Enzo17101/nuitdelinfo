<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sauveteurs du dunkerquois</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/nuitdelinfo/DefiPrincipal/css/dropdown.css">
    <link rel="stylesheet" href="/nuitdelinfo/DefiPrincipal/css/color1.css">
    <link rel="stylesheet" href="/nuitdelinfo/DefiPrincipal/css/style.css">
  </head>
  <body>
    <div class="parallax"></div>
    <div class="caption">
        <img src="/nuitdelinfo/DefiPrincipal/data/Banniere.jpg" alt="Port de Dunkerque">
    </div>
    <div class="parallax"></div>
    <header>
      <nav>
        <div class="dropdown">
         <button class="dropbtn">Sauveteurs</button>
         <div class="dropdown-content">
           <a href="/nuitdelinfo/DefiPrincipal/Sauveteurs/TabHonneur.php">Tableau d'honneur</a>
           <a href="/nuitdelinfo/DefiPrincipal/Sauveteurs/qui.php">Qui étaient-ils ?</a>
           <a href="/nuitdelinfo/DefiPrincipal/Sauveteurs/que.php">Que faisaient-ils ?</a>
           <a href="#">Paroles de</a>
           <a href="#">Gratifications</a>
           <a href="#">Sauveteurs ailleurs</a>
         </div>
        </div>
        <div class="dropdown">
         <button class="dropbtn">Sauvetage</button>
         <div class="dropdown-content">
            <a href="#">Techniques</a>
              <div>
                <a href="#">Sauvetage des personnes</a>
                <a href="#">Va et vient</a>
              </div>
            <a href="#">Matériels</a>
              <div>
                <a href="#">Ligne Brunel</a>
                <a href="#">Ligne Torres</a>
                <a href="#">Gaffe Legrand</a>
                <a href="#">Canon porte amarre</a>
                <a href="#">Fusil porte-Amarre</a>
                <a href="#">Flèche Delvigne</a>
                <a href="#">Sauveteur Ceinture 1860</a>
              </div>
            <a href="#">Moyens Maritimes</a>
            <div>
              <a href="#">Les canots dunkerquois</a>
              <a href="#">canots-fort mardyckois</a>
              <a href="#">Les canots gravelinois</a>
              <a href="#">Canot Malo-les-bains</a>
              <a href="#">Pilotage les moyens maritimes</a>
              <a href="#">Remorqueurs Dunkerquois</a>
            </div>
         </div>
        </div>
        <div class="dropdown">
         <button class="dropbtn">Port</button>
         <div class="dropdown-content">
          <a href="#">Services</a>
          <a href="#">Douanes</a>
            <a href="#">Lamanage</a>
            <a href="#">Pilotage</a>
            <a href="#">Ponts-et-Chaussées</a>
              <a href="#">Phares-et-Balises</a>
              <a href="#">Marégraphe</a>
            <a href="#">Remorquage</a>
          <a href="#">Stations</a>
            <a href="#">Dunkerque</a>
            <a href="#">Gravelines</a>
            <a href="#">Fort-Mardyck</a>
            <a href="#">Malo-les-bains</a>
            <a href="#">Bray-Dunes</a>
            <a href="#">Sauveteurs-ailleurs</a>
         </div>
         </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Historique</button>
          <div class="dropdown-content">
            <a href="#">18ème siècle</a>
            <a href="#">19ème siècle</a>
            <a href="#">20ème siècle</a>
            <a href="#">21ème siècle</a>
            <a href="#">Sorties en mer</a>
         </div>
        </div>
        <div class="dropdown">
         <button class="dropbtn">Complément</button>
         <div class="dropdown-content">
           <a href="#">Art et sauvetages</a>
           <a href="#">Bibliographie</a>
           <a href="#">Décorations et récompenses</a>
           <a href="#">Description des bateaux</a>
           <a href="#">Galerie photo</a>
           <a href="#">Fortunes de mer</a>
           <a href="#">Estaminet</a>
         </div>
        </div>
      </nav>
    </header>

    <div class="parallax"></div>

    <?php
    var_dump($_SERVER);
    if ($_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'] == 'https://les-roseaux.dev/nuitdelinfo/DefiPrincipal/index.php' OR $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'] == 'https://les-roseaux.dev/nuitdelinfo/DefiPrincipal/') {
      include '/var/www/html/nuitdelinfo/DefiPrincipal/php/main.php';
    }?>

    <div class="parallax"></div>

    <footer>
      <div class="leftFooter">
        <div class="leftUpFooter">
          <div class="contact">
            <p id="titleFooter">Contact:</p>
            <p id="email">sauveteurdudunkerquois@gmail.com</p>
            <a href="https://www.facebook.com/groups/938396409644949" class="fa fa-facebook"></a>
            <a href="https://twitter.com/boutelierphili1" class="fa fa-twitter"></a>
          </div>
          <div class="partenaires">
            <p id="titleFooter">Partenaires:</p>
            <a href="https://www.snsm.org/"><img src="data/logo_SNSM.svg" alt=""></a>
            <a href="http://www.les-corsaires-dunkerquois.com/"><img src="data/corsaires_dunkerquois_logo.png" alt=""></a>
          </div>
          <form action="" method="get" class="newsletter_form">
            <p class="newsletter_title">S'abonner à la newsletter du site</p>
            <div class="newsletter">
              <div class="coordonnees">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" required>
                <label for="mail">E-mail :</label>
                <input type="text" name="mail" id="mail" required>
              </div>
              <input type="submit" value="S'abonner !">
            </div>
          </form>
            
          </div>
        </div>
        <div>
          <span>Livre d'or - Plan du Site</span>
        </div>
      </div>
      <div class="news">
      </div>
    </footer>


<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
  </body>
</html>

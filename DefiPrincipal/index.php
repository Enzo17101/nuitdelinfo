<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sauveteurs du dunkerquois</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/nuitdelinfo/DefiPrincipal/css/dropdown.css">
    <link rel="stylesheet" href="/nuitdelinfo/DefiPrincipal/css/color1.css">
    <link rel="stylesheet" href="/nuitdelinfo/DefiPrincipal/css/style.css">
    <link rel="stylesheet" href="/nuitdelinfo/DefiPrincipal/css/footer.css">
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
           <a href="Sauveteurs/TabHonneur.php">Tableau d'honneur</a>
           <a href="#">Qui étaient-ils ?</a>
           <a href="#">Que faisaient-ils ?</a>
           <a href="#">Paroles de</a>
           <a href="#">Gratifications</a>
           <a href="#">Sauveteurs ailleurs</a>
         </div>
        </div>
        <div class="dropdown">
         <button class="dropbtn">Sauvetage</button>
         <div class="dropdown-content">
           <a href="#">Techniques</a>
           <ul class="niveau2">
            <li> <a href="#">Sauvetage des personnes</a> </li>
            <li> <a href="#">Va et vient</a> </li> </ul>
           <a href="#">Matériels</a>
           <ul class="niveau2">
            <li> <a href="#">Ligne Brunel</a> </li>
            <li><a href="#">Ligne Torres</a> </li>
            <li> <a href="#">Gaffe Legrand</a> </li>
            <li> <a href="#">Canon porte amarre</a> </li>
            <li> <a href="#">Fusil porte-Amarre</a> </li>
            <li> <a href="#">Flèche Delvigne</a> </li>
            <li> <a href="#">Sauveteur Ceinture 1860</a> </li> </ul>
           <a href="#">Moyens Maritimes</a>
           <div class="dropdown-content">
           <ul class="niveau2">
           <li> <a href="#">Les canots dunkerquois</a> </li>
           <li> <a href="#">canots-fort mardyckois</a> </li>
           <li> <a href="#">Les canots gravelinois</a> </li>
           <li> <a href="#">Canot Malo-les-bains</a> </li>
           <li> <a href="#">Pilotage les moyens maritimes</a> </li>
           <li> <a href="#">Remorqueurs Dunkerquois</a> </li> </ul>
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

    <?php include '/var/www/html/nuitdelinfo/DefiPrincipal/php/main.php' ?>

    <?php include '/var/www/html//nuitdelinfo/DefiPrincipal/php/footer.php' ?>



  </body>
</html>

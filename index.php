<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="./assets/css/styles.css">
  <title>Accueil</title>
</head>

<body>
  <div class="blackBack">
    <header>
      <!-- <p class="logo">MARS'AIR</p> -->
      <img src="./assets/layouts/logo-mars'air.png" class="logo-marsair" alt="logo mars'air">
      <nav class="navButton" onclick="navBar()">
        <ul>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </nav>
      <nav class="navigation">
        <ul>
          <li><a href="home">Accueil</a></li>
          <li><a href="map">Carte</a></li>
          <li><a href="about">A propos</a></li>
          <li><a href="contact">Contact</a></li>
          <li onclick="navBar(),showSignin()">Connexion</li>
        </ul>
      </nav>
    </header>
    <section class="homeSection">
      <!-- TEXT PRESENTATION -->
      <img src="./assets/images/mockup-map.png" class="mockup" alt="mockup-map">
      <div class="text">
        <img src="./assets/layouts/logo-mars'air.png" class="logo-marsair1" alt="logo mars'air">
        <p class="lorem">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
          Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme
          assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de 
        </p>
      </div>
    </section>
    <!-- BULBES -->
    <div>
      <div class="bulb1">
        <div>14</div>
        <div></div>
      </div>
      <div class="bulb2">
        <div>27</div>
        <div></div>
      </div>
    </div>
    <!-- CONNEXION -->
    <?php include "./assets/layouts/signin.html" ?>
    <!-- INSCRIPTION -->
    <?php include "./assets/layouts/signup.html" ?>
  </div>
  <script src="./javascript/index.js"></script>
</body>


</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
<title>Article</title>
  <link rel="stylesheet" href="./assets/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/4e5f136f21.js" crossorigin="anonymous"></script>
</head>
<body>
  <header class="site-header">
    <nav class="navigation navigation-top desktop-navigation">
      <ul>
        <li><a href="home.html">Accueil</a></li>
        <li><a href="#">Boutique</a></li>
        <li><a href="index.html" class="active">Blog</a></li>
        <li><a href="page.html">Contact</a></li>
      </ul>
    </nav>
    <nav class="navigation navigation-top mobile-navigation">
      <ul>
        <li class="mobile-menu"><i class="fa fa-bars fa-1x"></i>
          <ul class="sub-navigation">
            <li><a href="home.html">Accueil</a></li>
            <li><a href="#">Boutique</a></li>
            <li><a href="index.html" class="active">Blog</a></li>
            <li><a href="page.html">Contact</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div class="site-branding">
      <img src="./assets/images/logo-louvre.png" alt="Logo du site" >
    </div>
    <nav class="navigation navigation-aside">
      <ul>
        <li><a href="#"><i class="fas fa-search"></i></a></li>
        <li><a href="#"><i class="fas fa-user"></i></a></li>
        <li>
          <a href="#">
            <i class="fas fa-shopping-cart"></i>
            <span class="count cart-counter">0</span>
          </a>
        </li>
      </ul>
    </nav>
  </header>
  <main class="container site-content">
      <article class="entry single">
        <header class="entry-header">
          <section class="entry-metadata">
            <section class="entry-data">
              <h4 class="author"><a href="#">Ada Lovelace</a></h4>
              <h6 class="publish-date">29 juin 2020</h6>
              <h5 class="entry-category"><a href="#">Actualité</a></h5>
            </section>
            <h2 class="entry-title">
              <a href="single.html">Les visiteurs retrouvent La Joconde</a>
            </h2>
          </section>
          <img src="./assets/images/louvre-alicia-steels-unsplash.jpg" alt="Foule"
          class="featured-image">
        </header>
        <section class="entry-content">
          <p>
            Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deseru mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
            do eiusmod tempor incididunt…
          </p>

          <p>
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
            aut fugit, sed quia consequuntur magni dolores eos qui ratione
            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem i
            psum quia dolor sit amet, consectetur, adipisci velit, sed quia
            non numquam eius modi tempora incidunt ut labore et dolore magnam
            aliquam quaerat voluptatem.
          </p>

          <p>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
            quae ab illo inventore veritatis et quasi architecto beatae vitae
            dicta sunt explicabo.
          </p>

          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur.
          </p>
        </section>
        <footer class="entry-footer">
          <nav class="navigation pagination entry-pagination">
            <ul>
              <li><a href="#"><i class="fas fa-arrow-left"></i> 5 statues à voir absolument au Louvre</a></li>
              <li><a href="#">La Joconde victime de son succès <i class="fas fa-arrow-right"></i></a></li>
            </ul>
          </nav>
          <section class="comments">
            <h3 class="comments-title">Laisser un commentaire</h3>
            <form class="comment-form" action="index.html" method="post">
              <label for="name">Nom</label>
              <input type="text" name="name" required>
              <label for="email">E-mail</label>
              <input type="email" name="email" required>
              <label for="comment">Commentaire</label>
              <input type="textarea" rows="10" cols="80" name="comment" required>
              <input type="submit" name="submit" value="Envoyer">
            </form>
          </section>
        </footer>
      </article>
    <aside class="sidebar">
      <div class="widget">
        <h3 class="widget-title">Zone de widgets</h3>
        <p>Ajout dynamique des titres et contenus des widgets.</p>
      </div>
    </aside>
  </main>
  <footer class="site-footer container">
    <section class="widgets-sections">
      <div class="widgets-section widgets-section-1">
        <h4 class="widget-title">Zone de widgets 1</h4>
        <img src="./assets/images/logo-louvre.png" alt="Logo du site" >
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="widgets-section widgets-section-2">
        <h4 class="widget-title">Zone de widgets 2</h4>
        <img src="./assets/images/logo-louvre.png" alt="Logo du site" >
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="widgets-section widgets-section-3">
        <h4 class="widget-title">Zone de widgets 3</h4>
        <img src="./assets/images/logo-louvre.png" alt="Logo du site" >
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
      <div class="widgets-section widgets-section-4">
        <h4 class="widget-title">Zone de widgets 4</h4>
        <img src="./assets/images/logo-louvre.png" alt="Logo du site" >
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
    </section>
    <section class="footer-infos">
      <div class="navigation-secondary">
        <nav class="navigation navigation-bottom">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="index.html" class="active">Blog</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="social-medias">
        <nav class="navigation navigation-socials">
          <ul>
            <li><a href="http://twitter.com"></a></li>
            <li><a href="http://instagram.com"></a></li>
            <li><a href="http://facebook.com"></a></li>
            <li><a href="http://pinterest.com"></a></li>
            <li><a href="http://youtube.com"></a></li>
          </ul>
        </nav>
      </div>
    </section>
  </footer>
</body>
</html>

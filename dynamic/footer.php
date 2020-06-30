<footer class="site-footer container">
  <section class="widgets-sections">
    <!-- TODO COURS - Déclarer une zone de widgets et l'insérer dynamiquement -->
    <div class="widgets-section widgets-section-1" id="widgets-section-1">
      <div class="widget">
        <h4 class="widget-title widgettitle">Zone de widgets 1</h4>
        <img src="./assets/images/logo-louvre.png" alt="Logo du site" >
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
    </div>
    <!-- TODO Volontaire - Déclarer une zone de widgets et l'insérer dynamiquement ci-après -->
    <div class="widgets-section widgets-section-2" id="widgets-section-2">
      <div class="widget">
        <h4 class="widget-title widgettitle">Zone de widgets 2</h4>
        <img src="./assets/images/logo-louvre.png" alt="Logo du site" >
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
    </div>
    <!-- TODO En autonomie - Déclarer une zone de widgets et l'insérer dynamiquement ci-après -->
    <div class="widgets-section widgets-section-3" id="widgets-section-3">
      <div class="widget">
        <h4 class="widget-title widgettitle">Zone de widgets 3</h4>
        <img src="./assets/images/logo-louvre.png" alt="Logo du site" >
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
    </div>
    <!-- TODO A la maison - Déclarer une zone de widgets et l'insérer dynamiquement ci-après -->
    <div class="widgets-section widgets-section-4" id="widgets-section-4">
      <div class="widget">
        <h4 class="widget-title widgettitle">Zone de widgets 4</h4>
        <img src="./assets/images/logo-louvre.png" alt="Logo du site" >
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing,
          sed do eiusmod tempor incididunt.
        </p>
      </div>
    </div>
  </section>
  <section class="footer-infos">
    <!-- TODO En autonomie - Déclarer une zone de menu "Menu de pied de page"
    l'insérer dynamiquement ci-après -->
    <div class="navigation-secondary" id="navigation-secondary">
      <nav class="navigation navigation-bottom">
        <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'footer'
          )
        );
         ?>
      </nav>
    </div>
    <!-- TODO A la maison - Déclarer une zone de menu "réseaux sociaux" et
    l'insérer dynamiquement ci-après -->
    <div class="social-medias">
      <nav class="navigation navigation-socials" id="navigation-socials">
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
<!-- COURS - appel de fonction pour afficher le menu d'administration
à l'accueil du site et permettre la réactualisation automoatique au niveau du Customizer -->
<?php wp_footer(); ?>
</body>
</html>

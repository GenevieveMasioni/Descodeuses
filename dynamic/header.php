<!DOCTYPE html>
<!-- Documenttaion oficielle WordPress pour s'informer sur l'utilisation
des fonctions : https://developer.wordpress.org/reference/ -->

<!-- Le code dynamique WordPress consiste simplement à remplacer des données
écrites en dur dans le code par leur version dynamique grâce à des fonctions
WordPress prédéfinies. Ces fonctions sont chargées de faire les requêtes
nécessaires à la base de données pour récupérer l'information qui nous intéresse.
-->

<!-- language_attributes() : permet de récupérer les informations liées à la
langue du site WordPress utilisant notre thème.
Cette fonction écrit une chaîne de caractères. On y trouve par exemple :
'lang="fr-FR"'
 -->
<html <?php language_attributes(); ?>>
<head>
  <!-- bloginfo() : permet de récupérer des informations du site configurées par
  le propriétaire du site depuis le tableau de bord WP.
  La fonction reçoit en paramètre le nom de l'information que l'on veut afficher.
  Ici, 'charset' permet d'afficher le format d'encodage de la langue utilisée
  sur le site. Exemple : "UTF-8" -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <!-- toujours la fonction bloginfo() pour obtenir la description du site  -->
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <!-- toujours la fonction bloginfo() pour obtenir le nom de l'auteur/
  propriétaire du site  -->
  <meta name="author" content="<?php bloginfo('author'); ?>">
  <!-- toujours la fonction bloginfo() pour obtenir le nom de la page consultée -->
  <title><?php bloginfo('name'); ?></title>
  <!-- toujours la fonction bloginfo() pour obtenir le chemin du fichier style.css  -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <!-- Inclusion de Google Fonts pour pouvoir utiliser la police de caractère "Poppins" -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
  <!-- Inclusion de Font Awesome pour pouvoir utiliser des icons -->
  <script src="https://kit.fontawesome.com/4e5f136f21.js" crossorigin="anonymous"></script>
  <!-- wp_head() : permet à WordPress d'inclure ses propres informations d'en-tête.
  Dans la documentation, il est recommandé de faire cet appel de fonction
  avant de fermer la balise <head> -->
  <?php wp_head(); ?>
  <style media="screen">
  .page-header {
    background-image: url("<?php bloginfo('template_url'); ?>/assets/images/louvre-amy-leigh-barnard-unsplash.jpg");
  }

  @font-face {
    font-family: "FontAwesome";
    font-weight: normal;
    font-style : normal;
    src : url("<?php bloginfo('template_url'); ?>/assets/fonts/fontawesome/webfonts/fa-brands-400.woff2") format("woff2");
  }
  </style>
</head>
<!-- COURS - appel de fonction pour l'affichage correcte (mise en forme)
du menu d'administration à l'accueil du site -->
<body <?php body_class(); ?>>
  <header class="site-header">
    <!-- COURS - Configurer une zone de menu et l'insérer dynamiquement -->
    <nav class="navigation navigation-top desktop-navigation">
      <?php
      // inclusion de la zone de menu principal (clé "primary")
      // wp_nav_menu() : crée une balise <ul> avec les liens vers les éléments
      // d'un menu; dans notre cas, les élements du menu que l'utilisateur de
      // notre thème aura choisi d'afficher à l'emplacement "menu principal".
      wp_nav_menu(
        array(
          'theme_location'  => 'primary'
        )
      );
       ?>
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
      <!-- TODO En autonomie - Afficher un logo personnalisé si existant, sinon afficher le nom du site
      Quand on clique sur le nom, redirection vers la page d'accueil du site.
      aide :
      - has_custom_logo() : tester si un logo personnalisé a été configuré
      - the_custom_logo() : récupérer le logo personnalisé
      - bloginfo() : récupérer l'url du site (pour redirection) et le nom du site
        > Quels arguments faut-il passer pour avoir ces informations ?
      -->
      <a href="index.html"><img src="./assets/images/logo-louvre.png" alt="Logo du site"></a>
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

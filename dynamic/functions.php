<?php

// On crée une fonction qui regroupera tous les appels à des fonctions WP
// prédéfinies qui ont pour but de configurer les fonctionnnalités prises
// en charge par notre thème - toutes nos zones de menu seront déclarées ici
function descodeuses_setup() {
  // On enregistre une nouvelle zone de menu avec la fonction
  // register_nav_menus()
  register_nav_menus(
    array(
      // on définit la clé de notre menu qui servira d'identifiant pour pouvoir
      // l'afficher sur le site
      'primary' => 'Menu principal',
      'secondary' => 'Menu secondaire',
      'footer' => 'Menu de pied de page',
      'social' => 'Menu des réseaux sociaux'
    )
  );

  // TODO En autonomie - Activer la fonctionnalité WP permettant de prendre
  // en charge un logo personnalisé.
  // indice : add_theme_support
  // 1. Que fait cette fonction ?
  //
  // 2. Quel argument faut-il passer ? (section 'Parameters')
  //
  // 3. Faire l'appel de fonction ci-après (ne passer que le premier argument) :

}

// WordPress étant un gros CMS, il est nécessaire de configurer beaucoup de
// paramètres pour que tout fonctionne correctement (tableau de bord,
// plugins, annuaire de sthèmes, notre propre thème, etc.)
// IMPORTANT : par sécurité, il faut éviter d'appeler nos propres fonctions
// sans utiliser add_action car on ne sait pas à quel niveau de configuration en
// est WordPress !
// add_action permet de spécifier à WP d'executer/ d'appeler automatiquement
// une fonction (nom passé en deuxième paramètre) seulement après avoir exécuté
// une autre fonction (nom passé en premier paramètre).
// ci-dessous, il faut lire : "après avoir exécuté la fonction after_setup_theme,
// exécuter la fonction descodeuses_setup"
// De cette façon, il est certain que WP a terminé ses propres configurations
// avant de prendre en charge les nôtres. On évite donc les bugs ! :)
add_action('after_setup_theme', 'descodeuses_setup');

function descodeuses_init_widgets() {
  // TODO COURS - Enregistrer une zone de widget N°1

  // TODO En autonomie - Enregister les zones de widgets N°2 et N°3

  // TODO A la maison - Enregister les zones de widgets N°4 et barre latérale
}

// Exécution de notre fonction immédiatement après l'exécution de widgets_init
// (fonction WP prédéfinie lui servant à initialiser les widgets par défaut
// avant d'enregistrer les nôtres)
// doc : https://developer.wordpress.org/reference/hooks/widgets_init/
add_action('widgets_init', 'descodeuses_init_widgets');

 ?>

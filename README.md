![Logo de l'association Descodeuses](https://descodeuses.org/img/logo-descodeuses.701b1e3c.png)

# Descodeuses

Thème WordPress développé dans le cadre de la formation WordPress pour
l'association [Descodeuses](https://descodeuses.org/ "Site de l'association").

# Contenus des dossiers

- "maquettes" contient les maquettes graphiques du thème développé.
- "static" contient le code statique du thème (HTML, CSS, JS).
- "dynamic" contient le code dynamique du thème (PHP), utilisable sur WordPress.

# Où mettre mon dossier "dynamic" en local ?

Comme nous développons en local, le dossier "dynamic", correspondant à notre thème WP, est à placer dans : `<dossier-d-installation-WordPress-local>/wp-content/themes/dynamic`.

Pour éditer le code du thème, ouvrir le dossier `dynamic` dans votre éditeur de code favori (Atom, par exemple) et coder ! Vous verrez immédiatement les changements sur votre site WordPress local.

# Récapitulatif des modèles à développer dans "dynamic"
Pour plus d'informations sur les modèles de page possibles et leur utilité, se référer à la [documentation officielle](https://developer.wordpress.org/themes/basics/template-files/#common-wordpress-template-files).

- [x] Modèle de page d’accueil statique (1) : `front-page.php`
- [x] Modèle des articles (blog - liste des articles) : `index.php`
- [x] Modèle d’un article : `single.php`
- [x] Modèle des commentaires (2) : `comments.php`
- [x] Modèle de page (3) : `page.php`
- [x] Partie de modèle d’en-tête : `header.php`
- [x] Partie de modèle de pied de page : `footer.php`
- [x] Partie de modèle de barre latérale : `sidebar.php`

(1) La page d'accueil du site WP sera mise en forme selon la structure définie
dans `front-page.php`. La page d'accueil affichera cette mise en forme indépendamment des réglages dans *Tableau de bord > Réglages > Lecture*.

Toutefois, il faut configurer dans *Tableau de bord > Réglages > Lecture* la page d'accueil statique et sélectionner la page 'Blog' comme page des articles. Autrement, la page 'Blog' n'affichera pas la liste des articles !

(2) Liste des commentaires et formulaire d'ajout d'un commentaire.

(3) Modèle utilisé par WP pour afficher toute page du site qui n'est pas la page 'Blog', la page d'un article (`single.php`) ou la page d'accueil forcée (`front-page.php`).

### + les fichiers suivants :
- [x] `style.css`
- [x] `functions.php`
- [x] `customizer.php`
- [x] `screenshot.png`
- [x] `readme.txt`

# Pour aller plus loin

### D'autres modèles à développer :
- [ ] Modèle de page pour les résultats de recherche : `search.php`
- [ ] Modèle pour le formulaire de recherche : `searchform.php`
- [ ] Modèle de page d'erreur : `404.php`
- [ ] Modèle de page d’archive : `archive.php`
- [ ] Prise en compte de WooCommerce :
  - [ ] lier l'icône panier dans `header.php` à WooCommerce
    - ne l'afficher que si WooCommerce est installé sur le site
    - mettre à jour le nombre affiché selon le nombre d'articles dans le panier WooCommerce
  - [ ] modèle de page d'un produit : `single-product.php` dans un dossier `/woocommerce` en vous inspirant de `page.php`

Aide pour WooCommerce :
- Voir [Documentation officielle de WooCommerce](https://docs.woocommerce.com/documentation/plugins/woocommerce/woocommerce-codex/theming/)
- Liste des [fonctions officielles WooCommerce](https://docs.woocommerce.com/wc-apidocs/package-WooCommerce.Functions.html)

### Rendre le thème "prêt à traduire"
Vous avez certainement vu les fonctions `__()` et `__e()` entourer du texte dans les extraits de code trouvés sur Internet... Ces fonctions servent à rendre un thème "prêt à traduire" par vous-même ou d'autres développeurs.

Pour cela, nous créons un dossier `languages` qui contiendra les fichiers de traduction des chaînes de caractères de notre thème dans différentes langues.

Par exemple, dans `index.php` :
- au lieu d'écrire `<a href="<?php the_permalink(); ?>">Lire la suite</a>` en dur (chaîne de caractères non traduisible)
- nous écrirons : `<a href="<?php the_permalink(); ?>">__('Lire la suite', 'descodeuses')</a>`
- ou encore : `<a href="<?php the_permalink(); ?>">__e('Lire la suite', 'descodeuses')</a>` si on fait appel à `echo` pour afficher la chaîne sur le navigateur (lire l'article recommandé ci-dessous pour en savoir plus)

**NB** Avec `descodeuses` le nom du dossier du thème (renommer `dynamic` par `descodeuses`). WordPress ira ainsi chercher lui-même le fichier de traduction nécessaire dans le dossier `languages` pour traduire la chaîne `Lire la suite` dans la langue choisie par les utilisateurs de notre thème dans leurs réglages WordPress !

Je vous invite à lire l'article suivant (en Anglais) pour en apprendre davantage sur la traduction de thème et comment l'implémenter :
"[How to Localize a WordPress Theme and Make it Translation Ready](https://premium.wpmudev.org/blog/how-to-localize-a-wordpress-theme-and-make-it-translation-ready/)"

### Respect des bonnes pratiques de développement

#### Eviter d'écrire du CSS dans du HTML

En terme de qualité de code, on déconseille d'écrire du CSS dans du HTML.
Nous l'avons pourtant fait plusieurs fois. Pourquoi ? Parce que cette solution est la plus rapide !

Je vous encourage maintenant à trouver, en vous aidant d'Internet et des forums techniques tels que le [WordPress Forum](https://wordpress.org/support/forum/wp-advanced/) ou [StackOverflow](https://stackoverflow.com/), la **bonne manière** de faire des modifications de style (en lien avec les paramètres de notre Customizer) pour garder un code propre. :)

#### Inclure correctement les fichiers de style CSS dans notre thème

Pour inclure notre fichier `style.css` nous avons ajouté une balise `<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">` dans `header.php` mais est-ce recommandé par WordPress ?

Suspens... La réponse est non ! Quelle est la bonne façon de faire ?
Passer par `functions.php` !

Aide :
- Documentation officielle : [Including CSS & JavaScript](https://developer.wordpress.org/themes/basics/including-css-javascript/)
- Article de blog : [How to Properly Include CSS and JS in your WordPress Themes and Plugins](https://rudrastyh.com/wordpress/include-css-and-javascript.html)

Faire de même pour les lignes de code suivantes (toujours dans `header.php`) :

```
<!-- Inclusion de Google Fonts pour pouvoir utiliser la police de caractère "Poppins" -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
<!-- Inclusion d'une feuille de style pour pouvoir utiliser la police de caractère FontAwesome -->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Inclusion de Font Awesome pour pouvoir utiliser des icons -->
<script src="https://kit.fontawesome.com/4e5f136f21.js" crossorigin="anonymous"></script>

```

# Ressources

Les ressources suivantes ont été utilisées/ sont nécessaires pour développer le thème de A à Z :
- Icons : [Font Awesome](https://fontawesome.com/cheatsheet/free/)
- Images : [Unsplash](https://unsplash.com/)
- Police de caractère : [Google Fonts](https://fonts.google.com/specimen/Poppins?sidebar.open&selection.family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300)

# Documentation WordPress

Consulter la documentation officielle de WordPress pour développeurs :
- [guide du développement de thème](https://developer.wordpress.org/themes/)
- [référence des fonctions WordPress prédéfinies](https://developer.wordpress.org/reference/)

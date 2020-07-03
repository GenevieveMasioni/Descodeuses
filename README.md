![Logo de l'association Descodeuses](https://descodeuses.org/img/logo-descodeuses.701b1e3c.png)

# Descodeuses

Thème WordPress développé dans le cadre de la formation WordPress pour
l'association [Descodeuses](https://descodeuses.org/ "Site de l'association").

# Contenus des dossiers

- "maquettes" contient les maquettes graphiques du thème développé.
- "static" contient le code statique du thème (HTML, CSS, JS).
- "dynamic" contient le code dynamique du thème (PHP), utilisable sur WordPress.

# Où mettre mon dossier "dynamic" en local ?

Comme nous développons en local, le dossier "dynamic", correspondant à notre thème WP,
est à placer dans : `<dossier-d-installation-WordPress-local>/wp-content/themes/dynamic`.

Pour éditer le code du thème, ouvrir le dossier `dynamic` dans votre éditeur de
code favori (Atom, par exemple) et codez ! Vous verrez immédiatement les changements
sur votre site WordPress local.

# Récapitulatif des modèles à développer dans "dynamic"
Pour plus d'informations sur les modèles de page possibles et leur utilité, se référer à la [documentation officielle](https://developer.wordpress.org/themes/basics/template-files/#common-wordpress-template-files).

- [ ] Modèle de page d’accueil statique (1) : `front-page.php`
- [x] Modèle des articles (blog - liste des articles) : `index.php`
- [x] Modèle d’un article : `single.php`
- [x] Modèle des commentaires (2) : `comments.php`
- [x] Modèle de page (3) : `page.php`
- [ ] Partie de modèle d’en-tête : `header.php`
- [x] Partie de modèle de pied de page : `footer.php`
- [x] Partie de modèle de barre latérale : `sidebar.php`

(1) La page d'accueil du site WP sera mise en forme selon la structure définie
dans `front-page.php`. La page d'accueil affichera cette mise en forme indépendamment des réglages dans *Tableau de bord > Réglages > Lecture*.

(2) Liste des commentaires et formulaire d'ajout d'un commentaire
(3) Modèle utilisé par WP pour afficher toute page su site qui n'est pas la page 'Blog', la page d'un article (`single.php`) ou la page d'accueil forcée (`front-page.php`).

### + les fichiers suivants :
- [x] `style.css`
- [x] `functions.php`
- [ ] `customizer.php`
- [x] `screenshot.png`
- [x] `readme.txt`

### Pour aller plus loin, d'autres modèles à développer :
- [ ] Modèle de page d'erreur : `404.php`
- [ ] Modèle de page pour `search.php`
- [ ] Modèle pour le formulaire de recherche : `searchform.php`
- [ ] Modèle de page d’archive : `archive.php`

# Ressources

Les ressources suivantes ont été utilisées/ sont nécessaires pour développer le thème de A à Z :
- Icons : [Font Awesome](https://fontawesome.com/cheatsheet/free/)
- Images : [Unsplash](https://unsplash.com/)
- Police de caractère : [Google Fonts](https://fonts.google.com/specimen/Poppins?sidebar.open&selection.family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300)

# Documentation WordPress

Consulter la documentation officielle de WordPress pour développeurs :
- [guide du développement de thème](https://developer.wordpress.org/themes/)
- [référence des fonctions WordPress prédéfinies](https://developer.wordpress.org/reference/)

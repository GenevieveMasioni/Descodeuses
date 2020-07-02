<?php

function descodeuses_customize_register($wp_customize) {
  // ajoute une nouvelle section au Customizer
  // attention : la section n'apparaît pas si elle ne contient
  // pas de paramètres/ options de personnalisation
  $wp_customize->add_section(
    'banner',
    array(
      'title' => 'Bannière',
      'description'   => 'Description de la section'
    )
  );

  $wp_customize->add_setting(
    'banner_image',
    array(
      'default' => get_template_directory() . '/assets/images/louvre-amy-leigh-barnard-unsplash.jpg',
      'type'  => 'theme_mod' // theme modification
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_control(
      $wp_customize,
      'banner_image',
      array(
        'label'   => 'Image de fond',
        'section' => 'banner',
        'settings'  => 'banner_image'
      )
    )
  );
}

add_action('customize_register', 'descodeuses_customize_register');

 ?>

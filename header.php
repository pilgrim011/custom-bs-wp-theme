<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js jquery-loading lt-ie9 lt-ie8 lt-ie7"> <![endif]-->

<!--[if IE 7]>         <html class="no-js jquery-loading lt-ie9 lt-ie8"> <![endif]-->

<!--[if IE 8]>         <html class="no-js jquery-loading lt-ie9"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js jquery-loading"> <!--<![endif]-->
    <html <?php language_attributes(); ?> class="no-js">
        <head>
            <meta charset="<?php bloginfo("charset"); ?>">
            <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
            <meta name="viewport" content="width=device-width">
            <meta name = "format-detection" content = "telephone=no">
            <link rel="profile" href="http://gmpg.org/xfn/11">
            <link rel="pingback" href="<?php bloginfo("pingback_url"); ?>">
            
            <!--[if lt IE 9]>
            <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
            <![endif]-->
            <?php wp_head(); ?>
        </head>
        <body <?php body_class(); ?>>


<nav class="navbar navbar-expand-md navbar-light text-right">
      
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
      wp_nav_menu([
        "menu"            => "top",
        "theme_location"  => "top",
        "container"       => "div",
        "container_id"    => "bs4navbar",
        "container_class" => "collapse navbar-collapse",
        "menu_id"         => false,
        "menu_class"      => "navbar-nav mr-auto",
        "depth"           => 2,
        "fallback_cb"     => "bs4navwalker::fallback",
        "walker"          => new bs4navwalker()
      ]);
      ?>
    </nav>

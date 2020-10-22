<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <?php
    wp_enqueue_style("style", get_stylesheet_uri());
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>


<div class="main-container">

<div class="flex-container">


<a href="<?php print get_home_url(); ?>">
<header>
<img alt="Banner image" src="http://212.90.90.130/wordpress/wp-content/uploads/2020/10/banner2.png">
<h1 class="headertitle"><?php bloginfo("name");?></h1>
</header>
</a>

<main>

<a class="togglemenu" id="menutoglaus" onclick="toggleMenu()">
<article id="togglemenu">
Valikko
</article>
</a>

<nav id="menubox">

<div class="searchbox" title="Hae sivustolta">
<div class="search">
<?php get_search_form(); ?>
</div>
</div>

<hr>

<h2>Valikko:</h2>
<?php  
    wp_nav_menu(
        array(
            "theme-location" => "main-menu"
        )
    );
?>

<hr>

<ul class="loginreg">


<li class="link">
<?php wp_loginout(); ?>
</li>

<?php wp_register(); ?>


</ul>

</nav>
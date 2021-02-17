<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package site
 */
$page_id   = get_the_ID();
$full_path = get_template_directory_uri();

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'site' ); ?></a>
        <header id="masthead" class="site-header  <?php echo $_class_menu ?>">
            <div class="container-fluid text-center">
                <div class="row">
                    <div class="col-md-3">
                        <h1 class="logo"><img src="<?=$full_path?>/assets/img/logo.jpg"
                                alt="<?php bloginfo( 'name' ); ?>" class="img-fluid"></h1>
                    </div>
                    <div class="col-md-6">
                        <ul class="menu-firts">
                            <li><a href="">AGENDAR EXAMES</a></li>
                            <li><a href="">RESULTADO EXAMES</a></li>
                            <li><a href="">ORÇAMENTOS</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <div class="rede-social-header text-center">
                            <ul class="m-0 p-0">
                                <?=get_rede_social()?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-second">
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <button type="button" class="menu-toggle navbar-toggle" aria-controls="menu" aria-expanded="false"
                        data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php wp_nav_menu( array( 'menu_id' => 'primary-menu' ) ); ?>
                </nav>
            </div>
        </header><!-- #masthead -->
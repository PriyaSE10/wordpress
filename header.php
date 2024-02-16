<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main_style.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">


    <?php wp_head(); echo "" ?>

    <script>
    // conditionizr.com
    // configure environment tests
    conditionizr.config({
        assets: '<?php echo get_template_directory_uri(); ?>',
        tests: {}
    });
    </script>

</head>

<body <?php body_class(); ?>>
    <header class="container" >
      <section class="navsection">
      <div class="logo">
         <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo"> -->
         <h1>Shop Center</h1>
      </div>
         <nav>
            <!-- <div class="main-menu">
                <?php wp_nav_menu(array(
                    "theme_location" => "header_menu",
                    "class_menu" => "page_item"
                ))?>
            </div> -->
            <ul>
                 <li><a href="<?php echo site_url('/home'); ?>"> Home </a></li>
                 <li><a href="<?php echo site_url('/about'); ?>"> About</a></li>
                 <li><a href="<?php echo site_url('/contact'); ?>"> Contact</a></li>
                 <li><a href="<?php echo site_url('/services'); ?>"> Services</a></li>
            </ul>
        </nav>  
        </section> 
     <div class="main-contents">
        <div class="left">
            <h3>Shopping Site</h3>
            <h2>Hi, This is wordpres</h2>
            <h5>Web developer and Youtuber</h5>
            <a href="" class="btns1">Click Me</a>
            <a href="" class="btns2">Cancle Now</a>
        </div>
        <div class="right">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shopping.png" alt="logo" />
        </div>
        </div>   
      
</header>

   
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?php echo $cfg['page_title'] . ' | ' . $cfg['page_description']; ?></title>

  
  <link rel="stylesheet" href="css/app.css">
  
<!-- 
  <script src="js/vendor/custom.modernizr.js"></script>
 -->
</head>
<body data-current-page="<?php echo $cfg['current_page_slug']; ?>">

<div id="st-container" class="st-container">

    <div class="st-pusher">

    <?php require("partials/offcanvasnav.php"); ?>

    <div class="st-content">
      <div class="st-content-inner">


        <header class="heronav-container sub-header header-<?php echo $cfg['current_page_slug']; ?>">

          <?php require("partials/mainnav.php"); ?>

          
            <div class="hero row">

             <!--  <div class="vert-center">

                <div class="hero-header">
                  <h1 class="subheader-fittext massive"><?php echo $cfg['hero_title']; ?></h1>
                </div>

                <div class="hero-subheader">
                  <p class="lead">
                    <?php echo $cfg['hero_subtitle']; ?>
                  </p>
                </div>

              </div> -->

                <div class="large-8 columns">
                  <img src="img/storyprimerguide.jpg" alt="">
                </div>

            </div>
          
            
        </header>
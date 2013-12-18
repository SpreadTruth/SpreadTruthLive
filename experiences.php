<?php

require('partials/config.php');

//meta info
// $cfg['page_title'] = "";
// $cfg['page_description'] = "";

$cfg['current_page_slug'] = "experiences";
$cfg['hero_title'] = "ON MISSION";
$cfg['hero_subtitle'] = "Experience the <strong>Great Commission</strong> in New York City<p><a class='btn btn-outline' href='#experiencesvideo'>Watch Video</a></p>";

require('partials/subheader.php');

?>

    <?php
      require('partials/experiences-nav.php');
    ?>
  
    <section class="main-section">
      <div class="row">
        <div class="stats">
          <h2>1993</h2>
          <p>The NYC Missions trip started in 1999 with a group of 25 college students.</p>
        </div>

        <div class="stats">
          <h2>5,500</h2>
          <p>People have attended the NYC Mission trip since it&rsquo;s inception in 1999.</p>
        </div>

        <div class="stats">
          <h2>54k</h2>
          <p>Over 54,000 people have been impacted in NYC with the gospel of Jesus Christ.</p>
        </div>


      </div>
    </section>

    <hr>

    <section class="main-section">
      <div class="row">

        <div class="columns large-5 small-center">

          <div class="section-header">
            <h2>Share God&rsquo;s Story</h2>
            <h3>In New York City</h3>
          </div>

          <p>Join us in New York City this Summer to share God's story! Choose from <strong>1 of 4 Ministry Tracks</strong> and share God's love with New Yorkers! New York City is one of the most diverse cities in the world. Join us <strong>July 20-26, 2014</strong> to shine God's light into a city that needs Him desperately.</p>
          <p>
            <a href="#" class="btn btn-dark btn-small">Sign Up Now</a>
            <a href="#" class="btn btn-dark btn-small">Learn More</a>
          </p>

        </div>

        <div class="large-7 columns text-center" id="experiencesvideo">
          <img src="img/experiencesvideo.jpg" alt="">
        </div>

        <!-- <div class="columns large-10 small-centered">
          <p class="lead">Join us in New York City this Summer to share God's story! Choose from 1 of 4 Ministry Tracks and share God's love with New Yorkers! New York City is one of the most diverse cities in the world. Join us July 20-26, 2014 to shine God's light into a city that needs Him desperately.</p>
        </div> -->

      </div>
    </section>


    <hr>

    <section class="main-section">
      <div class="row">
        <div class="large-12 columns">
          <div class="section-header text-center">
            <h2>Shop Now</h2>
            <h3>Check out all of our products online</h3>
          </div>
        </div>      
        <div class="columns large-12">
          <img src="img/bgorganized.jpg" alt="" />
        </div>

      </div>
    </section>

<?php include('partials/footer.php'); ?>

<?php

require('partials/config.php');


// $cfg['page_title'] = "";
// $cfg['page_description'] = "";
$cfg['current_page_slug'] = "training";
$cfg['hero_title'] = "TRAINING";
$cfg['hero_subtitle'] = "Equipping saints to fufill the <strong>Great Commission</strong>";

require('partials/featureheader.php');

?>

    <section class="main-section">
      <div class="row">
        
        <div class="columns large-12">
          <div class="section-header text-center">
            <h2>Training Materials</h2>
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, hic, ut accusamus repellat perferendis sit earum reprehenderit culpa laborum architecto voluptatem blanditiis harum.</h3>
          </div>
        </div>

            <div class="media training">
              <div class="img"><a href="thestory.php"><img src="img/storyprimerguide.jpg" alt=""></a></div>
              <div class="bd">
                <span class="badge badge-large">STEP 1</span>
                <h6>Story Primer Guide</h6>
                <p>
                  A five to seven session curriculum that will help you learn to craft and share the metanarrative.
                </p>
              </div>
            </div>

            <div class="media training">
              <div class="img"><a href="thestory.php"><img src="img/storyguide.jpg" alt=""></a></div>
              <div class="bd">
                <span class="badge badge-large">STEP 2</span>
                <h6>The Story Guide</h6>
                <p>
                  A ten session curriculum that takes an in-depth look at how The Story fits into the Bible.
                </p>
              </div>
            </div>

      </div>
    </section>


    <section class="main-section colored">

      <div class="row">
        
        <div class="columns large-8">
          <img src="img/whyvideo.jpg" alt="none"/>
        </div>

        <div class="columns large-4">
          <div class="section-header small-center">
            <h2>Training Events</h2>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, ab voluptatem corrupti placeat rem quod id animi illo officiis inventore accusantium reiciendis maiores minima reprehenderit porro nam fuga velit doloribus?
          </p>
          <a href="#" class="btn btn-dark">Learn More</a>

        </div>

      </div><!-- end row -->
    </section>

      <section class="main-section">

      <div class="row">
        
        <div class="columns large-10 large-centered">
          <div class="section-header text-center">
            <h2>Upcoming Events</h2>
            <p class="lead">Take a look at our list of upcoming Story Training events and sign-up to attend the conferences! We would love to see you there!</p>
          </div>

          <table class="collapse events-table table-hover">
            <thead>
              <tr>
                <th>Location</th>
                <th>Date</th>
                <th>Cost</th>
                <th>Speaker</th>
                <th>Register</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Normal, IL</td>
                <td>11/20/2013</td>
                <td>$65</td>
                <td>Jerry McCorkle</td>
                <td><a href="#" class="btn btn-small btn-dark">Sign Up</a></td>
              </tr>
              <tr>
                <td>Raleigh, NC</td>
                <td>12/25/2013</td>
                <td>$65</td>
                <td>Jake Bennett</td>
                <td><a href="#" class="btn btn-small btn-dark">Sign Up</a></td>
              </tr>
              <tr>
                <td>Miami, FL</td>
                <td>05/15/2014</td>
                <td>$65</td>
                <td>Craig Stimpert</td>
                <td><a href="#" class="btn btn-small btn-dark">Sign Up</a></td>
              </tr>
            </tbody>
          </table>
          <div class="text-center">
            <a href="#" class="btn btn-large">SEE ALL EVENTS</a>
          </div>
          
        </div>

      </div><!-- end row -->
    </section>


<?php include('partials/footer.php'); ?>

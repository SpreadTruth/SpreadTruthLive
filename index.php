<?php

require('partials/config.php');


// $cfg['page_title'] = "";
// $cfg['page_description'] = "";
$cfg['current_page'] = "home";

require('partials/header.php');

?>

    <section id="main-selection" class="main-section">
        <div class="row">

          <div class="section-header text-center">
            <h2>What We Do</h2>
            <h3>Select your path young padawan</h3>
          </div>

          <!-- <div class="columns small-4">
            <div class="main-selection-item">
              <div class="main-selection-image"><img src="img/resources.jpg" alt=""></div>
              <div class="main-selection-title"></div>
            </div>
          </div>

          <div class="columns small-4">
            <div class="main-selection-item">
              <div class="main-selection-image"><img src="img/training.jpg" alt=""></div>
              <div class="main-selection-title"></div>
            </div>
          </div>

          <div class="columns small-4">
            <div class="main-selection-item">
              <div class="main-selection-image"><img src="img/experiences.jpg" alt=""></div>
              <div class="main-selection-title"></div>
            </div>
          </div> -->

          <div class="media resources">
            <div class="img"><a href="#"><img src="img/resources2.jpg" alt=""></a></div>
            <div class="bd">
              <h6>RESOURCES</h6>
              <p>
                An evangilism tool that enables believers to share the gospel in light of the big picture.
              </p>
            </div>
          </div>

          <div class="media resources">
            <div class="img"><a href="#"><img src="img/training2.jpg" alt=""></a></div>
            <div class="bd">
              <h6>TRAINING</h6>
              <p>
                An evangilism tool that enables believers to share the gospel in light of the big picture.
              </p>
            </div>
          </div>

          <div class="media resources">
            <div class="img"><a href="#"><img src="img/experiences2.jpg" alt=""></a></div>
            <div class="bd">
              <h6>EXPERIENCES</h6>
              <p>
                An evangilism tool that enables believers to share the gospel in light of the big picture.
              </p>
            </div>
          </div>

        </div><!-- end row -->
    </section>

    <section id="why-we-do" class="colored main-section">
        <div class="row">
          
          <div class="columns large-8">
            <img src="img/whywedo.jpg" alt="none"/>
          </div>

          <div class="columns large-4">
            <div class="section-header small-center">
              <h2>Why We Do</h2>
              <h3>Working is passion, not punishment.</h3>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, ab voluptatem corrupti placeat rem quod id animi illo officiis inventore accusantium reiciendis maiores minima reprehenderit porro nam fuga velit doloribus?
            </p>

          </div>

        </div><!-- end row -->
    </section>

    <section id="why-we-do" class="people-saying main-section">
        <div class="row">

          <div class="columns large-12 text-center section-header">
            <h2>What People are Saying</h2>
            <h3>and what we think of it</h3>
          </div>
          
          <div class="columns large-10 large-centered">

            <div class="media attribution">

              <a href="http://twitter.com/stubbornella" class="img">
                <img src="img/davidplatt.jpg" alt="me" />
              </a>

              <div class="bd pull-quote-large">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, accusantium, placeat quas laudantium ex iure rem odit unde necessitatibus aliquam. Maxime, officiis, minus omnis delectus voluptates voluptatem molestiae rerum recusandae!
                </p>
                <cite>David Platt</cite>
              </div>

            </div>

          </div>

          <hr class="hide-for-small">

          <div class="columns large-6">

            <div class="media attribution">

              <a href="http://twitter.com/stubbornella" class="img">
                <img src="img/avatar2.png" alt="me" />
              </a>

              <div class="bd">
                <p>
                  &ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, repellendus iure adipisci voluptatem enim maiores qui laborum itaque quasi expedita et saepe officiis.&rdquo;
                </p>
                <cite>Josh Jeffrey</cite>
              </div>

            </div>

          </div>

          <div class="columns large-6">
            <div class="media attribution">
              <a href="http://twitter.com/stubbornella" class="img">
                <img src="img/avatar3.png" alt="me" />
              </a>
              <div class="bd">
                <p>
                  &ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, sint voluptate accusamus dolore esse impedit repellat optio!&rdquo;
                </p>
                <cite>Jake Bennett</cite>
              </div>
            </div>
          </div>

        </div><!-- end row -->
    </section>

<?php include('partials/footer.php'); ?>

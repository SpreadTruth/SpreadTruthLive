    <?php

      $resources_small = (isset($resources_small)? true : false);
      // $resources_small = false;
    ?>

    <section id="main-selection" class="main-section resource-selection">
      <div class="row">

        <?php 
          if ($resources_small)   {echo '<div class="columns large-6 small-centered resources-small">';}
          else                    {echo '<div class="columns large-12 small-centered">';}
        ?>
        <!-- <div class="columns large-12 small-centered"> -->
            <div class="media resources">
              <div class="img"><a href="thestory.php"><img src="img/story2-resources.jpg" alt=""></a></div>
              <div class="bd">
                <h6>The Story</h6>
                <p>
                  An evangilism tool that enables believers to share the gospel in light of the big picture.
                </p>
              </div>
            </div>

            <div class="media resources">
              <div class="img"><a href="itmtl.php"><img src="img/itmtl2-resources.jpg" alt=""></a></div>
              <div class="bd">
                <h6>Is There More to Life</h6>
                <p>
                  An evangilism tool that enables believers to share the gospel in light of the big picture.
                </p>
              </div>
            </div>

            <div class="media resources">
              <div class="img"><a href="lawki.php"><img src="img/lawki2-resources.jpg" alt=""></a></div>
              <div class="bd">
                <h6>Life As We Know It</h6>
                <p>
                  An evangilism tool that enables believers to share the gospel in light of the big picture.
                </p>
              </div>
            </div>
        </div>

      </div>
    </section>
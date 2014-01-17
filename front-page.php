<?php get_header(); ?>
	<section id="landing-intro">
      	<div class="container">
          <div class="row">
            <div class="col-sm-2"></div>
        		<div class="col-sm-4">
        			<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/logo_landing_main.png">
              <img style="max-width:150px;height:auto;" class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/logo_landing_main_text.png">
            </div>
            <div class="col-sm-6">
              <div class="col-sm-12" id="conference-info">
                <h2>Be a part of open geo.</h2>
                <div id="conference-times">
                  <p class="larger">Main Conference: <span class="date"><?php echo get_theme_mod( 'aod_button_text' ); ?></span></p>
                  <p>Registration Begins: <span class="date">Another Date</span></p>
                  <p>Submissions Due: <span class="date">One More Date</span></p>
                </div>
                <button type="button" class="btn btn-lg btn-alert">Register</button>
                <button type="button" class="btn btn-lg btn-primary">Submit Proposals</button>
              </div>
            </div>
          </div> <!-- /row -->
      	</div> <!-- /container -->
      </section> <!-- /landing-intro -->

      <section id="sponsors" class="">
        <div class="container">
          <div id="featured-sponsors">
            <p>Presented By:</p>
            <img src="http://placehold.it/130x50">              
            <img src="http://placehold.it/130x50">
          </div>
          
          <div id="sponsor-slider" class="hidden-xs carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="sponsor-list text-center">
                  <img src="http://placehold.it/130x60">
                  <img src="http://placehold.it/130x60">
                  <img src="http://placehold.it/130x60">
                  <img src="http://placehold.it/130x60">
                  <img src="http://placehold.it/130x60">
                  <img src="http://placehold.it/130x60">
                  <img src="http://placehold.it/130x60">
                  <img src="http://placehold.it/130x60">
                  <img src="http://placehold.it/130x60">
                  <img src="http://placehold.it/130x60">
                </div>
              </div>
              <div class="item">
                <div class="sponsor-list text-center">
                  <img src="http://placehold.it/130x60">
                  <img src="http://placehold.it/130x60">
                  <img src="http://placehold.it/130x60">
                  <img src="http://placehold.it/130x60">
                  <img src="http://placehold.it/130x60">
                  <img src="http://placehold.it/130x60">
                  <img src="http://placehold.it/130x60">
                  <img src="http://placehold.it/130x60">
                  <img src="http://placehold.it/130x60">
                  <img src="http://placehold.it/130x60">
                </div>
              </div>
            </div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#sponsor-slider" data-slide-to="0" class="active"></li>
              <li data-target="#sponsor-slider" data-slide-to="1"></li>
            </ol>
          </div>
              
            
        </div>
        </div>
      </section>
      <section id="featured-speakers" style="display:none;">
        <div class="container">
          <div class="row">
            <div class="col-xs-6 speaker">
              <div class="col-sm-4"><div class="speaker-photo-container"><img class="img-responsive" src="http://placehold.it/200x200"></div></div>
              <div class="col-sm-8">
                <h2>Speaker Name</h2>
                <h3>Company</h3>
                <p>Noldor Rivendell olog-hai nazgul dolor auctor. Variags dragon miruvor Elrond Forodwaith sapien fermentum Frodo Baggins dragon the world is indeed full of peril and in it there are many dark places. All there is much that is fair. And though in all lands, love is now mingled with grief, it still grows, perhaps.</p>
              </div>
            </div>
            <div class="col-xs-6 speaker">
              <div class="col-sm-4"><div class="speaker-photo-container"><img class="img-responsive" src="http://placehold.it/200x200"></div></div>
              <div class="col-sm-8">
                <h2>Speaker Name</h2>
                <h3>Company</h3>
                <p>You shall be the fellowship of the ring. Great! Where are we going? interdum nec Minhiriath Bree you have my sword... and my axe... and my bow Morgomir orci tortor. Afternoon tea Easterlings uruk-hai Grey Havens ac aliquam Gandalf Cirdan Noldor congue viverra ent Annatar Bree all's well that ends better et congue.</p>
              </div>
            </div>
            <div class="col-xs-6 speaker">
              <div class="col-sm-4"><div class="speaker-photo-container"><img class="img-responsive" src="http://placehold.it/200x200"></div></div>
              <div class="col-sm-8">
                <h2>Speaker Name</h2>
                <h3>Company</h3>
                <p>Eagles undefined rhoncus metus nisi where there's life there's hope, and need of vittles warg Silmaril metus a semper. Cirdan Samwise Gamgee Elrond adipiscing tempor felis Morgomir Isildur Lindon Grey Havens imperdiet ultricies sem Merry Rhudaur Isildur afternoon tea supper vitae augue mi.</p>
              </div>
            </div>
            <div class="col-xs-6 speaker">
              <div class="col-sm-4"><div class="speaker-photo-container"><img class="img-responsive" src="http://placehold.it/200x200"></div></div>
              <div class="col-sm-8">
                <h2>Speaker Name</h2>
                <h3>Company</h3>
                <p>Dinner Tolkien they come in pints? I'm getting one Middle-earth a a. Galadriel black gate supper orci enim Rivendell balrog Mount Doom nec luctus. Isildur nazgul et metus Gondor Easterlings vel rhoncus. Easterlings warg Easterlings eagles tellus aliquam nazgul Numenoreans even the smallest person can change the course of the future Tom Bombadil.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="recent">
        <div class="container">
          <div class="row">
            <div class="col-sm-8" id="landing-posts">
              <?php
              $args = array(
                'posts_per_page' => 3,
                'category_name' => 'update'
              );
              $query = new WP_Query( $args );
                if ( $query->have_posts() ) : ?>
                  <!-- the loop -->
                  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="post">
                      <div class="col-sm-12 landing-post-meta">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <h2>By FOSS4G UPDATES <span class="date"><?php the_date(); ?></span></h2>
                      </div>
                      <div class="col-sm-11 col-sm-offset-1 landing-post-content">
                        <?php the_content(); ?>
                      </div>
                    </div>
                  <?php endwhile; ?>
                  <!-- end of the loop -->
                  <?php wp_reset_postdata(); ?>
              <?php else:  ?>
                <p><?php _e( 'Sorry, there are no recent updates.' ); ?></p>
              <?php endif; ?>
            </div>
            <div class="col-sm-4" id="landing-side">
              <aside>
                <ul>
                  <li><a href="#">Sidebar Link</a></li>
                  <li><a href="#">Sidebar Link</a></li>
                  <li><a href="#">Sidebar Link</a></li>
                  <li><a href="#">Sidebar Link</a></li>
                  <li><a href="#">Sidebar Link</a></li>
                </ul>
              </aside>
            </div>
          </div>
        </div>
      </section>
      <section id="map"></section>
<?php get_footer(); ?>
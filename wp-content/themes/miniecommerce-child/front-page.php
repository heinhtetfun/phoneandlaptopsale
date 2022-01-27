<?php get_header(); ?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal">99% Discount Christmax Sale</h1>
    <p class="lead font-weight-normal">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    <a class="btn btn-outline-secondary" href="#">Learn more</a>
  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>
  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>
<div class="album py-5 bg-light">
	
	<!-- Event Sale Lists -->
    <div class="container">
      <h4>Christmas Sale</h4>
      <div class="row">
        <?php
        
         $homepagePhones = new WP_Query([
           'post_type' => 'sale',
           'posts_per_page' => 3
         ]);

         while($homepagePhones->have_posts()):
          $homepagePhones->the_post();
        
        ?>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <?php
            
             if(has_post_thumbnail()):
            
            ?>
              <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">

            <?php endif; ?>

            <div class="card-body">
              <p class="card-text"><?php the_excerpt(); ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
	
  <!-- Latest Smart Phone Lists -->
    <div class="container">
      <h4>Latest Smart Phones</h4>
      <div class="row">
        <?php
        
         $homepagePhones = new WP_Query([
           'post_type' => 'smartphone',
           'posts_per_page' => 6
         ]);

         while($homepagePhones->have_posts()):
          $homepagePhones->the_post();
        
        ?>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <?php
            
             if(has_post_thumbnail()):
            
            ?>
              <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">

            <?php endif; ?>

            <div class="card-body">
              <p class="card-text"><?php the_excerpt(); ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>

    <!-- Latest PCs Lists -->
    <div class="container">
      <h4>Latest Smart Phones</h4>
      <div class="row">
        <?php
        
         $homepagePhones = new WP_Query([
           'post_type' => 'pc',
           'posts_per_page' => 6
         ]);

         while($homepagePhones->have_posts()):
          $homepagePhones->the_post();
        
        ?>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <?php
            
             if(has_post_thumbnail()):
            
            ?>
              <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">

            <?php endif; ?>

            <div class="card-body">
              <p class="card-text"><?php the_excerpt(); ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">Another headline</h2>
      <p class="lead">And an even wittier subheading.</p>
    </div>
    <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
  </div>
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">Another headline</h2>
      <p class="lead">And an even wittier subheading.</p>
    </div>
    <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
  </div>
</div>

<?php get_footer(); ?>

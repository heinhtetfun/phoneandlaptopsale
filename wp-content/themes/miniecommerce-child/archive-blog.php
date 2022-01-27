<?php get_header(); ?>
<div class="container">
    <div class="row">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <div class="card-body">
                <p class="card-text"><?php the_title(); ?></p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary"> <a href="<?php the_permalink(); ?>">See More </a> </button>    
                    </div>
                    <small class="text-muted"><?php echo get_post_meta($post->ID, 'Price', true); ?></small>
                </div>
                </div>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </div>
</div>
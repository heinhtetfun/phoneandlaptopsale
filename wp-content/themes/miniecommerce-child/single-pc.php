<?php get_header(); ?>
<div class="detail container">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): ?>
        <?php the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <?php if(has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <?php the_content(); ?>
            <h4><?php echo get_post_meta($post->ID, 'Price', true); ?></h4>
            <h5>Release Date : <?php the_field('release_date'); ?></h5>
            <h5>Available Stocks : <?php the_field('number_of_stocks'); ?></h5>
        <?php endwhile; endif; ?>
	<?php comments_template(); ?>
</div>
<?php get_footer(); ?>
<?php get_header(); ?>
<div class="col-md-12 p-3 p-md-5">
      <div class="p-3 p-md-5 rounded shadow">

          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
          <div class="blog-post p-3">
            <h2 class="blog-post-title">
                <?php the_title(); ?>
            </h2>

            <?php the_content(); ?>
          </div><!-- /.blog-post -->
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Page Found'); ?></p>
        <?php endif; ?>

        </div><!-- /.blog-main -->
<?php get_footer(); ?>
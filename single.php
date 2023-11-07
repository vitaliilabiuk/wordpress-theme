<?php get_header(); ?>
       <div class="main col-12 p-3 p-md-5">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <?php get_template_part('content', get_post_format()); ?>
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>
</div>
        </div><!-- /.blog-main -->

    <?php get_footer(); ?>
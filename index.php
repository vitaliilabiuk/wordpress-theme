<?php get_header(''); ?>

 <div class="col-lg-12 mx-auto p-3 text-center">
<header>
<h1><?php bloginfo('name'); ?></h1>
<h2><?php bloginfo('description'); ?></h2>
  </header>
  </div>
  <?php include('banner.php'); ?>
  <?php include('box.php'); ?>
     <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
              <?php get_template_part('content', get_post_format()); ?>
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Posts Found'); ?></p>
        <?php endif; ?>



 <?php get_footer(''); ?>
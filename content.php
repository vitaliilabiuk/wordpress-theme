<div class="blog-post p-3 p-md-5 shadow rounded">
  <h2 class="blog-post-title text-center"><strong>
    <?php if(is_single()) : ?>
      <?php the_title(); ?>
    <?php else : ?>
      <a class="text-white  bg-dark p-3" href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    <?php endif; ?>
    </strong>
  </h2><hr/>
   <h3><?php the_category( ' ' ); ?></h3>
<p class="p-1 blog-post-meta">
    <?php the_time('F j, Y g:i a'); ?>
     by <a class="text-dark" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
       <?php the_author(); ?>
     </a>
  </p>


  <?php if(has_post_thumbnail()) : ?>
    <div class="post-thumb">
      <?php the_post_thumbnail(); ?>
    </div>
  <?php endif; ?>

  <?php if(is_single()) : ?>
    <?php the_content(); ?>
  <?php else : ?>
    <?php the_excerpt(); ?>
  <?php endif; ?>
  <p><marquee>
        <?php if( has_tag() ) : ?>
    <?php echo get_the_tag_list(''); // Display tags as links ?>
<?php endif; ?>
</marquee></p>

  <?php if(is_single()) : ?>
    <?php comments_template(); ?>
  <?php endif; ?>

</div><!-- /.blog-post -->
<div class="p-3"></div>
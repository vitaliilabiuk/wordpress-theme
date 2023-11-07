<section class="banner p-1">
<div class="col-md-12">
          <div class="p-3 p-md-5 shadow rounded">
          <?php if(is_active_sidebar('banner')) : ?>
            <?php dynamic_sidebar('banner'); ?>
          <?php endif; ?>
      </div>
   
</section>
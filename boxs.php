<section class="boxes p-3">
    <div class="row text-center">
      <div class="col-6 col-md-3">
          <div class="p-3 shadow rounded">
          <?php if(is_active_sidebar('box4')) : ?>
            <?php dynamic_sidebar('box4'); ?>
          <?php endif; ?>
      </div>
      </div>

      <div class="col-6 col-md-3">
          <div class="p-3 shadow rounded">
          <?php if(is_active_sidebar('box5')) : ?>
            <?php dynamic_sidebar('box5'); ?>
          <?php endif; ?>
      </div>
      </div>

      <div class="col-6 col-md-3">
          <div class="p-3 shadow rounded">
          <?php if(is_active_sidebar('box6')) : ?>
            <?php dynamic_sidebar('box6'); ?>
          <?php endif; ?>
      </div>
      </div>
      
      
      <div class="col-6 col-md-3">
          <div class="p-3 shadow rounded">
          <?php if(is_active_sidebar('box7')) : ?>
            <?php dynamic_sidebar('box7'); ?>
          <?php endif; ?>
      </div>
      </div>
      
    </div>
</section>
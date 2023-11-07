<section class="boxes p-3">
    <div class="row text-center">
      <div class="col-md-4">
          <div class="p-3 p-md-5 shadow rounded bg-dark text-white">
          <?php if(is_active_sidebar('box1')) : ?>
            <?php dynamic_sidebar('box1'); ?>
          <?php endif; ?>
      </div>
      </div>

      <div class="col-md-4">
          <div class="p-3 p-md-5 shadow rounded">
          <?php if(is_active_sidebar('box2')) : ?>
            <?php dynamic_sidebar('box2'); ?>
          <?php endif; ?>
      </div>
      </div>

      <div class="col-md-4">
          <div class="p-3 p-md-5 shadow rounded bg-dark text-white">
          <?php if(is_active_sidebar('box3')) : ?>
            <?php dynamic_sidebar('box3'); ?>
          <?php endif; ?>
      </div>
      </div>
    </div>
</section>
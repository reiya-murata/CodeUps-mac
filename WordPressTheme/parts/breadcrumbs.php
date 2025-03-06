<section class="breadcrumbs l-breadcrumbs <?php echo is_404() ? 'l-page-404-top' : ''; ?>">
  <div class="breadcrumbs__inner inner">
    <div class="breadcrumbs__category page-category <?php echo is_404() ? 'page-category--404' : ''; ?>">
      <?php if (function_exists('bcn_display'))
      {
        bcn_display();
      }
      ?>
    </div>
  </div>
</section>
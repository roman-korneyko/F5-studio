<header>
    <div class="container-sage">
      <div class="header">
          <div class="header-logo">
            <?php (the_custom_logo( $blog_id )); ?>
          </div>
          <a id="hamburger-icon" href="#" title="Menu">
              <span class="line line-1"></span>
              <span class="line line-2"></span>
              <span class="line line-3"></span>
          </a>
          <nav class="header-nav-primary">
            <?php if(has_nav_menu('primary_navigation')): ?>
              <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

            <?php endif; ?>
          </nav>
    </div>
  </div>
</header>

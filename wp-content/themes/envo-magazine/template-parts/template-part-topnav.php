<!-- <?php if (has_nav_menu('top_menu_left') || has_nav_menu('top_menu_right')) : ?>
    <div class="top-menu" >
        <nav id="top-navigation" class="navbar navbar-inverse bg-dark">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-2-collapse">
                        <span class="sr-only"><?php esc_html_e('Toggle navigation', 'envo-magazine'); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-2-collapse">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'top_menu_left',
                        'depth' => 5,
                        'menu_class' => 'nav navbar-nav navbar-left',
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        'walker' => new wp_bootstrap_navwalker(),
                    ));

                    wp_nav_menu(array(
                        'theme_location' => 'top_menu_right',
                        'depth' => 5,
                        'menu_class' => 'nav navbar-nav navbar-right',
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        'walker' => new wp_bootstrap_navwalker(),
                    ));
                    ?>
                </div>
            </div>
        </nav>
    </div>
<?php endif; ?> -->
<div class="topMenuFixed">
  <div class="menu-top collapsed">
    <ul>
      <li class="arrow"><a href="/politica/" title="Politica">Politica</a></li>
      <li><a href="/esteri/" title="Esteri">Esteri</a></li>
      <li class="arrow"><a href="/economia/" title="Economia">Economia</a></li>
      <li><a href="/cronache/" title="Cronache">Cronache</a></li>
      <li class="arrow"><a href="/culturaspettacoli/" title="Culture">Culture</a></li>
      <li><a href="/costume/" title="Costume">Costume</a></li>
      <li class="arrow"><a href="/entertainment/" title="Spettacoli">Spettacoli</a></li>
      <li class="arrow"><a href="/medicina/" title="Salute">Salute</a></li>
      <li><a href="/green/" title="Green">Green</a></li>
      <li class="arrow"><a href="/sociale/" title="Sociale">Sociale</a></li>
      <li><a href="/mediatech/" title="Mediatech">Mediatech</a></li>
      <li class="arrow"><a href="/motori/" title="Motori">Motori</a></li>
      <li><a href="/sport/" title="Sport">Sport</a></li>
      <li class="arrow"><a href="/milano/" title="Milano">Milano</a></li>
      <li><a href="/roma/" title="Roma">Roma</a></li>
    </ul>
  </div>
  <ul class="tools-dx">
    <li class="canHide"><a class="ico" href="https://www.facebook.com/affaritaliani/" target="_blank" rel="nofollow"><img src="/includes/v2018/img/ico-facebook.svg"></a></li>
    <li class="canHide"><a class="ico" href="https://twitter.com/affaritaliani" target="_blank" rel="nofollow"><img src="/includes/v2018/img/ico-twitter.svg"></a></li>
  </ul>
</div>

<div class="site-header container-fluid">
    <div class="container" >
        <div class="row" >
            <div class="site-heading <?php
            if (is_active_sidebar('envo-magazine-header-area')) {
                echo 'col-md-4';
            }
            ?>" >
                <div class="site-branding-logo">
                    <a href="<?php echo home_url(); ?>">">
                      <img src="/wordpress/wp-content/themes/envo-magazine/img/demo/ai-corporate.png">
                    </a>
                </div>
                <div class="site-branding-text">
                    <!-- <?php if (is_front_page()) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                    <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                    <?php endif; ?> -->

                    <!-- <?php
                    $description = get_bloginfo('description', 'display');
                    if ($description || is_customize_preview()) :
                        ?>
                        <p class="site-description">
                            <?php echo esc_html($description); ?>
                        </p>
                    <?php endif; ?> -->
                </div><!-- .site-branding-text -->
            </div>
            <?php if (is_active_sidebar('envo-magazine-header-area')) { ?>
                <div class="site-heading-sidebar col-md-8" >
                    <div id="content-header-section" class="text-right">
                        <?php
                        dynamic_sidebar('envo-magazine-header-area');
                        ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php do_action('envo_magazine_before_menu'); ?>
<div class="main-menu">
    <!-- <nav id="site-navigation" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <?php if (function_exists('max_mega_menu_is_enabled') && max_mega_menu_is_enabled('main_menu')) : ?>
                <?php elseif (has_nav_menu('main_menu')) : ?>
                <button id="main-menu-panel" class="open-panel visible-xs" data-panel="main-menu-panel">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                <?php endif; ?>
            </div>
            <?php
            if (is_front_page()) {
                $home_icon_class = 'home-icon front_page_on';
            } else {
                $home_icon_class = 'home-icon';
            }
            ?>
            <ul class="nav navbar-nav search-icon navbar-left hidden-xs">
                <li class="<?php echo esc_attr($home_icon_class); ?>">
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
            </ul>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main_menu',
                'depth' => 5,
                'container' => 'div',
                'container_class' => 'menu-container',
                'menu_class' => 'nav navbar-nav navbar-left',
                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                'walker' => new wp_bootstrap_navwalker(),
            ));
            ?>
            <ul class="nav navbar-nav search-icon navbar-right hidden-xs">
                <li class="top-search-icon">
                    <a href="#">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
                <div class="top-search-box">
                    <?php get_search_form(); ?>
                </div>
            </ul>
        </div>
        <?php do_action('envo_magazine_menu'); ?>
    </nav> -->
</div>
<?php do_action('envo_magazine_after_menu'); ?>

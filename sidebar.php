<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package palbisblog
 */

// Always show sidebar, despite having or not widgets
// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>

<aside id="secondary" class="widget-area">
  <div class="sidebar">
    <div class="container sidebar-sticky">
          <div class="sidebar-about">
            <?php if ( ! empty( get_bloginfo( 'name' ) ) ) : ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php endif; ?>
            <?php
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) :
              ?>
                <p class="lead site-description"><?php echo $description; ?></p>
            <?php endif; ?>
          </div>

					<?php
						wp_nav_menu(array(
							"theme_location" => "sidebar_menu",
							"container" => "nav",
							"container_class" => "sidebar-nav",
							"menu_class" => "sidebar-nav-items"
						));
					?>
          <!--
          <nav class="sidebar-nav">
            <a class="sidebar-nav-item{% if page.url == site.baseurl %} active{% endif %}" href="{{ site.baseurl }}">Home</a>

            {% comment %}
              The code below dynamically generates a sidebar nav of pages with
              `layout: page` in the front-matter. See readme for usage.
            {% endcomment %}

            {% assign pages_list = site.pages %}
            {% for node in pages_list %}
              {% if node.title != null %}
                {% if node.layout == "page" %}
                  <a class="sidebar-nav-item{% if page.url == node.url %} active{% endif %}" href="{{ node.url }}">{{ node.title }}</a>
                {% endif %}
              {% endif %}
            {% endfor %}

            <a class="sidebar-nav-item" href="{{ site.github.repo }}/archive/v{{ site.version }}.zip">Download</a>
            <a class="sidebar-nav-item" href="{{ site.github.repo }}">GitHub project</a>
            <span class="sidebar-nav-item">Currently v{{ site.version }}</span>
          </nav>

          <p>&copy; {{ site.time | date: '%Y' }}. All rights reserved.</p> -->
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
  </div>
</aside>

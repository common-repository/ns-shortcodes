<div class="wrap">

  <div id="icon-options-general" class="icon32"></div>
  <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

  <div id="poststuff">

    <div id="post-body" class="metabox-holder columns-2">

      <!-- main content -->
      <div id="post-body-content">

        <div class="meta-box-sortables ui-sortable">

          <div class="postbox">

            <h3><span><?php _e("Available Shortcodes", $this->plugin_slug); ?></span></h3>
            <div class="inside">
              <?php
                $shortcode_list = array(

                  // ns-site-title
                  array(
                    'shortcode' => 'ns-site-title',
                    'description' => __("Display site title", 'ns-shortcodes'),
                    ),
                  // ns-site-tagline
                  array(
                    'shortcode' => 'ns-site-tagline',
                    'description' => __("Display site tagline", 'ns-shortcodes'),
                    ),
                  // ns-site-url
                  array(
                    'shortcode' => 'ns-site-url',
                    'description' => __("Display site URL", 'ns-shortcodes'),
                    ),
                  // ns-home-url
                  array(
                    'shortcode' => 'ns-home-url',
                    'description' => __("Display home URL", 'ns-shortcodes'),
                    ),
                  // ns-current-year
                  array(
                    'shortcode' => 'ns-current-year',
                    'description' => __("Display current year", 'ns-shortcodes'),
                    ),
                  // ns-login-url
                  array(
                    'shortcode' => 'ns-login-url',
                    'description' => __("Display login URL", 'ns-shortcodes'),
                    ),
                  // ns-login-url redirect="current"
                  array(
                    'shortcode' => 'ns-login-url redirect="current"',
                    'description' => __("Display login URL with redirection to current page", 'ns-shortcodes'),
                    ),
                  // ns-login-url redirect="home"
                  array(
                    'shortcode' => 'ns-login-url redirect="home"',
                    'description' => __("Display login URL with redirection to home page", 'ns-shortcodes'),
                    ),
                  // ns-logout-url
                  array(
                    'shortcode' => 'ns-logout-url',
                    'description' => __("Display logout URL", 'ns-shortcodes'),
                    ),
                  // ns-logout-url redirect="current"
                  array(
                    'shortcode' => 'ns-logout-url redirect="current"',
                    'description' => __("Display logout URL with redirection to current page", 'ns-shortcodes'),
                    ),
                  // ns-logout-url redirect="home"
                  array(
                    'shortcode' => 'ns-logout-url redirect="home"',
                    'description' => __("Display logout URL with redirection to home page", 'ns-shortcodes'),
                    ),
                  // ns-registration-url
                  array(
                    'shortcode' => 'ns-registration-url',
                    'description' => __("Display registration URL", 'ns-shortcodes'),
                    ),
                  // ns-lost-password-url
                  array(
                    'shortcode' => 'ns-lost-password-url',
                    'description' => __("Display lost password URL", 'ns-shortcodes'),
                    ),
                  // ns-lost-password-url redirect="current"
                  array(
                    'shortcode' => 'ns-lost-password-url redirect="current"',
                    'description' => __("Display lost password URL with redirection to current page", 'ns-shortcodes'),
                    ),
                  // ns-lost-password-url redirect="home"
                  array(
                    'shortcode' => 'ns-lost-password-url redirect="home"',
                    'description' => __("Display lost password URL with redirection to home page", 'ns-shortcodes'),
                    ),
                  // ns-theme-url
                  array(
                    'shortcode' => 'ns-theme-url',
                    'description' => __("Display theme URL", 'ns-shortcodes'),
                    ),
                  // ns-theme-name
                  array(
                    'shortcode' => 'ns-theme-name',
                    'description' => __("Display theme name", 'ns-shortcodes'),
                    ),
                  // ns-theme-author-url
                  array(
                    'shortcode' => 'ns-theme-author-url',
                    'description' => __("Display theme author URL", 'ns-shortcodes'),
                    ),
                  // ns-theme-author-name
                  array(
                    'shortcode' => 'ns-theme-author-name',
                    'description' => __("Display theme author name", 'ns-shortcodes'),
                    ),
                  // ns-theme-version
                  array(
                    'shortcode' => 'ns-theme-version',
                    'description' => __("Display theme version", 'ns-shortcodes'),
                    ),

                  );
               ?>
               <?php if (!empty($shortcode_list)): ?>

                <table>
                  <tr>
                    <th>Shortcode</th>
                    <th></th>
                    <th>Description</th>
                  </tr>

                  <?php foreach ($shortcode_list as $key => $shortcode): ?>
                    <tr>
                      <td><code><strong><?php echo '['.$shortcode['shortcode'].']'; ?></strong></code></td>
                      <td>:</td>
                      <td><?php echo $shortcode['description']; ?></td>
                    </tr>
                  <?php endforeach ?>

                </table>


               <?php endif ?>

                <h2>
                    <?php _e("FAQ", $this->plugin_slug); ?>
                </h2>
                <h4>
                    <?php _e("How to enable shortcode support in Text Widget?", $this->plugin_slug); ?>
                </h4>
                <p class="description"><?php _e("Text Widget does not support shortcode by default. To enable shortcode in Text Widget, add following piece of code in your theme's functions.php file inside PHP tag.", $this->plugin_slug); ?></p>
                <pre><code>add_filter('widget_text', 'do_shortcode');</code></pre>
                <h2>
                    <?php _e("Example", $this->plugin_slug); ?>
                </h2>
                <p class="description"><?php _e("Example code to put in your template file.", $this->plugin_slug); ?></p>
                <pre><code>&lt;?php echo do_shortcode('Copyright &amp;copy; [ns-current-year] [ns-site-title] All rights reserved'); ?&gt;</code></pre>

            </div> <!-- .inside -->

          </div> <!-- .postbox -->

        </div> <!-- .meta-box-sortables .ui-sortable -->

      </div> <!-- post-body-content -->

      <!-- sidebar -->
      <div id="postbox-container-1" class="postbox-container">

      <?php require_once( ( plugin_dir_path(__FILE__) ) . 'inc/right.php'); ?>

      </div> <!-- #postbox-container-1 .postbox-container -->

    </div> <!-- #post-body .metabox-holder .columns-2 -->

    <br class="clear">
  </div> <!-- #poststuff -->

</div> <!-- .wrap -->

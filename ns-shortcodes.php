<?php
   /**
   * Plugin Name: NS Shortcodes
   * Plugin URI: http://nilambar.net
   * Description: Several shortcodes available for your theme
   * Version: 1.0.2
   * Author: Nilambar Sharma
   * Author URI: http://nilambar.net
   * License: GPLv2 or later
   * License URI: http://www.gnu.org/licenses/gpl-2.0.html
   */

   // If this file is called directly, abort.
   if (!defined('WPINC'))
      die;

   define('NS_SHORTCODES_NAME','NS Shortcodes');
   define('NS_SHORTCODES_SLUG','ns-shortcodes');

   class NS_Shortcodes  {
     protected $plugin_name = NS_SHORTCODES_NAME ;
     protected $plugin_slug = NS_SHORTCODES_SLUG ;

     private $hook_settings_page;

    /**
     * Constructor
     */
    function __construct(){

      $this->hook_settings_page = 'appearance_page_'. $this->plugin_slug;

      register_activation_hook( __FILE__, array( $this, 'activate' ) );
      register_deactivation_hook( __FILE__, array( $this, 'deactivate' ) );

      // add_action('admin_enqueue_scripts', array($this, 'register_admin_styles'));

      add_shortcode( 'ns-site-title' , array( $this, 'ns_site_title' ) );
      add_shortcode( 'ns-site-tagline' , array( $this, 'ns_site_tagline' ) );
      add_shortcode( 'ns-site-url' , array( $this, 'ns_site_url' ) );
      add_shortcode( 'ns-home-url' , array( $this, 'ns_home_url' ) );
      add_shortcode( 'ns-current-year' , array( $this, 'ns_current_year' ) );
      add_shortcode( 'ns-login-url' , array( $this, 'ns_login_url' ) );
      add_shortcode( 'ns-logout-url' , array( $this, 'ns_logout_url' ) );
      add_shortcode( 'ns-registration-url' , array( $this, 'ns_registration_url' ) );
      add_shortcode( 'ns-lost-password-url' , array( $this, 'ns_lost_password_url' ) );
      add_shortcode( 'ns-theme-url' , array( $this, 'ns_theme_url' ) );
      add_shortcode( 'ns-theme-name' , array( $this, 'ns_theme_name' ) );
      add_shortcode( 'ns-theme-author-url' , array( $this, 'ns_theme_author_url' ) );
      add_shortcode( 'ns-theme-author-name' , array( $this, 'ns_theme_author_name' ) );
      add_shortcode( 'ns-theme-version' , array( $this, 'ns_theme_version' ) );

      add_action('admin_menu', array( $this, 'ns_shortcodes_plugin_menu' ) );

      $plugin = plugin_basename(__FILE__);
      add_filter("plugin_action_links_$plugin", array($this, 'ns_shortcodes_add_settings_link'));

   }

   function activate(){
      //activation
   }

   function deactivate(){
      //deactivation
   }

   function ns_site_title(){
      return get_bloginfo('name');
   }
   function ns_site_tagline(){
      return get_bloginfo('description');
   }
   function ns_site_url(){
      return site_url();
   }
   function ns_home_url(){
      return home_url();
   }
   function ns_current_year(){
      return date('Y');
   }
   function ns_login_url($atts){
      extract( shortcode_atts( array(
         'redirect' => 'default'
         ), $atts ) );
      switch ($redirect) {
         case 'default':
         $output = wp_login_url();
         break;
         case 'current':
         $output = wp_login_url(get_permalink());
         break;
         case 'home':
         $output = wp_login_url(home_url());
         break;
      }
      return $output;
   }
   function ns_logout_url($atts){
      extract( shortcode_atts( array(
         'redirect' => 'default'
         ), $atts ) );
      switch ($redirect) {
         case 'default':
         $output = wp_logout_url();
         break;
         case 'current':
         $output = wp_logout_url(get_permalink());
         break;
         case 'home':
         $output = wp_logout_url(home_url());
         break;
      }
      return $output;
   }
   function ns_registration_url(){
      return wp_registration_url();
   }
   function ns_lost_password_url($atts){
      extract( shortcode_atts( array(
         'redirect' => 'default'
         ), $atts ) );
      switch ($redirect) {
         case 'default':
         $output = wp_lostpassword_url();
         break;
         case 'current':
         $output = wp_lostpassword_url(get_permalink());
         break;
         case 'home':
         $output = wp_lostpassword_url(home_url());
         break;
      }
      return $output;
   }
   function ns_theme_url(){
      $theme = wp_get_theme();
      return $theme->get( 'ThemeURI' );
   }
   function ns_theme_name(){
      $theme = wp_get_theme();
      return $theme->get( 'Name' );
   }
   function ns_theme_author_url(){
      $theme = wp_get_theme();
      return $theme->get( 'AuthorURI' );
   }
   function ns_theme_author_name(){
      $theme = wp_get_theme();
      return $theme->get( 'Author' );
   }
   function ns_theme_version(){
      $theme = wp_get_theme();
      return $theme->get( 'Version' );
   }

   function ns_shortcodes_plugin_menu()
   {
      add_theme_page( $this->plugin_name, $this->plugin_name, 'edit_theme_options', $this->plugin_slug,
         array($this, 'ns_shortcodes_admin_function'));
   }
   function ns_shortcodes_admin_function()
   {
      require_once( ( plugin_dir_path(__FILE__) ) . '/admin/admin.php');
   }
   public function ns_shortcodes_add_settings_link($links)
   {
       $settings_link = '<a href="themes.php?page='.$this->plugin_slug.'">' . __("Settings", $this->plugin_slug) . '</a>';
       array_push($links, $settings_link);
       return $links;
   }
   public function register_admin_styles($hook)
   {
       if ($hook != $this->hook_settings_page)
       {
           return;
       }
       wp_enqueue_style($this->plugin_slug.'-admin-styles', plugins_url($this->plugin_slug.'/admin/css/admin.css'));
   }


}//end class

/**
 * Create new instance
 */
$ns_shortcode = new NS_Shortcodes();

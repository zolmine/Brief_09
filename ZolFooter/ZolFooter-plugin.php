<?php

/**
 * @package Hfooter
 * @author zolmine
 */

/*
Plugin Name: Zolfooter Plugin
Plugin URI: https://github.com/Zolmine
Description: add simple footer to your page.
Version: 0.1
Author: amine
Author URI: https://github.com/zolmine
License: GPLv2 or later
Text Domain: Zolfooter
*/





defined('ABSPATH') or die('kill.');

class ZolfooterPLugin
{
    function __construct()
    {
        add_action('wp_footer', [$this, 'inject_content']);
        add_action('admin_menu', [$this, 'menu']);
    }


    // insert content into footer
    function inject_content()
    {
        $opt_website_name = get_option('zol_opt_website' , 'store');
        $opt_github = get_option('zol_opt_github' , 'Zolmine');
        $opt_desc = get_option('zol_opt_desc' , 'desc');




        $date = date("Y");

        echo "
      <footer style='display:flex;flex-direction: column;background:#f1ebeb;justify-content:baseline; align-items:center;padding:1rem 2rem;'>
      <div style='justify-content:baseline;width:100%;'> 
          <h1 style='color: #000000;'>$opt_website_name</h1>
          
      </div>
         <div style='font-weight: 400; font-family: monospace; font-size: 15px; display: flex; flex-direction: row; gap: 23px;'> 
              <a style='color:#000000;font-family:monospace;' href='https://github.com/$opt_github'>$opt_github</a>
              <div style='height:23px;'></div>
              <div style='color:#0a0606;font-family:monospace;'>Copyright &copy; $date $opt_website_name | All Rights Rerserved</div>
      </div>
        </footer>
    ";

    }



    function settings()
    {
        echo "<h2>" . __('ZolFooter Settings Config') . "</h2>";
        include_once('Zolfooter_settings.php');
    }

    function menu()
    {
        add_menu_page(
            'ZolFooter Config',
            'ZolFooter',
            'manage_options',
            'zol_config',
            [$this, 'settings'],
            'dashicons-welcome-view-site'
        );
    }
}

if (class_exists('ZolfooterPLugin')) {
    $zol = new ZolfooterPLugin();
}
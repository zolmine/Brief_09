<?php

/**
 * @package ZOLfooter
 * @author Zolmine
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
        $opt_website_name = get_option('sf_opt_wesite' , 'Zolmine');
        $opt_home_link  = get_option('sf_opt_text', 'home');
        $opt_contact = get_option('sf_opt_contact', 'footerArea');
        $opt_github = get_option('sf_opt_github' , 'Zolmine');
        $opt_desc = get_option('sf_opt_desc' , 'desc');




        $date = date("Y");

        echo "
      <footer style='display:flex;flex-direction: column;background:#1f1f1f;justify-content:baseline; align-items:center;padding:1rem 2rem;'>
      <div style='justify-content:baseline;width:100%;'> 
          <h1 style='color: azure;'>$opt_website_name</h1>
          <ul style='list-style: none; color: aliceblue; font-weight: 400; font-family: monospace; font-size: x-large;'>
              <li><a href='$opt_home_link'>Home</a></li>
              <li><a href='$opt_contact'>contact me</a></li>
          </ul>
      </div>
         <div style='font-weight: 400; font-family: monospace; font-size: 15px; display: flex; flex-direction: row; gap: 23px;'> 
              <a style='color:#ccc;font-family:monospace;' href='https://github.com/$opt_github'>$opt_github</a>
              <div style='height:23px;'></div>
              <div style='color:#ccc;font-family:monospace;'>Copyright &copy; $date $opt_website_name | All Rights Rerserved</div>
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
            'SF_config',
            [$this, 'settings'],
            'dashicons-buddicons-activity'
        );
    }
}

if (class_exists('ZolfooterPLugin')) {
    $Sf = new ZolfooterPLugin();
}
<?php   

  class MultiLanguageLoader
  {
      function initialize() {
          $ci =& get_instance();
          // load language helper
          $ci->load->helper('language');
          $siteLang = $ci->session->userdata('site_lang');
          if ($siteLang) {
              // difine all language files
              $ci->lang->load('header',$siteLang);
              $ci->lang->load('footer',$siteLang);
          } else {
              // default language files
              $ci->lang->load('header','english');
              $ci->lang->load('footer','english');
          }
      }
  }
  ?>
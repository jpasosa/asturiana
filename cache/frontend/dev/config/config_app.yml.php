<?php
// auto-generated by sfDefineEnvironmentConfigHandler
// date: 2010/10/04 09:47:03
sfConfig::add(array(
  'app_a_use_bundled_stylesheet' => true,
  'app_a_global_button_order' => array (
  0 => 'blog',
  1 => 'events',
  2 => 'media',
  3 => 'users',
  4 => 'reorganize',
),
  'app_a_i18n_switch' => false,
  'app_a_login_link' => false,
  'app_a_i18n_languages' => array (
  0 => 'es',
),
  'app_a_routes_register' => false,
  'app_a_default_on' => true,
  'app_a_pretty_english_dates' => true,
  'app_a_manage_candidate_group' => 'editor',
  'app_a_manage_sufficient_group' => 'admin',
  'app_a_edit_candidate_group' => 'editor',
  'app_a_edit_sufficient_group' => 'admin',
  'app_a_view_locked_sufficient_credentials' => 'view_locked',
  'app_a_max_page_levels' => 3,
  'app_a_addslot_button_style' => 'big',
  'app_a_history_button_style' => 'no-label big',
  'app_a_delete_button_style' => 'no-label',
  'app_a_slot_types' => array (
  'aBlog' => 'Blog Posts',
  'aBlogSingle' => 'Blog Post',
  'aEvent' => 'Events',
  'aEventSingle' => 'Event',
),
  'app_a_slot_variants' => array (
  'aButton' => 
  array (
    'normal' => 
    array (
      'label' => 'Normal',
    ),
    'useTitleAsButtonText' => 
    array (
      'label' => 'Text Over',
    ),
  ),
  'aSlideshow' => 
  array (
    'normal' => 
    array (
      'label' => 'Normal',
      'options' => 
      array (
        'interval' => 0,
        'title' => false,
        'arrows' => true,
      ),
    ),
    'compact' => 
    array (
      'label' => 'Compact',
      'options' => 
      array (
        'interval' => 0,
        'title' => true,
        'arrows' => true,
        'itemTemplate' => 'slideshowItemCompact',
      ),
    ),
    'autoplay' => 
    array (
      'label' => 'Auto Play',
      'options' => 
      array (
        'interval' => 4,
        'title' => true,
        'arrows' => false,
        'itemTemplate' => 'slideshowItemCompact',
      ),
    ),
  ),
),
  'app_a_allowed_slot_variants' => NULL,
  'app_a_home_as_tab' => true,
  'app_a_templates' => array (
  'default' => 'Productos y Servicios',
),
  'app_a_use_bundled_layout' => false,
  'app_a_engines' => array (
  '' => 'Template-Based',
),
  'app_aAdmin_web_dir' => '/apostrophePlugin',
  'app_aMedia_client_apikey' => 'dummy',
  'app_aMedia_apikeys' => array (
  0 => 'dummy',
),
  'app_aMedia_apipublic' => false,
  'app_aMedia_admin_credential' => 'media_admin',
  'app_aMedia_upload_credential' => 'media_upload',
  'app_aMedia_use_bundled_layout' => false,
  'app_aMedia_embed_codes' => true,
  'app_aToolkit_indexes' => array (
  0 => 'aPage',
  1 => 'aMediaItem',
),
  'app_sfSyncContent_content' => array (
  0 => 'web/uploads',
  1 => 'data/a_writable',
),
  'app_aimageconverter_path' => '/opt/local/bin',
));
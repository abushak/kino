<?php 


$options['sites'] = array (
  0 => 'dev.andrew.devshop.odnodumci.com',
);
$options['profiles'] = array (
  0 => 'minimal',
  1 => 'standard',
  2 => 'druppio_monopage_profile',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'entity' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/modules/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'Entity',
        'info' => 
        array (
          'name' => 'Entity',
          'description' => 'Provides expanded entity APIs, which will be moved to Drupal core one day.',
          'type' => 'module',
          'dependencies' => 
          array (
            0 => 'system (>=8.1.0)',
          ),
          'version' => '8.x-1.0-alpha4',
          'core' => '8.x',
          'project' => 'entity',
          'datestamp' => 1481194986,
        ),
        'schema_version' => 0,
        'version' => '8.x-1.0-alpha4',
      ),
      'block_place' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/block_place/block_place.module',
        'basename' => 'block_place.module',
        'name' => 'Place Blocks',
        'info' => 
        array (
          'name' => 'Place Blocks',
          'type' => 'module',
          'description' => 'Allow administrators to place blocks from any Drupal page',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'block',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'dynamic_page_cache' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/dynamic_page_cache/dynamic_page_cache.module',
        'basename' => 'dynamic_page_cache.module',
        'name' => 'Internal Dynamic Page Cache',
        'info' => 
        array (
          'name' => 'Internal Dynamic Page Cache',
          'type' => 'module',
          'description' => 'Caches pages for any user, handling dynamic content correctly.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'Color',
        'info' => 
        array (
          'name' => 'Color',
          'type' => 'module',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'config_translation_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/config_translation/tests/modules/config_translation_test/config_translation_test.module',
        'basename' => 'config_translation_test.module',
        'name' => 'Configuration Translation Test',
        'info' => 
        array (
          'name' => 'Configuration Translation Test',
          'description' => 'Helpers to test the configuration translation system',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'config_translation',
            1 => 'config_test',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'config_translation' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/config_translation/config_translation.module',
        'basename' => 'config_translation.module',
        'name' => 'Configuration Translation',
        'info' => 
        array (
          'name' => 'Configuration Translation',
          'type' => 'module',
          'description' => 'Provides a translation interface for configuration.',
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'config_translation.mapper_list',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'telephone' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/telephone/telephone.module',
        'basename' => 'telephone.module',
        'name' => 'Telephone',
        'info' => 
        array (
          'name' => 'Telephone',
          'type' => 'module',
          'description' => 'Defines a field type for telephone numbers.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'ckeditor_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/ckeditor/tests/modules/ckeditor_test.module',
        'basename' => 'ckeditor_test.module',
        'name' => 'CKEditor test',
        'info' => 
        array (
          'name' => 'CKEditor test',
          'type' => 'module',
          'description' => 'Support module for the CKEditor module tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'ckeditor' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/ckeditor/ckeditor.module',
        'basename' => 'ckeditor.module',
        'name' => 'CKEditor',
        'info' => 
        array (
          'name' => 'CKEditor',
          'type' => 'module',
          'description' => 'WYSIWYG editing for rich text fields using CKEditor.',
          'package' => 'Core',
          'core' => '8.x',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'editor',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'content_moderation' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/content_moderation/content_moderation.module',
        'basename' => 'content_moderation.module',
        'name' => 'Content Moderation',
        'info' => 
        array (
          'name' => 'Content Moderation',
          'type' => 'module',
          'description' => 'Provides moderation states for content',
          'version' => 'VERSION',
          'core' => '8.x',
          'package' => 'Core (Experimental)',
          'configure' => 'entity.workflow.collection',
          'dependencies' => 
          array (
            0 => 'workflows',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'menu_link_content' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/menu_link_content/menu_link_content.module',
        'basename' => 'menu_link_content.module',
        'name' => 'Custom Menu Links',
        'info' => 
        array (
          'name' => 'Custom Menu Links',
          'type' => 'module',
          'description' => 'Allows administrators to create custom menu links.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'link',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'config_import_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/config/tests/config_import_test/config_import_test.module',
        'basename' => 'config_import_test.module',
        'name' => 'Configuration import test',
        'info' => 
        array (
          'name' => 'Configuration import test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'config_entity_static_cache_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/config/tests/config_entity_static_cache_test/config_entity_static_cache_test.module',
        'basename' => 'config_entity_static_cache_test.module',
        'name' => 'Configuration entity static cache test',
        'info' => 
        array (
          'name' => 'Configuration entity static cache test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'config_install_dependency_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/config/tests/config_install_dependency_test/config_install_dependency_test.module',
        'basename' => 'config_install_dependency_test.module',
        'name' => 'Config install dependency test',
        'info' => 
        array (
          'name' => 'Config install dependency test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'config_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/config/tests/config_test/config_test.module',
        'basename' => 'config_test.module',
        'name' => 'Configuration test',
        'info' => 
        array (
          'name' => 'Configuration test',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'config' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/config/config.module',
        'basename' => 'config.module',
        'name' => 'Configuration Manager',
        'info' => 
        array (
          'name' => 'Configuration Manager',
          'type' => 'module',
          'description' => 'Allows administrators to manage configuration changes.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'config.sync',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'contextual' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'Contextual Links',
        'info' => 
        array (
          'name' => 'Contextual Links',
          'type' => 'module',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'book_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/book/tests/modules/book_test/book_test.module',
        'basename' => 'book_test.module',
        'name' => 'Book module tests',
        'info' => 
        array (
          'name' => 'Book module tests',
          'type' => 'module',
          'description' => 'Support module for book module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'book_breadcrumb_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/book/tests/modules/book_breadcrumb_test/book_breadcrumb_test.module',
        'basename' => 'book_breadcrumb_test.module',
        'name' => 'Book module breadcrumb tests',
        'info' => 
        array (
          'name' => 'Book module breadcrumb tests',
          'type' => 'module',
          'description' => 'Support module for book module breadcrumb testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'Book',
        'info' => 
        array (
          'name' => 'Book',
          'type' => 'module',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'node',
          ),
          'configure' => 'book.settings',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'toolbar_disable_user_toolbar' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/toolbar/tests/modules/toolbar_disable_user_toolbar/toolbar_disable_user_toolbar.module',
        'basename' => 'toolbar_disable_user_toolbar.module',
        'name' => 'Disable user toolbar',
        'info' => 
        array (
          'name' => 'Disable user toolbar',
          'type' => 'module',
          'description' => 'Support module for testing toolbar without user toolbar',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'toolbar_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/toolbar/tests/modules/toolbar_test/toolbar_test.module',
        'basename' => 'toolbar_test.module',
        'name' => 'Toolbar module API tests',
        'info' => 
        array (
          'name' => 'Toolbar module API tests',
          'type' => 'module',
          'description' => 'Support module for toolbar testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'toolbar' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'Toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'type' => 'module',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '8.x',
          'package' => 'Core',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'breakpoint',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'contact_storage_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/contact/tests/modules/contact_storage_test/contact_storage_test.module',
        'basename' => 'contact_storage_test.module',
        'name' => 'Contact test storage',
        'info' => 
        array (
          'name' => 'Contact test storage',
          'type' => 'module',
          'description' => 'Tests that contact messages can be stored.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'contact',
            1 => 'user',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'Contact',
        'info' => 
        array (
          'name' => 'Contact',
          'type' => 'module',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.contact_form.collection',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'user_form_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/user/tests/modules/user_form_test/user_form_test.module',
        'basename' => 'user_form_test.module',
        'name' => 'User module form tests',
        'info' => 
        array (
          'name' => 'User module form tests',
          'type' => 'module',
          'description' => 'Support module for user form testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'user_hooks_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/user/tests/modules/user_hooks_test/user_hooks_test.module',
        'basename' => 'user_hooks_test.module',
        'name' => 'User module hooks tests',
        'info' => 
        array (
          'name' => 'User module hooks tests',
          'type' => 'module',
          'description' => 'Support module for user hooks testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'user_access_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/user/tests/modules/user_access_test/user_access_test.module',
        'basename' => 'user_access_test.module',
        'name' => 'User access tests',
        'info' => 
        array (
          'name' => 'User access tests',
          'type' => 'module',
          'description' => 'Support module for user access testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'User',
        'info' => 
        array (
          'name' => 'User',
          'type' => 'module',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'required' => true,
          'configure' => 'user.admin_index',
          'dependencies' => 
          array (
            0 => 'system',
          ),
        ),
        'schema_version' => '8100',
        'version' => '8.3.3-dev',
      ),
      'block_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/block/tests/modules/block_test/block_test.module',
        'basename' => 'block_test.module',
        'name' => 'Block test',
        'info' => 
        array (
          'name' => 'Block test',
          'type' => 'module',
          'description' => 'Provides test blocks.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'block',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'Block',
        'info' => 
        array (
          'name' => 'Block',
          'type' => 'module',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'block.admin_display',
        ),
        'schema_version' => '8003',
        'version' => '8.3.3-dev',
      ),
      'ban' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/ban/ban.module',
        'basename' => 'ban.module',
        'name' => 'Ban',
        'info' => 
        array (
          'name' => 'Ban',
          'type' => 'module',
          'description' => 'Enables banning of IP addresses.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'ban.admin_page',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'simpletest' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'Testing',
        'info' => 
        array (
          'name' => 'Testing',
          'type' => 'module',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'simpletest.settings',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'content_translation_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/content_translation/tests/modules/content_translation_test/content_translation_test.module',
        'basename' => 'content_translation_test.module',
        'name' => 'Content translation tests',
        'info' => 
        array (
          'name' => 'Content translation tests',
          'type' => 'module',
          'description' => 'Provides content translation tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'content_translation',
            1 => 'language',
            2 => 'entity_test',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'content_translation' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/content_translation/content_translation.module',
        'basename' => 'content_translation.module',
        'name' => 'Content Translation',
        'info' => 
        array (
          'name' => 'Content Translation',
          'type' => 'module',
          'description' => 'Allows users to translate content entities.',
          'dependencies' => 
          array (
            0 => 'language',
          ),
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'language.content_settings_page',
        ),
        'schema_version' => '8002',
        'version' => '8.3.3-dev',
      ),
      'entity_schema_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/entity_schema_test/entity_schema_test.module',
        'basename' => 'entity_schema_test.module',
        'name' => 'Entity schema test module',
        'info' => 
        array (
          'name' => 'Entity schema test module',
          'type' => 'module',
          'description' => 'Provides entity and field definitions to test entity schema.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'common_test_cron_helper' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/common_test_cron_helper/common_test_cron_helper.module',
        'basename' => 'common_test_cron_helper.module',
        'name' => 'Common Test Cron Helper',
        'info' => 
        array (
          'name' => 'Common Test Cron Helper',
          'type' => 'module',
          'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'common_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/common_test/common_test.module',
        'basename' => 'common_test.module',
        'name' => 'Common Test',
        'info' => 
        array (
          'name' => 'Common Test',
          'type' => 'module',
          'description' => 'Support module for Common tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'entity_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/entity_test/entity_test.module',
        'basename' => 'entity_test.module',
        'name' => 'Entity CRUD test module',
        'info' => 
        array (
          'name' => 'Entity CRUD test module',
          'type' => 'module',
          'description' => 'Provides entity types based upon the CRUD API.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'text',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'session_exists_cache_context_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/session_exists_cache_context_test/session_exists_cache_context_test.module',
        'basename' => 'session_exists_cache_context_test.module',
        'name' => 'session.exists cache context test',
        'info' => 
        array (
          'name' => 'session.exists cache context test',
          'type' => 'module',
          'description' => 'Support module for session.exists cache context testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'menu_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/menu_test/menu_test.module',
        'basename' => 'menu_test.module',
        'name' => 'Hook menu tests',
        'info' => 
        array (
          'name' => 'Hook menu tests',
          'type' => 'module',
          'description' => 'Support module for menu hook testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'test_page_test',
            1 => 'menu_ui',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'batch_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/batch_test/batch_test.module',
        'basename' => 'batch_test.module',
        'name' => 'Batch API test',
        'info' => 
        array (
          'name' => 'Batch API test',
          'type' => 'module',
          'description' => 'Support module for Batch API tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'update_script_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/update_script_test/update_script_test.module',
        'basename' => 'update_script_test.module',
        'name' => 'Update script test',
        'info' => 
        array (
          'name' => 'Update script test',
          'type' => 'module',
          'description' => 'Support module for update script testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => '8001',
        'version' => '8.3.3-dev',
      ),
      'module_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/module_test/module_test.module',
        'basename' => 'module_test.module',
        'name' => 'Module test',
        'info' => 
        array (
          'name' => 'Module test',
          'type' => 'module',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'experimental_module_requirements_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/experimental_module_requirements_test/experimental_module_requirements_test.module',
        'basename' => 'experimental_module_requirements_test.module',
        'name' => 'Experimental Requirements Test',
        'info' => 
        array (
          'name' => 'Experimental Requirements Test',
          'type' => 'module',
          'description' => 'Module in the experimental package to test hook_requirements() with an experimental module.',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'system_module_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/system_module_test/system_module_test.module',
        'basename' => 'system_module_test.module',
        'name' => 'System test',
        'info' => 
        array (
          'name' => 'System test',
          'type' => 'module',
          'description' => 'Provides hook implementations for testing System module functionality.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'twig_theme_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/twig_theme_test/twig_theme_test.module',
        'basename' => 'twig_theme_test.module',
        'name' => 'Twig theme test',
        'info' => 
        array (
          'name' => 'Twig theme test',
          'type' => 'module',
          'description' => 'Support module for Twig theme system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'path_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/path_test/path_test.module',
        'basename' => 'path_test.module',
        'name' => 'Hook path tests',
        'info' => 
        array (
          'name' => 'Hook path tests',
          'type' => 'module',
          'description' => 'Support module for path hook testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'twig_extension_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/twig_extension_test/twig_extension_test.module',
        'basename' => 'twig_extension_test.module',
        'name' => 'Twig Extension Test',
        'info' => 
        array (
          'name' => 'Twig Extension Test',
          'type' => 'module',
          'description' => 'Support module for testing Twig extensions.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'entity_reference_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/entity_reference_test/entity_reference_test.module',
        'basename' => 'entity_reference_test.module',
        'name' => 'Entity Reference Test',
        'info' => 
        array (
          'name' => 'Entity Reference Test',
          'type' => 'module',
          'description' => 'Support module for the Entity Reference tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'user',
            2 => 'views',
            3 => 'entity_test',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'plugin_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/plugin_test/plugin_test.module',
        'basename' => 'plugin_test.module',
        'name' => 'Plugin Test Support',
        'info' => 
        array (
          'name' => 'Plugin Test Support',
          'type' => 'module',
          'description' => 'Test that plugins can provide plugins and provide namespace discovery for plugin test implementations.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'entity_test_update' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/entity_test_update/entity_test_update.module',
        'basename' => 'entity_test_update.module',
        'name' => 'Entity Update Test',
        'info' => 
        array (
          'name' => 'Entity Update Test',
          'type' => 'module',
          'description' => 'Provides an entity type for testing definition and schema updates.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'entity_test_extra' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/entity_test_extra/entity_test_extra.module',
        'basename' => 'entity_test_extra.module',
        'name' => 'Entity test extra',
        'info' => 
        array (
          'name' => 'Entity test extra',
          'type' => 'module',
          'description' => 'Provides extra fields for entity test entity types.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'entity_test_constraints' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/entity_test_constraints/entity_test_constraints.module',
        'basename' => 'entity_test_constraints.module',
        'name' => 'Entity constraints test module',
        'info' => 
        array (
          'name' => 'Entity constraints test module',
          'type' => 'module',
          'description' => 'Tests extending and altering entity constraints.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'theme_suggestions_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/theme_suggestions_test/theme_suggestions_test.module',
        'basename' => 'theme_suggestions_test.module',
        'name' => 'Theme suggestions test',
        'info' => 
        array (
          'name' => 'Theme suggestions test',
          'type' => 'module',
          'description' => 'Support module for testing theme suggestions.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'link_generation_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/link_generation_test/link_generation_test.module',
        'basename' => 'link_generation_test.module',
        'name' => 'Link generation test support',
        'info' => 
        array (
          'name' => 'Link generation test support',
          'type' => 'module',
          'description' => 'Test hooks fired in link generation.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'experimental_module_dependency_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/experimental_module_dependency_test/experimental_module_dependency_test.module',
        'basename' => 'experimental_module_dependency_test.module',
        'name' => 'Experimental Dependency Test',
        'info' => 
        array (
          'name' => 'Experimental Dependency Test',
          'type' => 'module',
          'description' => 'Module with a dependency in the experimental package.',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'experimental_module_test',
          ),
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'system_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/system_test/system_test.module',
        'basename' => 'system_test.module',
        'name' => 'System test',
        'info' => 
        array (
          'name' => 'System test',
          'type' => 'module',
          'description' => 'Support module for system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'system_test.configure',
          'configure_parameters' => 
          array (
            'foo' => 'bar',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'theme_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/theme_test/theme_test.module',
        'basename' => 'theme_test.module',
        'name' => 'Theme test',
        'info' => 
        array (
          'name' => 'Theme test',
          'type' => 'module',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'ajax_forms_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/ajax_forms_test/ajax_forms_test.module',
        'basename' => 'ajax_forms_test.module',
        'name' => 'AJAX form test mock module',
        'info' => 
        array (
          'name' => 'AJAX form test mock module',
          'type' => 'module',
          'description' => 'Test for AJAX form calls.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'theme_region_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/theme_region_test/theme_region_test.module',
        'basename' => 'theme_region_test.module',
        'name' => 'Theme region test',
        'info' => 
        array (
          'name' => 'Theme region test',
          'type' => 'module',
          'description' => 'Provides hook implementations for testing regions.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'entity_crud_hook_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/entity_crud_hook_test/entity_crud_hook_test.module',
        'basename' => 'entity_crud_hook_test.module',
        'name' => 'Entity CRUD Hooks Test',
        'info' => 
        array (
          'name' => 'Entity CRUD Hooks Test',
          'type' => 'module',
          'description' => 'Support module for CRUD hook tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'theme_page_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/theme_page_test/theme_page_test.module',
        'basename' => 'theme_page_test.module',
        'name' => 'Theme page test',
        'info' => 
        array (
          'name' => 'Theme page test',
          'type' => 'module',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'experimental_module_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/experimental_module_test/experimental_module_test.module',
        'basename' => 'experimental_module_test.module',
        'name' => 'Experimental Test',
        'info' => 
        array (
          'name' => 'Experimental Test',
          'type' => 'module',
          'description' => 'Module in the experimental package to test experimental functionality.',
          'package' => 'Core (Experimental)',
          'version' => '8.y.x-unstable',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.y.x-unstable',
      ),
      'module_required_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/module_required_test/module_required_test.module',
        'basename' => 'module_required_test.module',
        'name' => 'Module required test',
        'info' => 
        array (
          'name' => 'Module required test',
          'type' => 'module',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'drupal:node (>=8.x)',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'session_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/session_test/session_test.module',
        'basename' => 'session_test.module',
        'name' => 'Session test',
        'info' => 
        array (
          'name' => 'Session test',
          'type' => 'module',
          'description' => 'Support module for session data testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'entity_test_operation' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/entity_test_operation/entity_test_operation.module',
        'basename' => 'entity_test_operation.module',
        'name' => 'Entity Operation Test',
        'info' => 
        array (
          'name' => 'Entity Operation Test',
          'type' => 'module',
          'description' => 'Provides a test operation to entities.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'form_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/form_test/form_test.module',
        'basename' => 'form_test.module',
        'name' => 'FormAPI Test',
        'info' => 
        array (
          'name' => 'FormAPI Test',
          'type' => 'module',
          'description' => 'Support module for Form API tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'database_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/tests/modules/database_test/database_test.module',
        'basename' => 'database_test.module',
        'name' => 'Database Test',
        'info' => 
        array (
          'name' => 'Database Test',
          'type' => 'module',
          'description' => 'Support module for Database layer tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'System',
        'info' => 
        array (
          'name' => 'System',
          'type' => 'module',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'required' => true,
          'configure' => 'system.admin_config_system',
        ),
        'schema_version' => '8301',
        'version' => '8.3.3-dev',
      ),
      'taxonomy_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/taxonomy/tests/modules/taxonomy_test/taxonomy_test.module',
        'basename' => 'taxonomy_test.module',
        'name' => 'Taxonomy test',
        'info' => 
        array (
          'name' => 'Taxonomy test',
          'type' => 'module',
          'description' => 'Provides test hook implementations for taxonomy tests',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'taxonomy_crud' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/taxonomy/tests/modules/taxonomy_crud/taxonomy_crud.module',
        'basename' => 'taxonomy_crud.module',
        'name' => 'Taxonomy CRUD tests',
        'info' => 
        array (
          'name' => 'Taxonomy CRUD tests',
          'type' => 'module',
          'description' => 'Provides 3rd party settings for vocabulary.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'Taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'type' => 'module',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'text',
          ),
          'configure' => 'entity.taxonomy_vocabulary.collection',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'automated_cron' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/automated_cron/automated_cron.module',
        'basename' => 'automated_cron.module',
        'name' => 'Automated Cron',
        'info' => 
        array (
          'name' => 'Automated Cron',
          'type' => 'module',
          'description' => 'Provides an automated way to run cron jobs, by executing them at the end of a server response.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'system.cron_settings',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'menu_ui' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/menu_ui/menu_ui.module',
        'basename' => 'menu_ui.module',
        'name' => 'Menu UI',
        'info' => 
        array (
          'name' => 'Menu UI',
          'type' => 'module',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.menu.collection',
          'dependencies' => 
          array (
            0 => 'menu_link_content',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'page_cache_form_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/page_cache/tests/modules/page_cache_form_test.module',
        'basename' => 'page_cache_form_test.module',
        'name' => 'Page Cache Form Test',
        'info' => 
        array (
          'name' => 'Page Cache Form Test',
          'type' => 'module',
          'description' => 'Support module for the Page Cache module tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'page_cache' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/page_cache/page_cache.module',
        'basename' => 'page_cache.module',
        'name' => 'Internal Page Cache',
        'info' => 
        array (
          'name' => 'Internal Page Cache',
          'type' => 'module',
          'description' => 'Caches pages for anonymous users. Use when an external page cache is not available.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'language_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/language/tests/language_test/language_test.module',
        'basename' => 'language_test.module',
        'name' => 'Language test',
        'info' => 
        array (
          'name' => 'Language test',
          'type' => 'module',
          'description' => 'Support module for the language layer tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'language' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/language/language.module',
        'basename' => 'language.module',
        'name' => 'Language',
        'info' => 
        array (
          'name' => 'Language',
          'type' => 'module',
          'description' => 'Allows users to configure languages and apply them to content.',
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.configurable_language.collection',
        ),
        'schema_version' => '8001',
        'version' => '8.3.3-dev',
      ),
      'basic_auth' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/basic_auth/basic_auth.module',
        'basename' => 'basic_auth.module',
        'name' => 'HTTP Basic Authentication',
        'info' => 
        array (
          'name' => 'HTTP Basic Authentication',
          'type' => 'module',
          'description' => 'Provides the HTTP Basic authentication provider',
          'package' => 'Web services',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'user',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'migrate_drupal_ui' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/migrate_drupal_ui/migrate_drupal_ui.module',
        'basename' => 'migrate_drupal_ui.module',
        'name' => 'Migrate Drupal UI',
        'info' => 
        array (
          'name' => 'Migrate Drupal UI',
          'type' => 'module',
          'description' => 'Provides a user interface for migrating from older Drupal versions.',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'migrate_drupal_ui.upgrade',
          'dependencies' => 
          array (
            0 => 'migrate',
            1 => 'migrate_drupal',
            2 => 'dblog',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'rdf_conflicting_namespaces' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/rdf/tests/rdf_conflicting_namespaces/rdf_conflicting_namespaces.module',
        'basename' => 'rdf_conflicting_namespaces.module',
        'name' => 'RDF module conflicting namespaces test',
        'info' => 
        array (
          'name' => 'RDF module conflicting namespaces test',
          'type' => 'module',
          'description' => 'Test conflicting namespace declaration.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'rdf',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'rdf_test_namespaces' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/rdf/tests/rdf_test_namespaces/rdf_test_namespaces.module',
        'basename' => 'rdf_test_namespaces.module',
        'name' => 'RDF module namespaces test',
        'info' => 
        array (
          'name' => 'RDF module namespaces test',
          'type' => 'module',
          'description' => 'Test namespace declaration.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'rdf',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'rdf' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'RDF',
        'info' => 
        array (
          'name' => 'RDF',
          'type' => 'module',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'inline_form_errors' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/inline_form_errors/inline_form_errors.module',
        'basename' => 'inline_form_errors.module',
        'name' => 'Inline Form Errors',
        'info' => 
        array (
          'type' => 'module',
          'name' => 'Inline Form Errors',
          'description' => 'Adds WCAG 2.0 accessibility compliance for web form errors, but some functionality might not work.',
          'version' => 'VERSION',
          'core' => '8.x',
          'package' => 'Core (Experimental)',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'image_module_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/image/tests/modules/image_module_test/image_module_test.module',
        'basename' => 'image_module_test.module',
        'name' => 'Image test',
        'info' => 
        array (
          'name' => 'Image test',
          'type' => 'module',
          'description' => 'Provides hook implementations for testing Image module functionality.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'image' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'Image',
        'info' => 
        array (
          'name' => 'Image',
          'type' => 'module',
          'description' => 'Defines an image field type and provides image manipulation tools.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'configure' => 'entity.image_style.collection',
        ),
        'schema_version' => '8201',
        'version' => '8.3.3-dev',
      ),
      'node_access_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/node/tests/modules/node_access_test/node_access_test.module',
        'basename' => 'node_access_test.module',
        'name' => 'Node module access tests',
        'info' => 
        array (
          'name' => 'Node module access tests',
          'type' => 'module',
          'description' => 'Support module for node permission testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'node_access_test_language' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/node/tests/modules/node_access_test_language/node_access_test_language.module',
        'basename' => 'node_access_test_language.module',
        'name' => 'Node module access tests language',
        'info' => 
        array (
          'name' => 'Node module access tests language',
          'type' => 'module',
          'description' => 'Support module for language-aware node access testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'node_access_test_empty' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/node/tests/modules/node_access_test_empty/node_access_test_empty.module',
        'basename' => 'node_access_test_empty.module',
        'name' => 'Node module empty access tests',
        'info' => 
        array (
          'name' => 'Node module empty access tests',
          'type' => 'module',
          'description' => 'Support module for node permission testing. Provides empty grants hook implementations.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'node_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/node/tests/modules/node_test/node_test.module',
        'basename' => 'node_test.module',
        'name' => 'Node module tests',
        'info' => 
        array (
          'name' => 'Node module tests',
          'type' => 'module',
          'description' => 'Support module for node related testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'node_test_exception' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/node/tests/modules/node_test_exception/node_test_exception.module',
        'basename' => 'node_test_exception.module',
        'name' => 'Node module exception tests',
        'info' => 
        array (
          'name' => 'Node module exception tests',
          'type' => 'module',
          'description' => 'Support module for node related exception testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'Node',
        'info' => 
        array (
          'name' => 'Node',
          'type' => 'module',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.node_type.collection',
          'dependencies' => 
          array (
            0 => 'text',
          ),
        ),
        'schema_version' => '8301',
        'version' => '8.3.3-dev',
      ),
      'statistics' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'Statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'type' => 'module',
          'description' => 'Logs content statistics for your site.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'statistics.settings',
          'dependencies' => 
          array (
            0 => 'node',
          ),
        ),
        'schema_version' => '8300',
        'version' => '8.3.3-dev',
      ),
      'dblog' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'Database Logging',
        'info' => 
        array (
          'name' => 'Database Logging',
          'type' => 'module',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'system.logging_settings',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'Aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'type' => 'module',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds) from external sources.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'aggregator.admin_settings',
          'dependencies' => 
          array (
            0 => 'file',
            1 => 'options',
          ),
        ),
        'schema_version' => '8200',
        'version' => '8.3.3-dev',
      ),
      'shortcut' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'Shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'type' => 'module',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.shortcut_set.collection',
          'dependencies' => 
          array (
            0 => 'link',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'field_ui_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/field_ui/tests/modules/field_ui_test/field_ui_test.module',
        'basename' => 'field_ui_test.module',
        'name' => 'Field UI test',
        'info' => 
        array (
          'name' => 'Field UI test',
          'type' => 'module',
          'description' => 'Support module for Field UI tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'field_ui' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'Field UI',
        'info' => 
        array (
          'name' => 'Field UI',
          'type' => 'module',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'link' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/link/link.module',
        'basename' => 'link.module',
        'name' => 'Link',
        'info' => 
        array (
          'name' => 'Link',
          'type' => 'module',
          'description' => 'Provides a simple link field type.',
          'core' => '8.x',
          'package' => 'Field types',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'field',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'migrate_field_plugin_manager_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/migrate_drupal/tests/modules/migrate_field_plugin_manager_test/migrate_field_plugin_manager_test.module',
        'basename' => 'migrate_field_plugin_manager_test.module',
        'name' => 'Migrate field plugin manager test',
        'info' => 
        array (
          'name' => 'Migrate field plugin manager test',
          'type' => 'module',
          'description' => 'Example module demonstrating the field plugin manager in the Migrate API.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'migrate_drupal' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/migrate_drupal/migrate_drupal.module',
        'basename' => 'migrate_drupal.module',
        'name' => 'Migrate Drupal',
        'info' => 
        array (
          'name' => 'Migrate Drupal',
          'type' => 'module',
          'description' => 'Contains migrations from older Drupal versions.',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'migrate',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'breakpoint' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/breakpoint/breakpoint.module',
        'basename' => 'breakpoint.module',
        'name' => 'Breakpoint',
        'info' => 
        array (
          'name' => 'Breakpoint',
          'type' => 'module',
          'description' => 'Manage breakpoints and breakpoint groups for responsive designs.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'datetime' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/datetime/datetime.module',
        'basename' => 'datetime.module',
        'name' => 'Datetime',
        'info' => 
        array (
          'name' => 'Datetime',
          'type' => 'module',
          'description' => 'Defines datetime form elements and a datetime field type.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'options_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/options/tests/options_test/options_test.module',
        'basename' => 'options_test.module',
        'name' => 'Options test',
        'info' => 
        array (
          'name' => 'Options test',
          'type' => 'module',
          'description' => 'Support module for the Options module tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'options' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'Options',
        'info' => 
        array (
          'name' => 'Options',
          'type' => 'module',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'text',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'search_langcode_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/search/tests/modules/search_langcode_test/search_langcode_test.module',
        'basename' => 'search_langcode_test.module',
        'name' => 'Test search entity langcode',
        'info' => 
        array (
          'name' => 'Test search entity langcode',
          'type' => 'module',
          'description' => 'Support module for search module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'search_embedded_form' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/search/tests/modules/search_embedded_form/search_embedded_form.module',
        'basename' => 'search_embedded_form.module',
        'name' => 'Search Embedded Form',
        'info' => 
        array (
          'name' => 'Search Embedded Form',
          'type' => 'module',
          'description' => 'Support module for Search module testing of embedded forms.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'search_query_alter' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/search/tests/modules/search_query_alter/search_query_alter.module',
        'basename' => 'search_query_alter.module',
        'name' => 'Test Search Query Alter',
        'info' => 
        array (
          'name' => 'Test Search Query Alter',
          'type' => 'module',
          'description' => 'Support module for Search module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'search_date_query_alter' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/search/tests/modules/search_date_query_alter/search_date_query_alter.module',
        'basename' => 'search_date_query_alter.module',
        'name' => 'Search Date Query Alter',
        'info' => 
        array (
          'name' => 'Search Date Query Alter',
          'type' => 'module',
          'description' => 'Test module that adds date conditions to node searches.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'Search',
        'info' => 
        array (
          'name' => 'Search',
          'type' => 'module',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.search_page.collection',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'comment_empty_title_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/comment/tests/modules/comment_empty_title_test/comment_empty_title_test.module',
        'basename' => 'comment_empty_title_test.module',
        'name' => 'Comment empty titles test',
        'info' => 
        array (
          'name' => 'Comment empty titles test',
          'type' => 'module',
          'description' => 'Support module for testing empty title accessibility with Comment module.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'comment_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/comment/tests/modules/comment_test/comment_test.module',
        'basename' => 'comment_test.module',
        'name' => 'Comment test',
        'info' => 
        array (
          'name' => 'Comment test',
          'type' => 'module',
          'description' => 'Support module for Comment module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'Comment',
        'info' => 
        array (
          'name' => 'Comment',
          'type' => 'module',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'configure' => 'comment.admin',
        ),
        'schema_version' => '8301',
        'version' => '8.3.3-dev',
      ),
      'editor_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/editor/tests/modules/editor_test.module',
        'basename' => 'editor_test.module',
        'name' => 'Text Editor test',
        'info' => 
        array (
          'name' => 'Text Editor test',
          'type' => 'module',
          'description' => 'Support module for the Text Editor module tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'editor' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/editor/editor.module',
        'basename' => 'editor.module',
        'name' => 'Text Editor',
        'info' => 
        array (
          'name' => 'Text Editor',
          'type' => 'module',
          'description' => 'Provides a means to associate text formats with text editor libraries such as WYSIWYGs or toolbars.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'filter',
            1 => 'file',
          ),
          'configure' => 'filter.admin_overview',
        ),
        'schema_version' => '8001',
        'version' => '8.3.3-dev',
      ),
      'datetime_range' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/datetime_range/datetime_range.module',
        'basename' => 'datetime_range.module',
        'name' => 'Datetime Range',
        'info' => 
        array (
          'name' => 'Datetime Range',
          'type' => 'module',
          'description' => 'Provides the ability to store end dates.',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'datetime',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'Syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'type' => 'module',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'system.logging_settings',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'Activity Tracker',
        'info' => 
        array (
          'name' => 'Activity Tracker',
          'type' => 'module',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'field_third_party_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/field/tests/modules/field_third_party_test/field_third_party_test.module',
        'basename' => 'field_third_party_test.module',
        'name' => 'Field Third Party Settings Test',
        'info' => 
        array (
          'name' => 'Field Third Party Settings Test',
          'type' => 'module',
          'description' => 'Support module for the Field API tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'entity_test',
            1 => 'field_test',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'field_test_boolean_access_denied' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/field/tests/modules/field_test_boolean_access_denied/field_test_boolean_access_denied.module',
        'basename' => 'field_test_boolean_access_denied.module',
        'name' => 'Boolean field Test',
        'info' => 
        array (
          'name' => 'Boolean field Test',
          'type' => 'module',
          'description' => 'Support module for the field and entity display tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'field',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'field_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/field/tests/modules/field_test/field_test.module',
        'basename' => 'field_test.module',
        'name' => 'Field API Test',
        'info' => 
        array (
          'name' => 'Field API Test',
          'type' => 'module',
          'description' => 'Support module for the Field API tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'field' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'Field',
        'info' => 
        array (
          'name' => 'Field',
          'type' => 'module',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => '8003',
        'version' => '8.3.3-dev',
      ),
      'migrate_prepare_row_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/migrate/tests/modules/migrate_prepare_row_test/migrate_prepare_row_test.module',
        'basename' => 'migrate_prepare_row_test.module',
        'name' => 'Migrate module prepareRow tests',
        'info' => 
        array (
          'name' => 'Migrate module prepareRow tests',
          'type' => 'module',
          'description' => 'Support module for source plugin prepareRow testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'migrate' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/migrate/migrate.module',
        'basename' => 'migrate.module',
        'name' => 'Migrate',
        'info' => 
        array (
          'name' => 'Migrate',
          'type' => 'module',
          'description' => 'Handles migrations',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => '8001',
        'version' => '8.3.3-dev',
      ),
      'workflows' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/workflows/workflows.module',
        'basename' => 'workflows.module',
        'name' => 'Workflows',
        'info' => 
        array (
          'name' => 'Workflows',
          'type' => 'module',
          'description' => 'Provides UI and API for managing workflows. This module can be used with the Content moderation module to add highly customisable workflows to content.',
          'version' => 'VERSION',
          'core' => '8.x',
          'package' => 'Core (Experimental)',
          'configure' => 'entity.workflow.collection',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'history' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/history/history.module',
        'basename' => 'history.module',
        'name' => 'History',
        'info' => 
        array (
          'name' => 'History',
          'type' => 'module',
          'description' => 'Records which user has read which content.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'node',
          ),
        ),
        'schema_version' => '8101',
        'version' => '8.3.3-dev',
      ),
      'file_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/file/tests/file_test/file_test.module',
        'basename' => 'file_test.module',
        'name' => 'File test',
        'info' => 
        array (
          'name' => 'File test',
          'type' => 'module',
          'description' => 'Support module for file handling tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'file' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'File',
        'info' => 
        array (
          'name' => 'File',
          'type' => 'module',
          'description' => 'Defines a file field type.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'hal_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/hal/tests/modules/hal_test/hal_test.module',
        'basename' => 'hal_test.module',
        'name' => 'HAL test module',
        'info' => 
        array (
          'name' => 'HAL test module',
          'type' => 'module',
          'description' => 'Support module for HAL tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'hal' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/hal/hal.module',
        'basename' => 'hal.module',
        'name' => 'HAL',
        'info' => 
        array (
          'name' => 'HAL',
          'type' => 'module',
          'description' => 'Serializes entities using Hypertext Application Language.',
          'package' => 'Web services',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'serialization',
          ),
        ),
        'schema_version' => '8301',
        'version' => '8.3.3-dev',
      ),
      'views_ui_test_field' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/views_ui/tests/modules/views_ui_test_field/views_ui_test_field.module',
        'basename' => 'views_ui_test_field.module',
        'name' => 'Views test field',
        'info' => 
        array (
          'name' => 'Views test field',
          'type' => 'module',
          'description' => 'Add custom global field for testing purposes.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'views_ui',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'views_ui_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/views_ui/tests/modules/views_ui_test/views_ui_test.module',
        'basename' => 'views_ui_test.module',
        'name' => 'Views UI Test',
        'info' => 
        array (
          'name' => 'Views UI Test',
          'type' => 'module',
          'description' => 'Test module for Views UI.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'views_ui',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'views_ui' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/views_ui/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'Views UI',
        'info' => 
        array (
          'name' => 'Views UI',
          'type' => 'module',
          'description' => 'Administrative interface for Views.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.view.collection',
          'dependencies' => 
          array (
            0 => 'views',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'responsive_image' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/responsive_image/responsive_image.module',
        'basename' => 'responsive_image.module',
        'name' => 'Responsive Image',
        'info' => 
        array (
          'name' => 'Responsive Image',
          'type' => 'module',
          'description' => 'Provides an image formatter and breakpoint mappings to output responsive images using the HTML5 picture tag.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'breakpoint',
            1 => 'image',
          ),
          'configure' => 'entity.responsive_image_style.collection',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'field_layout_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/field_layout/tests/modules/field_layout_test/field_layout_test.module',
        'basename' => 'field_layout_test.module',
        'name' => 'Field Layout test',
        'info' => 
        array (
          'name' => 'Field Layout test',
          'type' => 'module',
          'description' => 'Support module for Field Layout tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'field_layout' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/field_layout/field_layout.module',
        'basename' => 'field_layout.module',
        'name' => 'Field Layout',
        'info' => 
        array (
          'name' => 'Field Layout',
          'type' => 'module',
          'description' => 'Adds layout capabilities to the Field UI.',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'layout_discovery',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'views_test_data' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/views/tests/modules/views_test_data/views_test_data.module',
        'basename' => 'views_test_data.module',
        'name' => 'Views Test',
        'info' => 
        array (
          'name' => 'Views Test',
          'type' => 'module',
          'description' => 'Test module for Views.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'views_entity_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/views/tests/modules/views_entity_test/views_entity_test.module',
        'basename' => 'views_entity_test.module',
        'name' => 'Views Entity Test',
        'info' => 
        array (
          'name' => 'Views Entity Test',
          'type' => 'module',
          'description' => 'Provides base fields for views tests of entity_test entity type.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'entity_test',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'views' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/views/views.module',
        'basename' => 'views.module',
        'name' => 'Views',
        'info' => 
        array (
          'name' => 'Views',
          'type' => 'module',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'filter',
          ),
        ),
        'schema_version' => '8201',
        'version' => '8.3.3-dev',
      ),
      'tour_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/tour/tests/tour_test/tour_test.module',
        'basename' => 'tour_test.module',
        'name' => 'Tour module tests',
        'info' => 
        array (
          'name' => 'Tour module tests',
          'type' => 'module',
          'description' => 'Tests module for tour module.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'tour',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'tour' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/tour/tour.module',
        'basename' => 'tour.module',
        'name' => 'Tour',
        'info' => 
        array (
          'name' => 'Tour',
          'type' => 'module',
          'description' => 'Provides guided tours.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'block_content_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/block_content/tests/modules/block_content_test/block_content_test.module',
        'basename' => 'block_content_test.module',
        'name' => 'Custom Block module tests',
        'info' => 
        array (
          'name' => 'Custom Block module tests',
          'type' => 'module',
          'description' => 'Support module for custom block related testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'block_content',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'block_content' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/block_content/block_content.module',
        'basename' => 'block_content.module',
        'name' => 'Custom Block',
        'info' => 
        array (
          'name' => 'Custom Block',
          'type' => 'module',
          'description' => 'Allows the creation of custom blocks through the user interface.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'text',
            2 => 'user',
          ),
          'configure' => 'entity.block_content.collection',
        ),
        'schema_version' => '8300',
        'version' => '8.3.3-dev',
      ),
      'quickedit_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/quickedit/tests/modules/quickedit_test.module',
        'basename' => 'quickedit_test.module',
        'name' => 'Quick Edit test',
        'info' => 
        array (
          'name' => 'Quick Edit test',
          'type' => 'module',
          'description' => 'Support module for the Quick Edit module tests.',
          'core' => '8.x',
          'package' => 'Testing',
          'version' => 'VERSION',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'quickedit' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/quickedit/quickedit.module',
        'basename' => 'quickedit.module',
        'name' => 'Quick Edit',
        'info' => 
        array (
          'name' => 'Quick Edit',
          'type' => 'module',
          'description' => 'In-place content editing.',
          'package' => 'Core',
          'core' => '8.x',
          'version' => 'VERSION',
          'dependencies' => 
          array (
            0 => 'contextual',
            1 => 'field',
            2 => 'filter',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'filter_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/filter/tests/filter_test/filter_test.module',
        'basename' => 'filter_test.module',
        'name' => 'Filter test module',
        'info' => 
        array (
          'name' => 'Filter test module',
          'type' => 'module',
          'description' => 'Tests filter hooks and functions.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'filter',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'Filter',
        'info' => 
        array (
          'name' => 'Filter',
          'type' => 'module',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'filter.admin_overview',
          'dependencies' => 
          array (
            0 => 'user',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'entity_serialization_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/serialization/tests/modules/entity_serialization_test/entity_serialization_test.module',
        'basename' => 'entity_serialization_test.module',
        'name' => 'Entity serialization test support',
        'info' => 
        array (
          'name' => 'Entity serialization test support',
          'type' => 'module',
          'description' => 'Provides test support for entity serialization tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'serialization' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/serialization/serialization.module',
        'basename' => 'serialization.module',
        'name' => 'Serialization',
        'info' => 
        array (
          'name' => 'Serialization',
          'type' => 'module',
          'description' => 'Provides a service for (de)serializing data to/from formats such as JSON and XML',
          'package' => 'Web services',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => '8302',
        'version' => '8.3.3-dev',
      ),
      'layout_discovery' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/layout_discovery/layout_discovery.module',
        'basename' => 'layout_discovery.module',
        'name' => 'Layout Discovery',
        'info' => 
        array (
          'name' => 'Layout Discovery',
          'type' => 'module',
          'description' => 'Provides a way for modules or themes to register layouts.',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'Interface Translation',
        'info' => 
        array (
          'name' => 'Interface Translation',
          'type' => 'module',
          'description' => 'Translates the built-in user interface.',
          'configure' => 'locale.translate_page',
          'package' => 'Multilingual',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'language',
            1 => 'file',
          ),
        ),
        'schema_version' => '8300',
        'version' => '8.3.3-dev',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'Path',
        'info' => 
        array (
          'name' => 'Path',
          'type' => 'module',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'path.admin_overview',
        ),
        'schema_version' => '8200',
        'version' => '8.3.3-dev',
      ),
      'big_pipe_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/big_pipe/tests/modules/big_pipe_test/big_pipe_test.module',
        'basename' => 'big_pipe_test.module',
        'name' => 'BigPipe test',
        'info' => 
        array (
          'name' => 'BigPipe test',
          'type' => 'module',
          'description' => 'Support module for BigPipe testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'big_pipe' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/big_pipe/big_pipe.module',
        'basename' => 'big_pipe.module',
        'name' => 'BigPipe',
        'info' => 
        array (
          'name' => 'BigPipe',
          'type' => 'module',
          'description' => 'Sends pages using the BigPipe technique that allows browsers to show them much faster.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'config_test_rest' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/rest/tests/modules/config_test_rest/config_test_rest.module',
        'basename' => 'config_test_rest.module',
        'name' => 'Configuration test REST',
        'info' => 
        array (
          'name' => 'Configuration test REST',
          'type' => 'module',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'config_test',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'rest_test_views' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/rest/tests/modules/rest_test_views/rest_test_views.module',
        'basename' => 'rest_test_views.module',
        'name' => 'REST test views',
        'info' => 
        array (
          'name' => 'REST test views',
          'type' => 'module',
          'description' => 'Provides default views for views REST tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'rest',
            1 => 'views',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'rest_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/rest/tests/modules/rest_test/rest_test.module',
        'basename' => 'rest_test.module',
        'name' => 'REST test',
        'info' => 
        array (
          'name' => 'REST test',
          'type' => 'module',
          'description' => 'Provides test hooks and resources for REST module.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'rest',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'rest' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/rest/rest.module',
        'basename' => 'rest.module',
        'name' => 'RESTful Web Services',
        'info' => 
        array (
          'name' => 'RESTful Web Services',
          'type' => 'module',
          'description' => 'Exposes entities and other resources as RESTful web API',
          'package' => 'Web services',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'serialization',
          ),
        ),
        'schema_version' => '8203',
        'version' => '8.3.3-dev',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'Forum',
        'info' => 
        array (
          'name' => 'Forum',
          'type' => 'module',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'history',
            2 => 'taxonomy',
            3 => 'comment',
            4 => 'options',
          ),
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'forum.overview',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'outside_in_test_css' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/outside_in/tests/modules/outside_in_test_css/outside_in_test_css.module',
        'basename' => 'outside_in_test_css.module',
        'name' => 'CSS Test fix',
        'info' => 
        array (
          'name' => 'CSS Test fix',
          'type' => 'module',
          'description' => 'Provides CSS fixes for tests.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'outside_in',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'outside_in' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/outside_in/outside_in.module',
        'basename' => 'outside_in.module',
        'name' => 'Settings Tray',
        'info' => 
        array (
          'name' => 'Settings Tray',
          'type' => 'module',
          'description' => 'Provides the ability to change the most common configuration from the Drupal front-end.',
          'package' => 'Core (Experimental)',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'toolbar',
            2 => 'contextual',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'text' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'Text',
        'info' => 
        array (
          'name' => 'Text',
          'type' => 'module',
          'description' => 'Defines simple text field types.',
          'package' => 'Field types',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'filter',
          ),
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'action' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/action/action.module',
        'basename' => 'action.module',
        'name' => 'Actions',
        'info' => 
        array (
          'name' => 'Actions',
          'type' => 'module',
          'description' => 'Perform tasks on specific events triggered within the system.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'configure' => 'entity.action.collection',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'help_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/help/tests/modules/help_test/help_test.module',
        'basename' => 'help_test.module',
        'name' => 'help_test',
        'info' => 
        array (
          'name' => 'help_test',
          'type' => 'module',
          'core' => '8.x',
          'package' => 'Testing',
          'dependencies' => 
          array (
            0 => 'help',
          ),
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'Help',
        'info' => 
        array (
          'name' => 'Help',
          'type' => 'module',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'update_test' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/update/tests/modules/update_test/update_test.module',
        'basename' => 'update_test.module',
        'name' => 'Update test',
        'info' => 
        array (
          'name' => 'Update test',
          'type' => 'module',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'version' => 'VERSION',
          'core' => '8.x',
        ),
        'schema_version' => 0,
        'version' => '8.3.3-dev',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'Update Manager',
        'info' => 
        array (
          'name' => 'Update Manager',
          'type' => 'module',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => 'VERSION',
          'package' => 'Core',
          'core' => '8.x',
          'configure' => 'update.settings',
          'dependencies' => 
          array (
            0 => 'file',
          ),
        ),
        'schema_version' => '8001',
        'version' => '8.3.3-dev',
      ),
    ),
    'themes' => 
    array (
      'bartik.info' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/themes/bartik/bartik.info.yml',
        'basename' => 'bartik.info.yml',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'type' => 'theme',
          'base theme' => 'classy',
          'description' => 'A flexible, recolorable theme with many regions and a responsive, mobile-first layout.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'libraries' => 
          array (
            0 => 'bartik/global-styling',
          ),
          'ckeditor_stylesheets' => 
          array (
            0 => 'css/base/elements.css',
            1 => 'css/components/captions.css',
            2 => 'css/components/table.css',
            3 => 'css/components/text-formatted.css',
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'primary_menu' => 'Primary menu',
            'secondary_menu' => 'Secondary menu',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured_top' => 'Featured top',
            'breadcrumb' => 'Breadcrumb',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'featured_bottom_first' => 'Featured bottom first',
            'featured_bottom_second' => 'Featured bottom second',
            'featured_bottom_third' => 'Featured bottom third',
            'footer_first' => 'Footer first',
            'footer_second' => 'Footer second',
            'footer_third' => 'Footer third',
            'footer_fourth' => 'Footer fourth',
            'footer_fifth' => 'Footer fifth',
          ),
        ),
        'version' => '8.3.3-dev',
      ),
      'seven.info' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/themes/seven/seven.info.yml',
        'basename' => 'seven.info.yml',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'type' => 'theme',
          'base theme' => 'classy',
          'description' => 'The default administration theme for Drupal 8 was designed with clean lines, simple blocks, and sans-serif font to emphasize the tools and tasks at hand.',
          'alt text' => 'Default administration theme for Drupal 8 with simple blocks and clean lines.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'libraries' => 
          array (
            0 => 'seven/global-styling',
          ),
          'libraries-override' => 
          array (
            'system/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  '/core/themes/stable/css/system/components/system-status-counter.css' => 'css/components/system-status-counter.css',
                  '/core/themes/stable/css/system/components/system-status-report-counters.css' => 'css/components/system-status-report-counters.css',
                  '/core/themes/stable/css/system/components/system-status-report-general-info.css' => 'css/components/system-status-report-general-info.css',
                ),
              ),
            ),
            'core/drupal.vertical-tabs' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'misc/vertical-tabs.css' => false,
                ),
              ),
            ),
            'core/jquery.ui' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'assets/vendor/jquery.ui/themes/base/theme.css' => false,
                ),
              ),
            ),
            'core/jquery.ui.dialog' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'assets/vendor/jquery.ui/themes/base/dialog.css' => false,
                ),
              ),
            ),
            'classy/dialog' => 'seven/seven.drupal.dialog',
          ),
          'libraries-extend' => 
          array (
            'core/ckeditor' => 
            array (
              0 => 'seven/ckeditor-dialog',
            ),
            'core/drupal.vertical-tabs' => 
            array (
              0 => 'seven/vertical-tabs',
            ),
            'core/jquery.ui' => 
            array (
              0 => 'seven/seven.jquery.ui',
            ),
            'tour/tour-styling' => 
            array (
              0 => 'seven/tour-styling',
            ),
          ),
          'quickedit_stylesheets' => 
          array (
            0 => 'css/components/quickedit.css',
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'pre_content' => 'Pre-content',
            'breadcrumb' => 'Breadcrumb',
            'highlighted' => 'Highlighted',
            'help' => 'Help',
            'content' => 'Content',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
        ),
        'version' => '8.3.3-dev',
      ),
      'classy.info' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/themes/classy/classy.info.yml',
        'basename' => 'classy.info.yml',
        'name' => 'Classy',
        'info' => 
        array (
          'name' => 'Classy',
          'type' => 'theme',
          'description' => 'A base theme with sensible default CSS classes added. Learn how to use Classy as a base theme in the <a href="https://www.drupal.org/docs/8/theming">Drupal 8 Theming Guide</a>.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'hidden' => true,
          'libraries' => 
          array (
            0 => 'classy/base',
            1 => 'core/normalize',
          ),
          'libraries-extend' => 
          array (
            'user/drupal.user' => 
            array (
              0 => 'classy/user',
            ),
            'core/drupal.dropbutton' => 
            array (
              0 => 'classy/dropbutton',
            ),
            'core/drupal.dialog' => 
            array (
              0 => 'classy/dialog',
            ),
            'file/drupal.file' => 
            array (
              0 => 'classy/file',
            ),
            'core/drupal.progress' => 
            array (
              0 => 'classy/progress',
            ),
          ),
        ),
        'version' => '8.3.3-dev',
      ),
      'stark.info' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/themes/stark/stark.info.yml',
        'basename' => 'stark.info.yml',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'type' => 'theme',
          'description' => 'An intentionally plain theme with no styling to demonstrate default Drupal’s HTML and CSS. Learn how to build a custom theme from Stark in the <a href="https://www.drupal.org/docs/8/theming">Theming Guide</a>.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'base theme' => false,
        ),
        'version' => '8.3.3-dev',
      ),
      'twig.info' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/themes/engines/twig/twig.info.yml',
        'basename' => 'twig.info.yml',
        'name' => 'Twig',
        'info' => 
        array (
          'type' => 'theme_engine',
          'name' => 'Twig',
          'core' => '8.x',
          'version' => 'VERSION',
          'package' => 'Core',
        ),
        'version' => '8.3.3-dev',
      ),
      'stable.info' => 
      array (
        'filename' => '/var/aegir/projects/andrew/dev/core/themes/stable/stable.info.yml',
        'basename' => 'stable.info.yml',
        'name' => 'Stable',
        'info' => 
        array (
          'name' => 'Stable',
          'type' => 'theme',
          'description' => 'A default base theme using Drupal 8.0.0\'s core markup and CSS.',
          'package' => 'Core',
          'version' => 'VERSION',
          'core' => '8.x',
          'base theme' => false,
          'hidden' => true,
          'libraries-override' => 
          array (
            'block/drupal.block.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/block.admin.css' => 'css/block/block.admin.css',
                ),
              ),
            ),
            'ckeditor/drupal.ckeditor' => 
            array (
              'css' => 
              array (
                'state' => 
                array (
                  'css/ckeditor.css' => 'css/ckeditor/ckeditor.css',
                ),
              ),
            ),
            'ckeditor/drupal.ckeditor.plugins.drupalimagecaption' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/plugins/drupalimagecaption/ckeditor.drupalimagecaption.css' => 'css/ckeditor/plugins/drupalimagecaption/ckeditor.drupalimagecaption.css',
                ),
              ),
            ),
            'ckeditor/drupal.ckeditor.plugins.language' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/plugins/language/ckeditor.language.css' => 'css/ckeditor/plugins/language/ckeditor.language.css',
                ),
              ),
            ),
            'ckeditor/drupal.ckeditor.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/ckeditor.admin.css' => 'css/ckeditor/ckeditor.admin.css',
                ),
              ),
            ),
            'color/admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/color.admin.css' => 'css/color/color.admin.css',
                ),
              ),
            ),
            'config_translation/drupal.config_translation.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/config_translation.admin.css' => 'css/config_translation/config_translation.admin.css',
                ),
              ),
            ),
            'content_translation/drupal.content_translation.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/content_translation.admin.css' => 'css/content_translation/content_translation.admin.css',
                ),
              ),
            ),
            'contextual/drupal.contextual-links' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/contextual.module.css' => 'css/contextual/contextual.module.css',
                ),
                'theme' => 
                array (
                  'css/contextual.theme.css' => 'css/contextual/contextual.theme.css',
                  'css/contextual.icons.theme.css' => 'css/contextual/contextual.icons.theme.css',
                ),
              ),
            ),
            'contextual/drupal.contextual-toolbar' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/contextual.toolbar.css' => 'css/contextual/contextual.toolbar.css',
                ),
              ),
            ),
            'core/drupal.dropbutton' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'misc/dropbutton/dropbutton.css' => 'css/core/dropbutton/dropbutton.css',
                ),
              ),
            ),
            'core/drupal.vertical-tabs' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'misc/vertical-tabs.css' => 'css/core/vertical-tabs.css',
                ),
              ),
            ),
            'dblog/drupal.dblog' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/dblog.module.css' => 'css/dblog/dblog.module.css',
                ),
              ),
            ),
            'field_ui/drupal.field_ui' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/field_ui.admin.css' => 'css/field_ui/field_ui.admin.css',
                ),
              ),
            ),
            'file/drupal.file' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/file.admin.css' => 'css/file/file.admin.css',
                ),
              ),
            ),
            'filter/drupal.filter.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/filter.admin.css' => 'css/filter/filter.admin.css',
                ),
              ),
            ),
            'filter/drupal.filter' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/filter.admin.css' => 'css/filter/filter.admin.css',
                ),
              ),
            ),
            'filter/caption' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/filter.caption.css' => 'css/filter/filter.caption.css',
                ),
              ),
            ),
            'image/admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/image.admin.css' => 'css/image/image.admin.css',
                ),
              ),
            ),
            'image/quickedit.inPlaceEditor.image' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/editors/image.css' => 'css/image/editors/image.css',
                ),
                'theme' => 
                array (
                  'css/editors/image.theme.css' => 'css/image/editors/image.theme.css',
                ),
              ),
            ),
            'language/drupal.language.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/language.admin.css' => 'css/language/language.admin.css',
                ),
              ),
            ),
            'locale/drupal.locale.admin' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/locale.admin.css' => 'css/locale/locale.admin.css',
                ),
              ),
            ),
            'menu_ui/drupal.menu_ui.adminforms' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/menu_ui.admin.css' => 'css/menu_ui/menu_ui.admin.css',
                ),
              ),
            ),
            'node/drupal.node' => 
            array (
              'css' => 
              array (
                'layout' => 
                array (
                  'css/node.module.css' => 'css/node/node.module.css',
                ),
              ),
            ),
            'node/drupal.node.preview' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/node.preview.css' => 'css/node/node.preview.css',
                ),
              ),
            ),
            'node/form' => 
            array (
              'css' => 
              array (
                'layout' => 
                array (
                  'css/node.module.css' => 'css/node/node.module.css',
                ),
              ),
            ),
            'node/drupal.node.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/node.admin.css' => 'css/node/node.admin.css',
                ),
              ),
            ),
            'quickedit/quickedit' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/quickedit.module.css' => 'css/quickedit/quickedit.module.css',
                ),
                'theme' => 
                array (
                  'css/quickedit.theme.css' => 'css/quickedit/quickedit.theme.css',
                  'css/quickedit.icons.theme.css' => 'css/quickedit/quickedit.icons.theme.css',
                ),
              ),
            ),
            'shortcut/drupal.shortcut' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/shortcut.theme.css' => 'css/shortcut/shortcut.theme.css',
                  'css/shortcut.icons.theme.css' => 'css/shortcut/shortcut.icons.theme.css',
                ),
              ),
            ),
            'simpletest/drupal.simpletest' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/simpletest.module.css' => 'css/simpletest/simpletest.module.css',
                ),
              ),
            ),
            'system/base' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/components/ajax-progress.module.css' => 'css/system/components/ajax-progress.module.css',
                  'css/components/align.module.css' => 'css/system/components/align.module.css',
                  'css/components/autocomplete-loading.module.css' => 'css/system/components/autocomplete-loading.module.css',
                  'css/components/fieldgroup.module.css' => 'css/system/components/fieldgroup.module.css',
                  'css/components/container-inline.module.css' => 'css/system/components/container-inline.module.css',
                  'css/components/clearfix.module.css' => 'css/system/components/clearfix.module.css',
                  'css/components/details.module.css' => 'css/system/components/details.module.css',
                  'css/components/hidden.module.css' => 'css/system/components/hidden.module.css',
                  'css/components/item-list.module.css' => 'css/system/components/item-list.module.css',
                  'css/components/js.module.css' => 'css/system/components/js.module.css',
                  'css/components/nowrap.module.css' => 'css/system/components/nowrap.module.css',
                  'css/components/position-container.module.css' => 'css/system/components/position-container.module.css',
                  'css/components/progress.module.css' => 'css/system/components/progress.module.css',
                  'css/components/reset-appearance.module.css' => 'css/system/components/reset-appearance.module.css',
                  'css/components/resize.module.css' => 'css/system/components/resize.module.css',
                  'css/components/sticky-header.module.css' => 'css/system/components/sticky-header.module.css',
                  'css/components/system-status-counter.css' => 'css/system/components/system-status-counter.css',
                  'css/components/system-status-report-counters.css' => 'css/system/components/system-status-report-counters.css',
                  'css/components/system-status-report-general-info.css' => 'css/system/components/system-status-report-general-info.css',
                  'css/components/tabledrag.module.css' => 'css/system/components/tabledrag.module.css',
                  'css/components/tablesort.module.css' => 'css/system/components/tablesort.module.css',
                  'css/components/tree-child.module.css' => 'css/system/components/tree-child.module.css',
                ),
              ),
            ),
            'system/admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/system.admin.css' => 'css/system/system.admin.css',
                ),
              ),
            ),
            'system/maintenance' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/system.maintenance.css' => 'css/system/system.maintenance.css',
                ),
              ),
            ),
            'system/diff' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/system.diff.css' => 'css/system/system.diff.css',
                ),
              ),
            ),
            'taxonomy/drupal.taxonomy' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/taxonomy.theme.css' => 'css/taxonomy/taxonomy.theme.css',
                ),
              ),
            ),
            'toolbar/toolbar' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/toolbar.module.css' => 'css/toolbar/toolbar.module.css',
                ),
                'theme' => 
                array (
                  'css/toolbar.theme.css' => 'css/toolbar/toolbar.theme.css',
                  'css/toolbar.icons.theme.css' => 'css/toolbar/toolbar.icons.theme.css',
                ),
              ),
            ),
            'toolbar/toolbar.menu' => 
            array (
              'css' => 
              array (
                'state' => 
                array (
                  'css/toolbar.menu.css' => 'css/toolbar/toolbar.menu.css',
                ),
              ),
            ),
            'tour/tour-styling' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/tour.module.css' => 'css/tour/tour.module.css',
                ),
              ),
            ),
            'update/drupal.update.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/update.admin.theme.css' => 'css/update/update.admin.theme.css',
                ),
              ),
            ),
            'user/drupal.user' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/user.module.css' => 'css/user/user.module.css',
                ),
              ),
            ),
            'user/drupal.user.admin' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/user.admin.css' => 'css/user/user.admin.css',
                ),
              ),
            ),
            'user/drupal.user.icons' => 
            array (
              'css' => 
              array (
                'theme' => 
                array (
                  'css/user.icons.admin.css' => 'css/user/user.icons.admin.css',
                ),
              ),
            ),
            'views/views.module' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/views.module.css' => 'css/views/views.module.css',
                ),
              ),
            ),
            'views_ui/admin.styling' => 
            array (
              'css' => 
              array (
                'component' => 
                array (
                  'css/views_ui.admin.css' => 'css/views_ui/views_ui.admin.css',
                ),
                'theme' => 
                array (
                  'css/views_ui.admin.theme.css' => 'css/views_ui/views_ui.admin.theme.css',
                  'css/views_ui.contextual.css' => 'css/views_ui/views_ui.contextual.css',
                ),
              ),
            ),
          ),
        ),
        'version' => '8.3.3-dev',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '8.3.3-dev',
        'description' => 'This platform is running Drupal 8.3.3-dev',
      ),
    ),
    'profiles' => 
    array (
      'minimal' => 
      array (
        'name' => 'Minimal',
        'info' => 
        array (
          'name' => 'Minimal',
          'type' => 'profile',
          'description' => 'Build a custom site without pre-configured functionality. Suitable for advanced users.',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'block',
            2 => 'dblog',
            3 => 'page_cache',
            4 => 'dynamic_page_cache',
          ),
          'themes' => 
          array (
            0 => 'stark',
          ),
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'filename' => '/var/aegir/projects/andrew/dev/core/profiles/minimal/minimal.info.yml',
        'path' => '/var/aegir/projects/andrew/dev/core/profiles/minimal',
        'version' => '8.3.3-dev',
      ),
      'standard' => 
      array (
        'name' => 'Standard',
        'info' => 
        array (
          'name' => 'Standard',
          'type' => 'profile',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => 'VERSION',
          'core' => '8.x',
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'history',
            2 => 'block',
            3 => 'breakpoint',
            4 => 'ckeditor',
            5 => 'color',
            6 => 'config',
            7 => 'comment',
            8 => 'contextual',
            9 => 'contact',
            10 => 'menu_link_content',
            11 => 'datetime',
            12 => 'block_content',
            13 => 'quickedit',
            14 => 'editor',
            15 => 'help',
            16 => 'image',
            17 => 'menu_ui',
            18 => 'options',
            19 => 'path',
            20 => 'page_cache',
            21 => 'dynamic_page_cache',
            22 => 'taxonomy',
            23 => 'dblog',
            24 => 'search',
            25 => 'shortcut',
            26 => 'toolbar',
            27 => 'field_ui',
            28 => 'file',
            29 => 'rdf',
            30 => 'views',
            31 => 'views_ui',
            32 => 'tour',
            33 => 'automated_cron',
          ),
          'themes' => 
          array (
            0 => 'bartik',
            1 => 'seven',
          ),
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'filename' => '/var/aegir/projects/andrew/dev/core/profiles/standard/standard.info.yml',
        'path' => '/var/aegir/projects/andrew/dev/core/profiles/standard',
        'version' => '8.3.3-dev',
      ),
      'druppio_monopage_profile' => 
      array (
        'name' => 'Druppio Monopage Profile',
        'info' => 
        array (
          'name' => 'Druppio Monopage Profile',
          'type' => 'profile',
          'description' => 'Druppio Monopage installation profile.',
          'core' => '8.x',
          'distribution' => 
          array (
            'name' => 'Druppio Monopage',
          ),
          'dependencies' => 
          array (
            0 => 'node',
            1 => 'history',
            2 => 'block',
            3 => 'breakpoint',
            4 => 'ckeditor',
            5 => 'color',
            6 => 'config',
            7 => 'comment',
            8 => 'contextual',
            9 => 'contact',
            10 => 'menu_link_content',
            11 => 'datetime',
            12 => 'block_content',
            13 => 'quickedit',
            14 => 'editor',
            15 => 'help',
            16 => 'image',
            17 => 'menu_ui',
            18 => 'options',
            19 => 'path',
            20 => 'page_cache',
            21 => 'dynamic_page_cache',
            22 => 'taxonomy',
            23 => 'dblog',
            24 => 'search',
            25 => 'shortcut',
            26 => 'toolbar',
            27 => 'field_ui',
            28 => 'file',
            29 => 'rdf',
            30 => 'views',
            31 => 'views_ui',
            32 => 'tour',
            33 => 'automated_cron',
            34 => 'admin_toolbar',
            35 => 'admin_toolbar_tools',
            36 => 'color_field',
            37 => 'contact_block',
            38 => 'ctools',
            39 => 'eck',
            40 => 'image_url_formatter',
            41 => 'menu_link_attributes',
            42 => 'metatag',
            43 => 'pathauto',
            44 => 'rules',
            45 => 'seckit',
            46 => 'token',
            47 => 'views_slideshow',
            48 => 'views_slideshow_cycle',
            49 => 'easy_social',
          ),
          'themes' => 
          array (
            0 => 'druppio_monopage',
            1 => 'bartik',
            2 => 'seven',
          ),
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/druppio_monopage_profile.info.yml',
        'path' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile',
        'version' => '8.3.3-dev',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
    ),
    'themes' => 
    array (
    ),
  ),
  'profiles' => 
  array (
    'minimal' => 
    array (
      'modules' => 
      array (
        'easy_social_example' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/easy_social/contrib/easy_social_example/easy_social_example.module',
          'basename' => 'easy_social_example.module',
          'name' => 'Easy Social Example',
          'info' => 
          array (
            'name' => 'Easy Social Example',
            'type' => 'module',
            'description' => 'Example module that demonstrates how to create a custom Easy Social widget.',
            'dependencies' => 
            array (
              0 => 'easy_social',
            ),
            'package' => 'Examples',
            'configure' => 'admin/config/services/easy-social/example',
            'version' => '8.x-3.0',
            'core' => '8.x',
            'project' => 'easy_social',
            'datestamp' => 1466956140,
          ),
          'schema_version' => 0,
          'version' => '8.x-3.0',
        ),
        'easy_social' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/easy_social/easy_social.module',
          'basename' => 'easy_social.module',
          'name' => 'Easy Social',
          'info' => 
          array (
            'name' => 'Easy Social',
            'type' => 'module',
            'description' => 'Easily add social sharing widgets to your site.',
            'configure' => 'easy_social.settings',
            'version' => '8.x-3.0',
            'core' => '8.x',
            'project' => 'easy_social',
            'datestamp' => 1466956140,
          ),
          'schema_version' => 0,
          'version' => '8.x-3.0',
        ),
        'ctools_views' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/modules/ctools_views/ctools_views.module',
          'basename' => 'ctools_views.module',
          'name' => 'Chaos tools Views',
          'info' => 
          array (
            'name' => 'Chaos tools Views',
            'type' => 'module',
            'description' => 'A set of improvements to the core Views code that allows for greater control over Blocks.',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'block',
              1 => 'views',
            ),
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'schema_version' => 0,
          'version' => '8.x-3.0-alpha26',
        ),
        'ctools' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/ctools.module',
          'basename' => 'ctools.module',
          'name' => 'Chaos tools',
          'info' => 
          array (
            'name' => 'Chaos tools',
            'type' => 'module',
            'description' => 'Provides a number of utility and helper APIs for Drupal developers and site builders.',
            'package' => 'Chaos tool suite',
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'schema_version' => 0,
          'version' => '8.x-3.0-alpha26',
        ),
        'token' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/token/token.module',
          'basename' => 'token.module',
          'name' => 'Token',
          'info' => 
          array (
            'type' => 'module',
            'name' => 'Token',
            'description' => 'Provides a user interface for the Token API and some missing core tokens.',
            'version' => '8.x-1.0-alpha2',
            'core' => '8.x',
            'project' => 'token',
            'datestamp' => 1453363741,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.0-alpha2',
        ),
        'image_url_formatter' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/image_url_formatter/image_url_formatter.module',
          'basename' => 'image_url_formatter.module',
          'name' => 'Image URL Formatter',
          'info' => 
          array (
            'name' => 'Image URL Formatter',
            'type' => 'module',
            'description' => 'Add an URL formatter for image field.',
            'package' => 'Field types',
            'dependencies' => 
            array (
              0 => 'image',
            ),
            'version' => '8.x-1.0-beta1',
            'core' => '8.x',
            'project' => 'image_url_formatter',
            'datestamp' => 1458189819,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.0-beta1',
        ),
        'pathauto' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/pathauto/pathauto.module',
          'basename' => 'pathauto.module',
          'name' => 'Pathauto',
          'info' => 
          array (
            'name' => 'Pathauto',
            'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
            'type' => 'module',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'path',
              2 => 'token',
            ),
            'configure' => 'entity.pathauto_pattern.collection',
            'recommends' => 
            array (
              0 => 'redirect',
            ),
            'version' => '8.x-1.0-alpha3',
            'core' => '8.x',
            'project' => 'pathauto',
            'datestamp' => 1461007782,
          ),
          'schema_version' => '8105',
          'version' => '8.x-1.0-alpha3',
        ),
        'eck' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/eck/eck.module',
          'basename' => 'eck.module',
          'name' => 'Entity Construction Kit',
          'info' => 
          array (
            'name' => 'Entity Construction Kit',
            'type' => 'module',
            'description' => 'ECK (Entity Contruction Kit) allows users to create and administer entity types, bundles and entities from UI',
            'package' => 'ECK',
            'configure' => 'eck.entity_type.list',
            'version' => '8.x-1.0-alpha1',
            'core' => '8.x',
            'project' => 'eck',
            'datestamp' => 1453547666,
          ),
          'schema_version' => '8003',
          'version' => '8.x-1.0-alpha1',
        ),
        'views_slideshow_cycle' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/views_slideshow/modules/views_slideshow_cycle/views_slideshow_cycle.module',
          'basename' => 'views_slideshow_cycle.module',
          'name' => 'Views Slideshow Cycle',
          'info' => 
          array (
            'name' => 'Views Slideshow Cycle',
            'type' => 'module',
            'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
            'package' => 'Views',
            'dependencies' => 
            array (
              0 => 'views_slideshow',
            ),
            'version' => '8.x-4.0',
            'core' => '8.x',
            'project' => 'views_slideshow',
            'datestamp' => 1455833943,
          ),
          'schema_version' => 0,
          'version' => '8.x-4.0',
        ),
        'views_slideshow' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/views_slideshow/views_slideshow.module',
          'basename' => 'views_slideshow.module',
          'name' => 'Views Slideshow',
          'info' => 
          array (
            'name' => 'Views Slideshow',
            'type' => 'module',
            'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
            'package' => 'Views',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'version' => '8.x-4.0',
            'core' => '8.x',
            'project' => 'views_slideshow',
            'datestamp' => 1455833943,
          ),
          'schema_version' => 0,
          'version' => '8.x-4.0',
        ),
        'rules' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/rules/rules.module',
          'basename' => 'rules.module',
          'name' => 'Rules',
          'info' => 
          array (
            'name' => 'Rules',
            'type' => 'module',
            'description' => 'React on events and conditionally evaluate actions.',
            'package' => 'Rules',
            'configure' => 'entity.rules_reaction_rule.collection',
            'version' => '8.x-3.0-alpha1',
            'core' => '8.x',
            'project' => 'rules',
            'datestamp' => 1457387804,
          ),
          'schema_version' => 0,
          'version' => '8.x-3.0-alpha1',
        ),
        'admin_toolbar_tools' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/admin_toolbar/admin_toolbar_tools/admin_toolbar_tools.module',
          'basename' => 'admin_toolbar_tools.module',
          'name' => 'Admin Toolbar Extra Tools',
          'info' => 
          array (
            'name' => 'Admin Toolbar Extra Tools',
            'description' => 'Adds menu links to the Admin Toolbar.',
            'package' => 'Administration',
            'type' => 'module',
            'dependencies' => 
            array (
              0 => 'admin_toolbar',
            ),
            'version' => '8.x-1.16',
            'core' => '8.x',
            'project' => 'admin_toolbar',
            'datestamp' => 1469715840,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.16',
        ),
        'admin_toolbar' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/admin_toolbar/admin_toolbar.module',
          'basename' => 'admin_toolbar.module',
          'name' => 'Admin Toolbar',
          'info' => 
          array (
            'name' => 'Admin Toolbar',
            'description' => 'Provides a drop-down menu interface to the core Drupal Toolbar.',
            'package' => 'Administration',
            'type' => 'module',
            'dependencies' => 
            array (
              0 => 'toolbar',
            ),
            'version' => '8.x-1.16',
            'core' => '8.x',
            'project' => 'admin_toolbar',
            'datestamp' => 1469715840,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.16',
        ),
        'menu_link_attributes' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/menu_link_attributes/menu_link_attributes.module',
          'basename' => 'menu_link_attributes.module',
          'name' => 'Menu Link Attributes',
          'info' => 
          array (
            'name' => 'Menu Link Attributes',
            'type' => 'module',
            'description' => 'Allows you to add attributes to menu links.',
            'dependencies' => 
            array (
              0 => 'menu_link_content',
            ),
            'configure' => 'menu_link_attributes.config',
            'version' => '8.x-1.0-beta3',
            'core' => '8.x',
            'project' => 'menu_link_attributes',
            'datestamp' => 1467719640,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.0-beta3',
        ),
        'color_field' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/color_field/color_field.module',
          'basename' => 'color_field.module',
          'name' => 'Color Field',
          'info' => 
          array (
            'name' => 'Color Field',
            'type' => 'module',
            'description' => 'Provides a color field type to store the color value and opacity',
            'package' => 'Field types',
            'dependencies' => 
            array (
              0 => 'field',
            ),
            'version' => '8.x-2.0-rc1',
            'core' => '8.x',
            'project' => 'color_field',
            'datestamp' => 1447537141,
          ),
          'schema_version' => 0,
          'version' => '8.x-2.0-rc1',
        ),
        'seckit' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/seckit/seckit.module',
          'basename' => 'seckit.module',
          'name' => 'Security Kit',
          'info' => 
          array (
            'name' => 'Security Kit',
            'description' => 'Enhance security of your Drupal website.',
            'package' => 'Security',
            'configure' => 'seckit.settings',
            'type' => 'module',
            'version' => '8.x-1.0-alpha1',
            'core' => '8.x',
            'project' => 'seckit',
            'datestamp' => 1467148740,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.0-alpha1',
        ),
        'metatag_test' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/tests/modules/metatag_test/metatag_test.module',
          'basename' => 'metatag_test.module',
          'name' => 'Metatag test',
          'info' => 
          array (
            'name' => 'Metatag test',
            'type' => 'module',
            'description' => 'Provides support for metatag tests.',
            'package' => 'Testing',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.0-beta9',
        ),
        'metatag' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/metatag.module',
          'basename' => 'metatag.module',
          'name' => 'Metatag',
          'info' => 
          array (
            'name' => 'Metatag',
            'type' => 'module',
            'description' => 'Manage meta tags for all entities.',
            'package' => 'SEO',
            'dependencies' => 
            array (
              0 => 'field',
              1 => 'token',
            ),
            'configure' => 'entity.metatag_defaults.collection',
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'schema_version' => '8107',
          'version' => '8.x-1.0-beta9',
        ),
      ),
      'themes' => 
      array (
        'minimal.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/core/profiles/minimal/minimal.info.yml',
          'basename' => 'minimal.info.yml',
          'name' => 'Minimal',
          'info' => 
          array (
            'name' => 'Minimal',
            'type' => 'profile',
            'description' => 'Build a custom site without pre-configured functionality. Suitable for advanced users.',
            'version' => 'VERSION',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'node',
              1 => 'block',
              2 => 'dblog',
              3 => 'page_cache',
              4 => 'dynamic_page_cache',
            ),
            'themes' => 
            array (
              0 => 'stark',
            ),
          ),
          'version' => '8.3.3-dev',
        ),
        'standard.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/core/profiles/standard/standard.info.yml',
          'basename' => 'standard.info.yml',
          'name' => 'Standard',
          'info' => 
          array (
            'name' => 'Standard',
            'type' => 'profile',
            'description' => 'Install with commonly used features pre-configured.',
            'version' => 'VERSION',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'node',
              1 => 'history',
              2 => 'block',
              3 => 'breakpoint',
              4 => 'ckeditor',
              5 => 'color',
              6 => 'config',
              7 => 'comment',
              8 => 'contextual',
              9 => 'contact',
              10 => 'menu_link_content',
              11 => 'datetime',
              12 => 'block_content',
              13 => 'quickedit',
              14 => 'editor',
              15 => 'help',
              16 => 'image',
              17 => 'menu_ui',
              18 => 'options',
              19 => 'path',
              20 => 'page_cache',
              21 => 'dynamic_page_cache',
              22 => 'taxonomy',
              23 => 'dblog',
              24 => 'search',
              25 => 'shortcut',
              26 => 'toolbar',
              27 => 'field_ui',
              28 => 'file',
              29 => 'rdf',
              30 => 'views',
              31 => 'views_ui',
              32 => 'tour',
              33 => 'automated_cron',
            ),
            'themes' => 
            array (
              0 => 'bartik',
              1 => 'seven',
            ),
          ),
          'version' => '8.3.3-dev',
        ),
        'easy_social_example.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/easy_social/contrib/easy_social_example/easy_social_example.info.yml',
          'basename' => 'easy_social_example.info.yml',
          'name' => 'Easy Social Example',
          'info' => 
          array (
            'name' => 'Easy Social Example',
            'type' => 'module',
            'description' => 'Example module that demonstrates how to create a custom Easy Social widget.',
            'dependencies' => 
            array (
              0 => 'easy_social',
            ),
            'package' => 'Examples',
            'configure' => 'admin/config/services/easy-social/example',
            'version' => '8.x-3.0',
            'core' => '8.x',
            'project' => 'easy_social',
            'datestamp' => 1466956140,
          ),
          'version' => '8.x-3.0',
        ),
        'easy_social.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/easy_social/easy_social.info.yml',
          'basename' => 'easy_social.info.yml',
          'name' => 'Easy Social',
          'info' => 
          array (
            'name' => 'Easy Social',
            'type' => 'module',
            'description' => 'Easily add social sharing widgets to your site.',
            'configure' => 'easy_social.settings',
            'version' => '8.x-3.0',
            'core' => '8.x',
            'project' => 'easy_social',
            'datestamp' => 1466956140,
          ),
          'version' => '8.x-3.0',
        ),
        'ctools_wizard_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/tests/modules/ctools_wizard_test/ctools_wizard_test.info.yml',
          'basename' => 'ctools_wizard_test.info.yml',
          'name' => 'Chaos Wizard Test',
          'info' => 
          array (
            'name' => 'Chaos Wizard Test',
            'type' => 'module',
            'description' => 'Provides testing for ctools wizard',
            'package' => 'Testing',
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'version' => '8.x-3.0-alpha26',
        ),
        'ctools_views_test_views.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/modules/ctools_views/tests/modules/ctools_views_test_views/ctools_views_test_views.info.yml',
          'basename' => 'ctools_views_test_views.info.yml',
          'name' => 'CTools Views test views',
          'info' => 
          array (
            'name' => 'CTools Views test views',
            'type' => 'module',
            'description' => 'Provides default views for CTools Views tests.',
            'package' => 'Testing',
            'dependencies' => 
            array (
              0 => 'views',
              1 => 'block',
              2 => 'entity_test',
              3 => 'ctools_views',
              4 => 'text',
              5 => 'user',
              6 => 'node',
              7 => 'taxonomy',
            ),
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'version' => '8.x-3.0-alpha26',
        ),
        'ctools_views.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/modules/ctools_views/ctools_views.info.yml',
          'basename' => 'ctools_views.info.yml',
          'name' => 'Chaos tools Views',
          'info' => 
          array (
            'name' => 'Chaos tools Views',
            'type' => 'module',
            'description' => 'A set of improvements to the core Views code that allows for greater control over Blocks.',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'block',
              1 => 'views',
            ),
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'version' => '8.x-3.0-alpha26',
        ),
        'ctools_block_field_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/modules/ctools_block/tests/modules/ctools_block_field_test/ctools_block_field_test.info.yml',
          'basename' => 'ctools_block_field_test.info.yml',
          'name' => 'Chaos tools blocks test',
          'info' => 
          array (
            'name' => 'Chaos tools blocks test',
            'type' => 'module',
            'description' => 'Support module for Chaos tools blocks tests.',
            'package' => 'Testing',
            'dependencies' => 
            array (
              0 => 'menu_ui',
              1 => 'node',
              2 => 'path',
              3 => 'text',
              4 => 'user',
            ),
            'features' => true,
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'version' => '8.x-3.0-alpha26',
        ),
        'ctools_block.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/modules/ctools_block/ctools_block.info.yml',
          'basename' => 'ctools_block.info.yml',
          'name' => 'Chaos tools blocks',
          'info' => 
          array (
            'name' => 'Chaos tools blocks',
            'type' => 'module',
            'description' => 'Provides improvements to blocks that will one day be added to Drupal core.',
            'package' => 'Chaos tool suite (Experimental)',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'version' => '8.x-3.0-alpha26',
        ),
        'ctools.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/ctools.info.yml',
          'basename' => 'ctools.info.yml',
          'name' => 'Chaos tools',
          'info' => 
          array (
            'name' => 'Chaos tools',
            'type' => 'module',
            'description' => 'Provides a number of utility and helper APIs for Drupal developers and site builders.',
            'package' => 'Chaos tool suite',
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'version' => '8.x-3.0-alpha26',
        ),
        'contact_block.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/contact_block/contact_block.info.yml',
          'basename' => 'contact_block.info.yml',
          'name' => 'Contact Block',
          'info' => 
          array (
            'name' => 'Contact Block',
            'type' => 'module',
            'description' => 'Provides blocks for Contact module\'s forms.',
            'package' => 'Other',
            'dependencies' => 
            array (
              0 => 'block',
              1 => 'contact',
            ),
            'version' => '8.x-1.2',
            'core' => '8.x',
            'project' => 'contact_block',
            'datestamp' => 1464603244,
          ),
          'version' => '8.x-1.2',
        ),
        'token_user_picture.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/token/tests/modules/token_user_picture/token_user_picture.info.yml',
          'basename' => 'token_user_picture.info.yml',
          'name' => 'Token User picture',
          'info' => 
          array (
            'type' => 'module',
            'name' => 'Token User picture',
            'description' => 'Testing module that provides user pictures field.',
            'package' => 'Testing',
            'hidden' => true,
            'dependencies' => 
            array (
              0 => 'image',
            ),
            'version' => '8.x-1.0-alpha2',
            'core' => '8.x',
            'project' => 'token',
            'datestamp' => 1453363741,
          ),
          'version' => '8.x-1.0-alpha2',
        ),
        'token_module_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/token/tests/modules/token_module_test/token_module_test.info.yml',
          'basename' => 'token_module_test.info.yml',
          'name' => 'Token Module Test',
          'info' => 
          array (
            'type' => 'module',
            'name' => 'Token Module Test',
            'description' => 'Testing module for token functionality.',
            'package' => 'Testing',
            'hidden' => true,
            'version' => '8.x-1.0-alpha2',
            'core' => '8.x',
            'project' => 'token',
            'datestamp' => 1453363741,
          ),
          'version' => '8.x-1.0-alpha2',
        ),
        'token.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/token/token.info.yml',
          'basename' => 'token.info.yml',
          'name' => 'Token',
          'info' => 
          array (
            'type' => 'module',
            'name' => 'Token',
            'description' => 'Provides a user interface for the Token API and some missing core tokens.',
            'version' => '8.x-1.0-alpha2',
            'core' => '8.x',
            'project' => 'token',
            'datestamp' => 1453363741,
          ),
          'version' => '8.x-1.0-alpha2',
        ),
        'image_url_formatter.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/image_url_formatter/image_url_formatter.info.yml',
          'basename' => 'image_url_formatter.info.yml',
          'name' => 'Image URL Formatter',
          'info' => 
          array (
            'name' => 'Image URL Formatter',
            'type' => 'module',
            'description' => 'Add an URL formatter for image field.',
            'package' => 'Field types',
            'dependencies' => 
            array (
              0 => 'image',
            ),
            'version' => '8.x-1.0-beta1',
            'core' => '8.x',
            'project' => 'image_url_formatter',
            'datestamp' => 1458189819,
          ),
          'version' => '8.x-1.0-beta1',
        ),
        'pathauto_views_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/pathauto/tests/modules/pathauto_views_test/pathauto_views_test.info.yml',
          'basename' => 'pathauto_views_test.info.yml',
          'name' => 'Views Test Config',
          'info' => 
          array (
            'name' => 'Views Test Config',
            'type' => 'module',
            'description' => 'Provides default views for tests.',
            'package' => 'Testing',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'version' => '8.x-1.0-alpha3',
            'core' => '8.x',
            'project' => 'pathauto',
            'datestamp' => 1461007782,
          ),
          'version' => '8.x-1.0-alpha3',
        ),
        'pathauto.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/pathauto/pathauto.info.yml',
          'basename' => 'pathauto.info.yml',
          'name' => 'Pathauto',
          'info' => 
          array (
            'name' => 'Pathauto',
            'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
            'type' => 'module',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'path',
              2 => 'token',
            ),
            'configure' => 'entity.pathauto_pattern.collection',
            'recommends' => 
            array (
              0 => 'redirect',
            ),
            'version' => '8.x-1.0-alpha3',
            'core' => '8.x',
            'project' => 'pathauto',
            'datestamp' => 1461007782,
          ),
          'version' => '8.x-1.0-alpha3',
        ),
        'eck.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/eck/eck.info.yml',
          'basename' => 'eck.info.yml',
          'name' => 'Entity Construction Kit',
          'info' => 
          array (
            'name' => 'Entity Construction Kit',
            'type' => 'module',
            'description' => 'ECK (Entity Contruction Kit) allows users to create and administer entity types, bundles and entities from UI',
            'package' => 'ECK',
            'configure' => 'eck.entity_type.list',
            'version' => '8.x-1.0-alpha1',
            'core' => '8.x',
            'project' => 'eck',
            'datestamp' => 1453547666,
          ),
          'version' => '8.x-1.0-alpha1',
        ),
        'views_slideshow_cycle.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/views_slideshow/modules/views_slideshow_cycle/views_slideshow_cycle.info.yml',
          'basename' => 'views_slideshow_cycle.info.yml',
          'name' => 'Views Slideshow Cycle',
          'info' => 
          array (
            'name' => 'Views Slideshow Cycle',
            'type' => 'module',
            'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
            'package' => 'Views',
            'dependencies' => 
            array (
              0 => 'views_slideshow',
            ),
            'version' => '8.x-4.0',
            'core' => '8.x',
            'project' => 'views_slideshow',
            'datestamp' => 1455833943,
          ),
          'version' => '8.x-4.0',
        ),
        'views_slideshow.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/views_slideshow/views_slideshow.info.yml',
          'basename' => 'views_slideshow.info.yml',
          'name' => 'Views Slideshow',
          'info' => 
          array (
            'name' => 'Views Slideshow',
            'type' => 'module',
            'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
            'package' => 'Views',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'version' => '8.x-4.0',
            'core' => '8.x',
            'project' => 'views_slideshow',
            'datestamp' => 1455833943,
          ),
          'version' => '8.x-4.0',
        ),
        'rules_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/rules/tests/modules/rules_test/rules_test.info.yml',
          'basename' => 'rules_test.info.yml',
          'name' => 'Rules test',
          'info' => 
          array (
            'name' => 'Rules test',
            'type' => 'module',
            'description' => 'Support module for the Rules tests.',
            'package' => 'Rules',
            'dependencies' => 
            array (
              0 => 'rules',
            ),
            'version' => '8.x-3.0-alpha1',
            'core' => '8.x',
            'project' => 'rules',
            'datestamp' => 1457387804,
          ),
          'version' => '8.x-3.0-alpha1',
        ),
        'rules_test_default_component.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/rules/tests/modules/rules_test_default_component/rules_test_default_component.info.yml',
          'basename' => 'rules_test_default_component.info.yml',
          'name' => 'Rules test default component',
          'info' => 
          array (
            'name' => 'Rules test default component',
            'type' => 'module',
            'description' => 'Support module for testing Rules config defaults.',
            'package' => 'Rules',
            'dependencies' => 
            array (
              0 => 'rules',
              1 => 'rules_test',
            ),
            'version' => '8.x-3.0-alpha1',
            'core' => '8.x',
            'project' => 'rules',
            'datestamp' => 1457387804,
          ),
          'version' => '8.x-3.0-alpha1',
        ),
        'rules_test_ui_embed.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/rules/tests/modules/rules_test_ui_embed/rules_test_ui_embed.info.yml',
          'basename' => 'rules_test_ui_embed.info.yml',
          'name' => 'Rules UI embedding test',
          'info' => 
          array (
            'name' => 'Rules UI embedding test',
            'type' => 'module',
            'description' => 'A module testing embedding the Rules UI.',
            'package' => 'Rules',
            'dependencies' => 
            array (
              0 => 'rules',
            ),
            'version' => '8.x-3.0-alpha1',
            'core' => '8.x',
            'project' => 'rules',
            'datestamp' => 1457387804,
          ),
          'version' => '8.x-3.0-alpha1',
        ),
        'rules.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/rules/rules.info.yml',
          'basename' => 'rules.info.yml',
          'name' => 'Rules',
          'info' => 
          array (
            'name' => 'Rules',
            'type' => 'module',
            'description' => 'React on events and conditionally evaluate actions.',
            'package' => 'Rules',
            'configure' => 'entity.rules_reaction_rule.collection',
            'version' => '8.x-3.0-alpha1',
            'core' => '8.x',
            'project' => 'rules',
            'datestamp' => 1457387804,
          ),
          'version' => '8.x-3.0-alpha1',
        ),
        'admin_toolbar_tools.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/admin_toolbar/admin_toolbar_tools/admin_toolbar_tools.info.yml',
          'basename' => 'admin_toolbar_tools.info.yml',
          'name' => 'Admin Toolbar Extra Tools',
          'info' => 
          array (
            'name' => 'Admin Toolbar Extra Tools',
            'description' => 'Adds menu links to the Admin Toolbar.',
            'package' => 'Administration',
            'type' => 'module',
            'dependencies' => 
            array (
              0 => 'admin_toolbar',
            ),
            'version' => '8.x-1.16',
            'core' => '8.x',
            'project' => 'admin_toolbar',
            'datestamp' => 1469715840,
          ),
          'version' => '8.x-1.16',
        ),
        'admin_toolbar.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/admin_toolbar/admin_toolbar.info.yml',
          'basename' => 'admin_toolbar.info.yml',
          'name' => 'Admin Toolbar',
          'info' => 
          array (
            'name' => 'Admin Toolbar',
            'description' => 'Provides a drop-down menu interface to the core Drupal Toolbar.',
            'package' => 'Administration',
            'type' => 'module',
            'dependencies' => 
            array (
              0 => 'toolbar',
            ),
            'version' => '8.x-1.16',
            'core' => '8.x',
            'project' => 'admin_toolbar',
            'datestamp' => 1469715840,
          ),
          'version' => '8.x-1.16',
        ),
        'menu_link_attributes.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/menu_link_attributes/menu_link_attributes.info.yml',
          'basename' => 'menu_link_attributes.info.yml',
          'name' => 'Menu Link Attributes',
          'info' => 
          array (
            'name' => 'Menu Link Attributes',
            'type' => 'module',
            'description' => 'Allows you to add attributes to menu links.',
            'dependencies' => 
            array (
              0 => 'menu_link_content',
            ),
            'configure' => 'menu_link_attributes.config',
            'version' => '8.x-1.0-beta3',
            'core' => '8.x',
            'project' => 'menu_link_attributes',
            'datestamp' => 1467719640,
          ),
          'version' => '8.x-1.0-beta3',
        ),
        'color_field.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/color_field/color_field.info.yml',
          'basename' => 'color_field.info.yml',
          'name' => 'Color Field',
          'info' => 
          array (
            'name' => 'Color Field',
            'type' => 'module',
            'description' => 'Provides a color field type to store the color value and opacity',
            'package' => 'Field types',
            'dependencies' => 
            array (
              0 => 'field',
            ),
            'version' => '8.x-2.0-rc1',
            'core' => '8.x',
            'project' => 'color_field',
            'datestamp' => 1447537141,
          ),
          'version' => '8.x-2.0-rc1',
        ),
        'seckit.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/seckit/seckit.info.yml',
          'basename' => 'seckit.info.yml',
          'name' => 'Security Kit',
          'info' => 
          array (
            'name' => 'Security Kit',
            'description' => 'Enhance security of your Drupal website.',
            'package' => 'Security',
            'configure' => 'seckit.settings',
            'type' => 'module',
            'version' => '8.x-1.0-alpha1',
            'core' => '8.x',
            'project' => 'seckit',
            'datestamp' => 1467148740,
          ),
          'version' => '8.x-1.0-alpha1',
        ),
        'admin_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/admin_test/admin_test.info.yml',
          'basename' => 'admin_test.info.yml',
          'name' => 'Admin test',
          'info' => 
          array (
            'name' => 'Admin test',
            'type' => 'module',
            'description' => 'Admin test module',
            'package' => 'Custom',
            'core' => '8.x',
          ),
        ),
        'metatag_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/tests/modules/metatag_test/metatag_test.info.yml',
          'basename' => 'metatag_test.info.yml',
          'name' => 'Metatag test',
          'info' => 
          array (
            'name' => 'Metatag test',
            'type' => 'module',
            'description' => 'Provides support for metatag tests.',
            'package' => 'Testing',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'version' => '8.x-1.0-beta9',
        ),
        'metatag_open_graph.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/metatag_open_graph/metatag_open_graph.info.yml',
          'basename' => 'metatag_open_graph.info.yml',
          'name' => 'Metatag: Open Graph',
          'info' => 
          array (
            'name' => 'Metatag: Open Graph',
            'type' => 'module',
            'description' => 'Provides support for Open Graph Protocol meta tags.',
            'package' => 'SEO',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'version' => '8.x-1.0-beta9',
        ),
        'metatag_verification.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/metatag_verification/metatag_verification.info.yml',
          'basename' => 'metatag_verification.info.yml',
          'name' => 'Metatag: Verification',
          'info' => 
          array (
            'name' => 'Metatag: Verification',
            'type' => 'module',
            'description' => 'Verifies ownership of a site for search engines and other services.',
            'package' => 'SEO',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'version' => '8.x-1.0-beta9',
        ),
        'metatag_google_plus.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/metatag_google_plus/metatag_google_plus.info.yml',
          'basename' => 'metatag_google_plus.info.yml',
          'name' => 'Metatag: Google Plus',
          'info' => 
          array (
            'name' => 'Metatag: Google Plus',
            'type' => 'module',
            'description' => 'Provides support for Google\'s Plus meta tags.',
            'package' => 'SEO',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'version' => '8.x-1.0-beta9',
        ),
        'metatag_twitter_cards.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/metatag_twitter_cards/metatag_twitter_cards.info.yml',
          'basename' => 'metatag_twitter_cards.info.yml',
          'name' => 'Metatag: Twitter Cards',
          'info' => 
          array (
            'name' => 'Metatag: Twitter Cards',
            'type' => 'module',
            'description' => 'Provides support for Twitter\'s Card meta tags.',
            'package' => 'SEO',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'version' => '8.x-1.0-beta9',
        ),
        'metatag.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/metatag.info.yml',
          'basename' => 'metatag.info.yml',
          'name' => 'Metatag',
          'info' => 
          array (
            'name' => 'Metatag',
            'type' => 'module',
            'description' => 'Manage meta tags for all entities.',
            'package' => 'SEO',
            'dependencies' => 
            array (
              0 => 'field',
              1 => 'token',
            ),
            'configure' => 'entity.metatag_defaults.collection',
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'version' => '8.x-1.0-beta9',
        ),
        'druppio_monopage.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/themes/druppio_monopage/druppio_monopage.info.yml',
          'basename' => 'druppio_monopage.info.yml',
          'name' => 'Druppio Drupal 8 MonoPage Responsive Theme',
          'info' => 
          array (
            'name' => 'Druppio Drupal 8 MonoPage Responsive Theme',
            'type' => 'theme',
            'description' => 'Druppio Drupal 8 MnonoPage Responsive Theme based on bootstrap. Developed & Designed by <a href=http://www.druppio.com>Druppio</a>',
            'package' => 'Core',
            'force_export' => false,
            'inherit_layout' => false,
            'scss_support' => true,
            'libraries' => 
            array (
              0 => 'druppio_monopage/bootstrap',
              1 => 'druppio_monopage/druppio-monopage',
              2 => 'druppio_monopage/easing',
            ),
            'regions' => 
            array (
              'navigation' => 'Navigation',
              'navigation_user_menu' => 'Navigation (User menu)',
              'navigation_collapsible' => 'Navigation (Collapsible)',
              'navigation_search' => 'Navigation (Search)',
              'header' => 'Header',
              'highlighted' => 'Highlighted',
              'slideshow' => 'Slideshow',
              'top_bar' => 'Top Bar',
              'content_top' => 'Content Top',
              'help' => 'Help',
              'page_top' => 'Page top',
              'content' => 'Content',
              'page_bottom' => 'Page bottom',
              'content_bottom' => 'Content Bottom',
              'sidebar_first' => 'Primar Sidebar',
              'sidebar_second' => 'Secondary Sidebar',
              'bottom_bar' => 'Bottom Bar',
              'footer' => 'Footer First',
              'footer_second' => 'Footer Second',
              'footer_third' => 'Footer Third',
              'footer_fourth' => 'Footer Fourth',
              'footer_credits' => 'Footer credits',
              'footer_copyright' => 'Footer copyright',
            ),
            'features' => 
            array (
              'logo' => true,
              'name' => true,
              'slogan' => true,
              'node_user_picture' => true,
              'comment_user_picture' => true,
              'comment_user_verification' => true,
              'favicon' => true,
              'main_menu' => true,
              'secondary_menu' => true,
            ),
            'version' => '8.x-1.x',
            'core' => '8.x',
            'datestamp' => 1456164599,
          ),
          'version' => '8.x-1.x',
        ),
        'druppio_monopage_profile.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/druppio_monopage_profile.info.yml',
          'basename' => 'druppio_monopage_profile.info.yml',
          'name' => 'Druppio Monopage Profile',
          'info' => 
          array (
            'name' => 'Druppio Monopage Profile',
            'type' => 'profile',
            'description' => 'Druppio Monopage installation profile.',
            'core' => '8.x',
            'distribution' => 
            array (
              'name' => 'Druppio Monopage',
            ),
            'dependencies' => 
            array (
              0 => 'node',
              1 => 'history',
              2 => 'block',
              3 => 'breakpoint',
              4 => 'ckeditor',
              5 => 'color',
              6 => 'config',
              7 => 'comment',
              8 => 'contextual',
              9 => 'contact',
              10 => 'menu_link_content',
              11 => 'datetime',
              12 => 'block_content',
              13 => 'quickedit',
              14 => 'editor',
              15 => 'help',
              16 => 'image',
              17 => 'menu_ui',
              18 => 'options',
              19 => 'path',
              20 => 'page_cache',
              21 => 'dynamic_page_cache',
              22 => 'taxonomy',
              23 => 'dblog',
              24 => 'search',
              25 => 'shortcut',
              26 => 'toolbar',
              27 => 'field_ui',
              28 => 'file',
              29 => 'rdf',
              30 => 'views',
              31 => 'views_ui',
              32 => 'tour',
              33 => 'automated_cron',
              34 => 'admin_toolbar',
              35 => 'admin_toolbar_tools',
              36 => 'color_field',
              37 => 'contact_block',
              38 => 'ctools',
              39 => 'eck',
              40 => 'image_url_formatter',
              41 => 'menu_link_attributes',
              42 => 'metatag',
              43 => 'pathauto',
              44 => 'rules',
              45 => 'seckit',
              46 => 'token',
              47 => 'views_slideshow',
              48 => 'views_slideshow_cycle',
              49 => 'easy_social',
            ),
            'themes' => 
            array (
              0 => 'druppio_monopage',
              1 => 'bartik',
              2 => 'seven',
            ),
          ),
        ),
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
        'easy_social_example' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/easy_social/contrib/easy_social_example/easy_social_example.module',
          'basename' => 'easy_social_example.module',
          'name' => 'Easy Social Example',
          'info' => 
          array (
            'name' => 'Easy Social Example',
            'type' => 'module',
            'description' => 'Example module that demonstrates how to create a custom Easy Social widget.',
            'dependencies' => 
            array (
              0 => 'easy_social',
            ),
            'package' => 'Examples',
            'configure' => 'admin/config/services/easy-social/example',
            'version' => '8.x-3.0',
            'core' => '8.x',
            'project' => 'easy_social',
            'datestamp' => 1466956140,
          ),
          'schema_version' => 0,
          'version' => '8.x-3.0',
        ),
        'easy_social' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/easy_social/easy_social.module',
          'basename' => 'easy_social.module',
          'name' => 'Easy Social',
          'info' => 
          array (
            'name' => 'Easy Social',
            'type' => 'module',
            'description' => 'Easily add social sharing widgets to your site.',
            'configure' => 'easy_social.settings',
            'version' => '8.x-3.0',
            'core' => '8.x',
            'project' => 'easy_social',
            'datestamp' => 1466956140,
          ),
          'schema_version' => 0,
          'version' => '8.x-3.0',
        ),
        'ctools_views' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/modules/ctools_views/ctools_views.module',
          'basename' => 'ctools_views.module',
          'name' => 'Chaos tools Views',
          'info' => 
          array (
            'name' => 'Chaos tools Views',
            'type' => 'module',
            'description' => 'A set of improvements to the core Views code that allows for greater control over Blocks.',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'block',
              1 => 'views',
            ),
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'schema_version' => 0,
          'version' => '8.x-3.0-alpha26',
        ),
        'ctools' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/ctools.module',
          'basename' => 'ctools.module',
          'name' => 'Chaos tools',
          'info' => 
          array (
            'name' => 'Chaos tools',
            'type' => 'module',
            'description' => 'Provides a number of utility and helper APIs for Drupal developers and site builders.',
            'package' => 'Chaos tool suite',
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'schema_version' => 0,
          'version' => '8.x-3.0-alpha26',
        ),
        'token' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/token/token.module',
          'basename' => 'token.module',
          'name' => 'Token',
          'info' => 
          array (
            'type' => 'module',
            'name' => 'Token',
            'description' => 'Provides a user interface for the Token API and some missing core tokens.',
            'version' => '8.x-1.0-alpha2',
            'core' => '8.x',
            'project' => 'token',
            'datestamp' => 1453363741,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.0-alpha2',
        ),
        'image_url_formatter' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/image_url_formatter/image_url_formatter.module',
          'basename' => 'image_url_formatter.module',
          'name' => 'Image URL Formatter',
          'info' => 
          array (
            'name' => 'Image URL Formatter',
            'type' => 'module',
            'description' => 'Add an URL formatter for image field.',
            'package' => 'Field types',
            'dependencies' => 
            array (
              0 => 'image',
            ),
            'version' => '8.x-1.0-beta1',
            'core' => '8.x',
            'project' => 'image_url_formatter',
            'datestamp' => 1458189819,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.0-beta1',
        ),
        'pathauto' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/pathauto/pathauto.module',
          'basename' => 'pathauto.module',
          'name' => 'Pathauto',
          'info' => 
          array (
            'name' => 'Pathauto',
            'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
            'type' => 'module',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'path',
              2 => 'token',
            ),
            'configure' => 'entity.pathauto_pattern.collection',
            'recommends' => 
            array (
              0 => 'redirect',
            ),
            'version' => '8.x-1.0-alpha3',
            'core' => '8.x',
            'project' => 'pathauto',
            'datestamp' => 1461007782,
          ),
          'schema_version' => '8105',
          'version' => '8.x-1.0-alpha3',
        ),
        'eck' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/eck/eck.module',
          'basename' => 'eck.module',
          'name' => 'Entity Construction Kit',
          'info' => 
          array (
            'name' => 'Entity Construction Kit',
            'type' => 'module',
            'description' => 'ECK (Entity Contruction Kit) allows users to create and administer entity types, bundles and entities from UI',
            'package' => 'ECK',
            'configure' => 'eck.entity_type.list',
            'version' => '8.x-1.0-alpha1',
            'core' => '8.x',
            'project' => 'eck',
            'datestamp' => 1453547666,
          ),
          'schema_version' => '8003',
          'version' => '8.x-1.0-alpha1',
        ),
        'views_slideshow_cycle' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/views_slideshow/modules/views_slideshow_cycle/views_slideshow_cycle.module',
          'basename' => 'views_slideshow_cycle.module',
          'name' => 'Views Slideshow Cycle',
          'info' => 
          array (
            'name' => 'Views Slideshow Cycle',
            'type' => 'module',
            'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
            'package' => 'Views',
            'dependencies' => 
            array (
              0 => 'views_slideshow',
            ),
            'version' => '8.x-4.0',
            'core' => '8.x',
            'project' => 'views_slideshow',
            'datestamp' => 1455833943,
          ),
          'schema_version' => 0,
          'version' => '8.x-4.0',
        ),
        'views_slideshow' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/views_slideshow/views_slideshow.module',
          'basename' => 'views_slideshow.module',
          'name' => 'Views Slideshow',
          'info' => 
          array (
            'name' => 'Views Slideshow',
            'type' => 'module',
            'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
            'package' => 'Views',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'version' => '8.x-4.0',
            'core' => '8.x',
            'project' => 'views_slideshow',
            'datestamp' => 1455833943,
          ),
          'schema_version' => 0,
          'version' => '8.x-4.0',
        ),
        'rules' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/rules/rules.module',
          'basename' => 'rules.module',
          'name' => 'Rules',
          'info' => 
          array (
            'name' => 'Rules',
            'type' => 'module',
            'description' => 'React on events and conditionally evaluate actions.',
            'package' => 'Rules',
            'configure' => 'entity.rules_reaction_rule.collection',
            'version' => '8.x-3.0-alpha1',
            'core' => '8.x',
            'project' => 'rules',
            'datestamp' => 1457387804,
          ),
          'schema_version' => 0,
          'version' => '8.x-3.0-alpha1',
        ),
        'admin_toolbar_tools' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/admin_toolbar/admin_toolbar_tools/admin_toolbar_tools.module',
          'basename' => 'admin_toolbar_tools.module',
          'name' => 'Admin Toolbar Extra Tools',
          'info' => 
          array (
            'name' => 'Admin Toolbar Extra Tools',
            'description' => 'Adds menu links to the Admin Toolbar.',
            'package' => 'Administration',
            'type' => 'module',
            'dependencies' => 
            array (
              0 => 'admin_toolbar',
            ),
            'version' => '8.x-1.16',
            'core' => '8.x',
            'project' => 'admin_toolbar',
            'datestamp' => 1469715840,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.16',
        ),
        'admin_toolbar' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/admin_toolbar/admin_toolbar.module',
          'basename' => 'admin_toolbar.module',
          'name' => 'Admin Toolbar',
          'info' => 
          array (
            'name' => 'Admin Toolbar',
            'description' => 'Provides a drop-down menu interface to the core Drupal Toolbar.',
            'package' => 'Administration',
            'type' => 'module',
            'dependencies' => 
            array (
              0 => 'toolbar',
            ),
            'version' => '8.x-1.16',
            'core' => '8.x',
            'project' => 'admin_toolbar',
            'datestamp' => 1469715840,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.16',
        ),
        'menu_link_attributes' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/menu_link_attributes/menu_link_attributes.module',
          'basename' => 'menu_link_attributes.module',
          'name' => 'Menu Link Attributes',
          'info' => 
          array (
            'name' => 'Menu Link Attributes',
            'type' => 'module',
            'description' => 'Allows you to add attributes to menu links.',
            'dependencies' => 
            array (
              0 => 'menu_link_content',
            ),
            'configure' => 'menu_link_attributes.config',
            'version' => '8.x-1.0-beta3',
            'core' => '8.x',
            'project' => 'menu_link_attributes',
            'datestamp' => 1467719640,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.0-beta3',
        ),
        'color_field' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/color_field/color_field.module',
          'basename' => 'color_field.module',
          'name' => 'Color Field',
          'info' => 
          array (
            'name' => 'Color Field',
            'type' => 'module',
            'description' => 'Provides a color field type to store the color value and opacity',
            'package' => 'Field types',
            'dependencies' => 
            array (
              0 => 'field',
            ),
            'version' => '8.x-2.0-rc1',
            'core' => '8.x',
            'project' => 'color_field',
            'datestamp' => 1447537141,
          ),
          'schema_version' => 0,
          'version' => '8.x-2.0-rc1',
        ),
        'seckit' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/seckit/seckit.module',
          'basename' => 'seckit.module',
          'name' => 'Security Kit',
          'info' => 
          array (
            'name' => 'Security Kit',
            'description' => 'Enhance security of your Drupal website.',
            'package' => 'Security',
            'configure' => 'seckit.settings',
            'type' => 'module',
            'version' => '8.x-1.0-alpha1',
            'core' => '8.x',
            'project' => 'seckit',
            'datestamp' => 1467148740,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.0-alpha1',
        ),
        'metatag_test' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/tests/modules/metatag_test/metatag_test.module',
          'basename' => 'metatag_test.module',
          'name' => 'Metatag test',
          'info' => 
          array (
            'name' => 'Metatag test',
            'type' => 'module',
            'description' => 'Provides support for metatag tests.',
            'package' => 'Testing',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.0-beta9',
        ),
        'metatag' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/metatag.module',
          'basename' => 'metatag.module',
          'name' => 'Metatag',
          'info' => 
          array (
            'name' => 'Metatag',
            'type' => 'module',
            'description' => 'Manage meta tags for all entities.',
            'package' => 'SEO',
            'dependencies' => 
            array (
              0 => 'field',
              1 => 'token',
            ),
            'configure' => 'entity.metatag_defaults.collection',
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'schema_version' => '8107',
          'version' => '8.x-1.0-beta9',
        ),
      ),
      'themes' => 
      array (
        'minimal.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/core/profiles/minimal/minimal.info.yml',
          'basename' => 'minimal.info.yml',
          'name' => 'Minimal',
          'info' => 
          array (
            'name' => 'Minimal',
            'type' => 'profile',
            'description' => 'Build a custom site without pre-configured functionality. Suitable for advanced users.',
            'version' => 'VERSION',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'node',
              1 => 'block',
              2 => 'dblog',
              3 => 'page_cache',
              4 => 'dynamic_page_cache',
            ),
            'themes' => 
            array (
              0 => 'stark',
            ),
          ),
          'version' => '8.3.3-dev',
        ),
        'standard.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/core/profiles/standard/standard.info.yml',
          'basename' => 'standard.info.yml',
          'name' => 'Standard',
          'info' => 
          array (
            'name' => 'Standard',
            'type' => 'profile',
            'description' => 'Install with commonly used features pre-configured.',
            'version' => 'VERSION',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'node',
              1 => 'history',
              2 => 'block',
              3 => 'breakpoint',
              4 => 'ckeditor',
              5 => 'color',
              6 => 'config',
              7 => 'comment',
              8 => 'contextual',
              9 => 'contact',
              10 => 'menu_link_content',
              11 => 'datetime',
              12 => 'block_content',
              13 => 'quickedit',
              14 => 'editor',
              15 => 'help',
              16 => 'image',
              17 => 'menu_ui',
              18 => 'options',
              19 => 'path',
              20 => 'page_cache',
              21 => 'dynamic_page_cache',
              22 => 'taxonomy',
              23 => 'dblog',
              24 => 'search',
              25 => 'shortcut',
              26 => 'toolbar',
              27 => 'field_ui',
              28 => 'file',
              29 => 'rdf',
              30 => 'views',
              31 => 'views_ui',
              32 => 'tour',
              33 => 'automated_cron',
            ),
            'themes' => 
            array (
              0 => 'bartik',
              1 => 'seven',
            ),
          ),
          'version' => '8.3.3-dev',
        ),
        'easy_social_example.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/easy_social/contrib/easy_social_example/easy_social_example.info.yml',
          'basename' => 'easy_social_example.info.yml',
          'name' => 'Easy Social Example',
          'info' => 
          array (
            'name' => 'Easy Social Example',
            'type' => 'module',
            'description' => 'Example module that demonstrates how to create a custom Easy Social widget.',
            'dependencies' => 
            array (
              0 => 'easy_social',
            ),
            'package' => 'Examples',
            'configure' => 'admin/config/services/easy-social/example',
            'version' => '8.x-3.0',
            'core' => '8.x',
            'project' => 'easy_social',
            'datestamp' => 1466956140,
          ),
          'version' => '8.x-3.0',
        ),
        'easy_social.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/easy_social/easy_social.info.yml',
          'basename' => 'easy_social.info.yml',
          'name' => 'Easy Social',
          'info' => 
          array (
            'name' => 'Easy Social',
            'type' => 'module',
            'description' => 'Easily add social sharing widgets to your site.',
            'configure' => 'easy_social.settings',
            'version' => '8.x-3.0',
            'core' => '8.x',
            'project' => 'easy_social',
            'datestamp' => 1466956140,
          ),
          'version' => '8.x-3.0',
        ),
        'ctools_wizard_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/tests/modules/ctools_wizard_test/ctools_wizard_test.info.yml',
          'basename' => 'ctools_wizard_test.info.yml',
          'name' => 'Chaos Wizard Test',
          'info' => 
          array (
            'name' => 'Chaos Wizard Test',
            'type' => 'module',
            'description' => 'Provides testing for ctools wizard',
            'package' => 'Testing',
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'version' => '8.x-3.0-alpha26',
        ),
        'ctools_views_test_views.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/modules/ctools_views/tests/modules/ctools_views_test_views/ctools_views_test_views.info.yml',
          'basename' => 'ctools_views_test_views.info.yml',
          'name' => 'CTools Views test views',
          'info' => 
          array (
            'name' => 'CTools Views test views',
            'type' => 'module',
            'description' => 'Provides default views for CTools Views tests.',
            'package' => 'Testing',
            'dependencies' => 
            array (
              0 => 'views',
              1 => 'block',
              2 => 'entity_test',
              3 => 'ctools_views',
              4 => 'text',
              5 => 'user',
              6 => 'node',
              7 => 'taxonomy',
            ),
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'version' => '8.x-3.0-alpha26',
        ),
        'ctools_views.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/modules/ctools_views/ctools_views.info.yml',
          'basename' => 'ctools_views.info.yml',
          'name' => 'Chaos tools Views',
          'info' => 
          array (
            'name' => 'Chaos tools Views',
            'type' => 'module',
            'description' => 'A set of improvements to the core Views code that allows for greater control over Blocks.',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'block',
              1 => 'views',
            ),
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'version' => '8.x-3.0-alpha26',
        ),
        'ctools_block_field_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/modules/ctools_block/tests/modules/ctools_block_field_test/ctools_block_field_test.info.yml',
          'basename' => 'ctools_block_field_test.info.yml',
          'name' => 'Chaos tools blocks test',
          'info' => 
          array (
            'name' => 'Chaos tools blocks test',
            'type' => 'module',
            'description' => 'Support module for Chaos tools blocks tests.',
            'package' => 'Testing',
            'dependencies' => 
            array (
              0 => 'menu_ui',
              1 => 'node',
              2 => 'path',
              3 => 'text',
              4 => 'user',
            ),
            'features' => true,
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'version' => '8.x-3.0-alpha26',
        ),
        'ctools_block.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/modules/ctools_block/ctools_block.info.yml',
          'basename' => 'ctools_block.info.yml',
          'name' => 'Chaos tools blocks',
          'info' => 
          array (
            'name' => 'Chaos tools blocks',
            'type' => 'module',
            'description' => 'Provides improvements to blocks that will one day be added to Drupal core.',
            'package' => 'Chaos tool suite (Experimental)',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'version' => '8.x-3.0-alpha26',
        ),
        'ctools.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/ctools.info.yml',
          'basename' => 'ctools.info.yml',
          'name' => 'Chaos tools',
          'info' => 
          array (
            'name' => 'Chaos tools',
            'type' => 'module',
            'description' => 'Provides a number of utility and helper APIs for Drupal developers and site builders.',
            'package' => 'Chaos tool suite',
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'version' => '8.x-3.0-alpha26',
        ),
        'contact_block.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/contact_block/contact_block.info.yml',
          'basename' => 'contact_block.info.yml',
          'name' => 'Contact Block',
          'info' => 
          array (
            'name' => 'Contact Block',
            'type' => 'module',
            'description' => 'Provides blocks for Contact module\'s forms.',
            'package' => 'Other',
            'dependencies' => 
            array (
              0 => 'block',
              1 => 'contact',
            ),
            'version' => '8.x-1.2',
            'core' => '8.x',
            'project' => 'contact_block',
            'datestamp' => 1464603244,
          ),
          'version' => '8.x-1.2',
        ),
        'token_user_picture.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/token/tests/modules/token_user_picture/token_user_picture.info.yml',
          'basename' => 'token_user_picture.info.yml',
          'name' => 'Token User picture',
          'info' => 
          array (
            'type' => 'module',
            'name' => 'Token User picture',
            'description' => 'Testing module that provides user pictures field.',
            'package' => 'Testing',
            'hidden' => true,
            'dependencies' => 
            array (
              0 => 'image',
            ),
            'version' => '8.x-1.0-alpha2',
            'core' => '8.x',
            'project' => 'token',
            'datestamp' => 1453363741,
          ),
          'version' => '8.x-1.0-alpha2',
        ),
        'token_module_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/token/tests/modules/token_module_test/token_module_test.info.yml',
          'basename' => 'token_module_test.info.yml',
          'name' => 'Token Module Test',
          'info' => 
          array (
            'type' => 'module',
            'name' => 'Token Module Test',
            'description' => 'Testing module for token functionality.',
            'package' => 'Testing',
            'hidden' => true,
            'version' => '8.x-1.0-alpha2',
            'core' => '8.x',
            'project' => 'token',
            'datestamp' => 1453363741,
          ),
          'version' => '8.x-1.0-alpha2',
        ),
        'token.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/token/token.info.yml',
          'basename' => 'token.info.yml',
          'name' => 'Token',
          'info' => 
          array (
            'type' => 'module',
            'name' => 'Token',
            'description' => 'Provides a user interface for the Token API and some missing core tokens.',
            'version' => '8.x-1.0-alpha2',
            'core' => '8.x',
            'project' => 'token',
            'datestamp' => 1453363741,
          ),
          'version' => '8.x-1.0-alpha2',
        ),
        'image_url_formatter.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/image_url_formatter/image_url_formatter.info.yml',
          'basename' => 'image_url_formatter.info.yml',
          'name' => 'Image URL Formatter',
          'info' => 
          array (
            'name' => 'Image URL Formatter',
            'type' => 'module',
            'description' => 'Add an URL formatter for image field.',
            'package' => 'Field types',
            'dependencies' => 
            array (
              0 => 'image',
            ),
            'version' => '8.x-1.0-beta1',
            'core' => '8.x',
            'project' => 'image_url_formatter',
            'datestamp' => 1458189819,
          ),
          'version' => '8.x-1.0-beta1',
        ),
        'pathauto_views_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/pathauto/tests/modules/pathauto_views_test/pathauto_views_test.info.yml',
          'basename' => 'pathauto_views_test.info.yml',
          'name' => 'Views Test Config',
          'info' => 
          array (
            'name' => 'Views Test Config',
            'type' => 'module',
            'description' => 'Provides default views for tests.',
            'package' => 'Testing',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'version' => '8.x-1.0-alpha3',
            'core' => '8.x',
            'project' => 'pathauto',
            'datestamp' => 1461007782,
          ),
          'version' => '8.x-1.0-alpha3',
        ),
        'pathauto.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/pathauto/pathauto.info.yml',
          'basename' => 'pathauto.info.yml',
          'name' => 'Pathauto',
          'info' => 
          array (
            'name' => 'Pathauto',
            'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
            'type' => 'module',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'path',
              2 => 'token',
            ),
            'configure' => 'entity.pathauto_pattern.collection',
            'recommends' => 
            array (
              0 => 'redirect',
            ),
            'version' => '8.x-1.0-alpha3',
            'core' => '8.x',
            'project' => 'pathauto',
            'datestamp' => 1461007782,
          ),
          'version' => '8.x-1.0-alpha3',
        ),
        'eck.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/eck/eck.info.yml',
          'basename' => 'eck.info.yml',
          'name' => 'Entity Construction Kit',
          'info' => 
          array (
            'name' => 'Entity Construction Kit',
            'type' => 'module',
            'description' => 'ECK (Entity Contruction Kit) allows users to create and administer entity types, bundles and entities from UI',
            'package' => 'ECK',
            'configure' => 'eck.entity_type.list',
            'version' => '8.x-1.0-alpha1',
            'core' => '8.x',
            'project' => 'eck',
            'datestamp' => 1453547666,
          ),
          'version' => '8.x-1.0-alpha1',
        ),
        'views_slideshow_cycle.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/views_slideshow/modules/views_slideshow_cycle/views_slideshow_cycle.info.yml',
          'basename' => 'views_slideshow_cycle.info.yml',
          'name' => 'Views Slideshow Cycle',
          'info' => 
          array (
            'name' => 'Views Slideshow Cycle',
            'type' => 'module',
            'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
            'package' => 'Views',
            'dependencies' => 
            array (
              0 => 'views_slideshow',
            ),
            'version' => '8.x-4.0',
            'core' => '8.x',
            'project' => 'views_slideshow',
            'datestamp' => 1455833943,
          ),
          'version' => '8.x-4.0',
        ),
        'views_slideshow.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/views_slideshow/views_slideshow.info.yml',
          'basename' => 'views_slideshow.info.yml',
          'name' => 'Views Slideshow',
          'info' => 
          array (
            'name' => 'Views Slideshow',
            'type' => 'module',
            'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
            'package' => 'Views',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'version' => '8.x-4.0',
            'core' => '8.x',
            'project' => 'views_slideshow',
            'datestamp' => 1455833943,
          ),
          'version' => '8.x-4.0',
        ),
        'rules_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/rules/tests/modules/rules_test/rules_test.info.yml',
          'basename' => 'rules_test.info.yml',
          'name' => 'Rules test',
          'info' => 
          array (
            'name' => 'Rules test',
            'type' => 'module',
            'description' => 'Support module for the Rules tests.',
            'package' => 'Rules',
            'dependencies' => 
            array (
              0 => 'rules',
            ),
            'version' => '8.x-3.0-alpha1',
            'core' => '8.x',
            'project' => 'rules',
            'datestamp' => 1457387804,
          ),
          'version' => '8.x-3.0-alpha1',
        ),
        'rules_test_default_component.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/rules/tests/modules/rules_test_default_component/rules_test_default_component.info.yml',
          'basename' => 'rules_test_default_component.info.yml',
          'name' => 'Rules test default component',
          'info' => 
          array (
            'name' => 'Rules test default component',
            'type' => 'module',
            'description' => 'Support module for testing Rules config defaults.',
            'package' => 'Rules',
            'dependencies' => 
            array (
              0 => 'rules',
              1 => 'rules_test',
            ),
            'version' => '8.x-3.0-alpha1',
            'core' => '8.x',
            'project' => 'rules',
            'datestamp' => 1457387804,
          ),
          'version' => '8.x-3.0-alpha1',
        ),
        'rules_test_ui_embed.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/rules/tests/modules/rules_test_ui_embed/rules_test_ui_embed.info.yml',
          'basename' => 'rules_test_ui_embed.info.yml',
          'name' => 'Rules UI embedding test',
          'info' => 
          array (
            'name' => 'Rules UI embedding test',
            'type' => 'module',
            'description' => 'A module testing embedding the Rules UI.',
            'package' => 'Rules',
            'dependencies' => 
            array (
              0 => 'rules',
            ),
            'version' => '8.x-3.0-alpha1',
            'core' => '8.x',
            'project' => 'rules',
            'datestamp' => 1457387804,
          ),
          'version' => '8.x-3.0-alpha1',
        ),
        'rules.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/rules/rules.info.yml',
          'basename' => 'rules.info.yml',
          'name' => 'Rules',
          'info' => 
          array (
            'name' => 'Rules',
            'type' => 'module',
            'description' => 'React on events and conditionally evaluate actions.',
            'package' => 'Rules',
            'configure' => 'entity.rules_reaction_rule.collection',
            'version' => '8.x-3.0-alpha1',
            'core' => '8.x',
            'project' => 'rules',
            'datestamp' => 1457387804,
          ),
          'version' => '8.x-3.0-alpha1',
        ),
        'admin_toolbar_tools.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/admin_toolbar/admin_toolbar_tools/admin_toolbar_tools.info.yml',
          'basename' => 'admin_toolbar_tools.info.yml',
          'name' => 'Admin Toolbar Extra Tools',
          'info' => 
          array (
            'name' => 'Admin Toolbar Extra Tools',
            'description' => 'Adds menu links to the Admin Toolbar.',
            'package' => 'Administration',
            'type' => 'module',
            'dependencies' => 
            array (
              0 => 'admin_toolbar',
            ),
            'version' => '8.x-1.16',
            'core' => '8.x',
            'project' => 'admin_toolbar',
            'datestamp' => 1469715840,
          ),
          'version' => '8.x-1.16',
        ),
        'admin_toolbar.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/admin_toolbar/admin_toolbar.info.yml',
          'basename' => 'admin_toolbar.info.yml',
          'name' => 'Admin Toolbar',
          'info' => 
          array (
            'name' => 'Admin Toolbar',
            'description' => 'Provides a drop-down menu interface to the core Drupal Toolbar.',
            'package' => 'Administration',
            'type' => 'module',
            'dependencies' => 
            array (
              0 => 'toolbar',
            ),
            'version' => '8.x-1.16',
            'core' => '8.x',
            'project' => 'admin_toolbar',
            'datestamp' => 1469715840,
          ),
          'version' => '8.x-1.16',
        ),
        'menu_link_attributes.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/menu_link_attributes/menu_link_attributes.info.yml',
          'basename' => 'menu_link_attributes.info.yml',
          'name' => 'Menu Link Attributes',
          'info' => 
          array (
            'name' => 'Menu Link Attributes',
            'type' => 'module',
            'description' => 'Allows you to add attributes to menu links.',
            'dependencies' => 
            array (
              0 => 'menu_link_content',
            ),
            'configure' => 'menu_link_attributes.config',
            'version' => '8.x-1.0-beta3',
            'core' => '8.x',
            'project' => 'menu_link_attributes',
            'datestamp' => 1467719640,
          ),
          'version' => '8.x-1.0-beta3',
        ),
        'color_field.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/color_field/color_field.info.yml',
          'basename' => 'color_field.info.yml',
          'name' => 'Color Field',
          'info' => 
          array (
            'name' => 'Color Field',
            'type' => 'module',
            'description' => 'Provides a color field type to store the color value and opacity',
            'package' => 'Field types',
            'dependencies' => 
            array (
              0 => 'field',
            ),
            'version' => '8.x-2.0-rc1',
            'core' => '8.x',
            'project' => 'color_field',
            'datestamp' => 1447537141,
          ),
          'version' => '8.x-2.0-rc1',
        ),
        'seckit.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/seckit/seckit.info.yml',
          'basename' => 'seckit.info.yml',
          'name' => 'Security Kit',
          'info' => 
          array (
            'name' => 'Security Kit',
            'description' => 'Enhance security of your Drupal website.',
            'package' => 'Security',
            'configure' => 'seckit.settings',
            'type' => 'module',
            'version' => '8.x-1.0-alpha1',
            'core' => '8.x',
            'project' => 'seckit',
            'datestamp' => 1467148740,
          ),
          'version' => '8.x-1.0-alpha1',
        ),
        'admin_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/admin_test/admin_test.info.yml',
          'basename' => 'admin_test.info.yml',
          'name' => 'Admin test',
          'info' => 
          array (
            'name' => 'Admin test',
            'type' => 'module',
            'description' => 'Admin test module',
            'package' => 'Custom',
            'core' => '8.x',
          ),
        ),
        'metatag_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/tests/modules/metatag_test/metatag_test.info.yml',
          'basename' => 'metatag_test.info.yml',
          'name' => 'Metatag test',
          'info' => 
          array (
            'name' => 'Metatag test',
            'type' => 'module',
            'description' => 'Provides support for metatag tests.',
            'package' => 'Testing',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'version' => '8.x-1.0-beta9',
        ),
        'metatag_open_graph.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/metatag_open_graph/metatag_open_graph.info.yml',
          'basename' => 'metatag_open_graph.info.yml',
          'name' => 'Metatag: Open Graph',
          'info' => 
          array (
            'name' => 'Metatag: Open Graph',
            'type' => 'module',
            'description' => 'Provides support for Open Graph Protocol meta tags.',
            'package' => 'SEO',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'version' => '8.x-1.0-beta9',
        ),
        'metatag_verification.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/metatag_verification/metatag_verification.info.yml',
          'basename' => 'metatag_verification.info.yml',
          'name' => 'Metatag: Verification',
          'info' => 
          array (
            'name' => 'Metatag: Verification',
            'type' => 'module',
            'description' => 'Verifies ownership of a site for search engines and other services.',
            'package' => 'SEO',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'version' => '8.x-1.0-beta9',
        ),
        'metatag_google_plus.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/metatag_google_plus/metatag_google_plus.info.yml',
          'basename' => 'metatag_google_plus.info.yml',
          'name' => 'Metatag: Google Plus',
          'info' => 
          array (
            'name' => 'Metatag: Google Plus',
            'type' => 'module',
            'description' => 'Provides support for Google\'s Plus meta tags.',
            'package' => 'SEO',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'version' => '8.x-1.0-beta9',
        ),
        'metatag_twitter_cards.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/metatag_twitter_cards/metatag_twitter_cards.info.yml',
          'basename' => 'metatag_twitter_cards.info.yml',
          'name' => 'Metatag: Twitter Cards',
          'info' => 
          array (
            'name' => 'Metatag: Twitter Cards',
            'type' => 'module',
            'description' => 'Provides support for Twitter\'s Card meta tags.',
            'package' => 'SEO',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'version' => '8.x-1.0-beta9',
        ),
        'metatag.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/metatag.info.yml',
          'basename' => 'metatag.info.yml',
          'name' => 'Metatag',
          'info' => 
          array (
            'name' => 'Metatag',
            'type' => 'module',
            'description' => 'Manage meta tags for all entities.',
            'package' => 'SEO',
            'dependencies' => 
            array (
              0 => 'field',
              1 => 'token',
            ),
            'configure' => 'entity.metatag_defaults.collection',
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'version' => '8.x-1.0-beta9',
        ),
        'druppio_monopage.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/themes/druppio_monopage/druppio_monopage.info.yml',
          'basename' => 'druppio_monopage.info.yml',
          'name' => 'Druppio Drupal 8 MonoPage Responsive Theme',
          'info' => 
          array (
            'name' => 'Druppio Drupal 8 MonoPage Responsive Theme',
            'type' => 'theme',
            'description' => 'Druppio Drupal 8 MnonoPage Responsive Theme based on bootstrap. Developed & Designed by <a href=http://www.druppio.com>Druppio</a>',
            'package' => 'Core',
            'force_export' => false,
            'inherit_layout' => false,
            'scss_support' => true,
            'libraries' => 
            array (
              0 => 'druppio_monopage/bootstrap',
              1 => 'druppio_monopage/druppio-monopage',
              2 => 'druppio_monopage/easing',
            ),
            'regions' => 
            array (
              'navigation' => 'Navigation',
              'navigation_user_menu' => 'Navigation (User menu)',
              'navigation_collapsible' => 'Navigation (Collapsible)',
              'navigation_search' => 'Navigation (Search)',
              'header' => 'Header',
              'highlighted' => 'Highlighted',
              'slideshow' => 'Slideshow',
              'top_bar' => 'Top Bar',
              'content_top' => 'Content Top',
              'help' => 'Help',
              'page_top' => 'Page top',
              'content' => 'Content',
              'page_bottom' => 'Page bottom',
              'content_bottom' => 'Content Bottom',
              'sidebar_first' => 'Primar Sidebar',
              'sidebar_second' => 'Secondary Sidebar',
              'bottom_bar' => 'Bottom Bar',
              'footer' => 'Footer First',
              'footer_second' => 'Footer Second',
              'footer_third' => 'Footer Third',
              'footer_fourth' => 'Footer Fourth',
              'footer_credits' => 'Footer credits',
              'footer_copyright' => 'Footer copyright',
            ),
            'features' => 
            array (
              'logo' => true,
              'name' => true,
              'slogan' => true,
              'node_user_picture' => true,
              'comment_user_picture' => true,
              'comment_user_verification' => true,
              'favicon' => true,
              'main_menu' => true,
              'secondary_menu' => true,
            ),
            'version' => '8.x-1.x',
            'core' => '8.x',
            'datestamp' => 1456164599,
          ),
          'version' => '8.x-1.x',
        ),
        'druppio_monopage_profile.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/druppio_monopage_profile.info.yml',
          'basename' => 'druppio_monopage_profile.info.yml',
          'name' => 'Druppio Monopage Profile',
          'info' => 
          array (
            'name' => 'Druppio Monopage Profile',
            'type' => 'profile',
            'description' => 'Druppio Monopage installation profile.',
            'core' => '8.x',
            'distribution' => 
            array (
              'name' => 'Druppio Monopage',
            ),
            'dependencies' => 
            array (
              0 => 'node',
              1 => 'history',
              2 => 'block',
              3 => 'breakpoint',
              4 => 'ckeditor',
              5 => 'color',
              6 => 'config',
              7 => 'comment',
              8 => 'contextual',
              9 => 'contact',
              10 => 'menu_link_content',
              11 => 'datetime',
              12 => 'block_content',
              13 => 'quickedit',
              14 => 'editor',
              15 => 'help',
              16 => 'image',
              17 => 'menu_ui',
              18 => 'options',
              19 => 'path',
              20 => 'page_cache',
              21 => 'dynamic_page_cache',
              22 => 'taxonomy',
              23 => 'dblog',
              24 => 'search',
              25 => 'shortcut',
              26 => 'toolbar',
              27 => 'field_ui',
              28 => 'file',
              29 => 'rdf',
              30 => 'views',
              31 => 'views_ui',
              32 => 'tour',
              33 => 'automated_cron',
              34 => 'admin_toolbar',
              35 => 'admin_toolbar_tools',
              36 => 'color_field',
              37 => 'contact_block',
              38 => 'ctools',
              39 => 'eck',
              40 => 'image_url_formatter',
              41 => 'menu_link_attributes',
              42 => 'metatag',
              43 => 'pathauto',
              44 => 'rules',
              45 => 'seckit',
              46 => 'token',
              47 => 'views_slideshow',
              48 => 'views_slideshow_cycle',
              49 => 'easy_social',
            ),
            'themes' => 
            array (
              0 => 'druppio_monopage',
              1 => 'bartik',
              2 => 'seven',
            ),
          ),
        ),
      ),
    ),
    'druppio_monopage_profile' => 
    array (
      'modules' => 
      array (
        'easy_social_example' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/easy_social/contrib/easy_social_example/easy_social_example.module',
          'basename' => 'easy_social_example.module',
          'name' => 'Easy Social Example',
          'info' => 
          array (
            'name' => 'Easy Social Example',
            'type' => 'module',
            'description' => 'Example module that demonstrates how to create a custom Easy Social widget.',
            'dependencies' => 
            array (
              0 => 'easy_social',
            ),
            'package' => 'Examples',
            'configure' => 'admin/config/services/easy-social/example',
            'version' => '8.x-3.0',
            'core' => '8.x',
            'project' => 'easy_social',
            'datestamp' => 1466956140,
          ),
          'schema_version' => 0,
          'version' => '8.x-3.0',
        ),
        'easy_social' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/easy_social/easy_social.module',
          'basename' => 'easy_social.module',
          'name' => 'Easy Social',
          'info' => 
          array (
            'name' => 'Easy Social',
            'type' => 'module',
            'description' => 'Easily add social sharing widgets to your site.',
            'configure' => 'easy_social.settings',
            'version' => '8.x-3.0',
            'core' => '8.x',
            'project' => 'easy_social',
            'datestamp' => 1466956140,
          ),
          'schema_version' => 0,
          'version' => '8.x-3.0',
        ),
        'ctools_views' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/modules/ctools_views/ctools_views.module',
          'basename' => 'ctools_views.module',
          'name' => 'Chaos tools Views',
          'info' => 
          array (
            'name' => 'Chaos tools Views',
            'type' => 'module',
            'description' => 'A set of improvements to the core Views code that allows for greater control over Blocks.',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'block',
              1 => 'views',
            ),
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'schema_version' => 0,
          'version' => '8.x-3.0-alpha26',
        ),
        'ctools' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/ctools.module',
          'basename' => 'ctools.module',
          'name' => 'Chaos tools',
          'info' => 
          array (
            'name' => 'Chaos tools',
            'type' => 'module',
            'description' => 'Provides a number of utility and helper APIs for Drupal developers and site builders.',
            'package' => 'Chaos tool suite',
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'schema_version' => 0,
          'version' => '8.x-3.0-alpha26',
        ),
        'token' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/token/token.module',
          'basename' => 'token.module',
          'name' => 'Token',
          'info' => 
          array (
            'type' => 'module',
            'name' => 'Token',
            'description' => 'Provides a user interface for the Token API and some missing core tokens.',
            'version' => '8.x-1.0-alpha2',
            'core' => '8.x',
            'project' => 'token',
            'datestamp' => 1453363741,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.0-alpha2',
        ),
        'image_url_formatter' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/image_url_formatter/image_url_formatter.module',
          'basename' => 'image_url_formatter.module',
          'name' => 'Image URL Formatter',
          'info' => 
          array (
            'name' => 'Image URL Formatter',
            'type' => 'module',
            'description' => 'Add an URL formatter for image field.',
            'package' => 'Field types',
            'dependencies' => 
            array (
              0 => 'image',
            ),
            'version' => '8.x-1.0-beta1',
            'core' => '8.x',
            'project' => 'image_url_formatter',
            'datestamp' => 1458189819,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.0-beta1',
        ),
        'pathauto' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/pathauto/pathauto.module',
          'basename' => 'pathauto.module',
          'name' => 'Pathauto',
          'info' => 
          array (
            'name' => 'Pathauto',
            'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
            'type' => 'module',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'path',
              2 => 'token',
            ),
            'configure' => 'entity.pathauto_pattern.collection',
            'recommends' => 
            array (
              0 => 'redirect',
            ),
            'version' => '8.x-1.0-alpha3',
            'core' => '8.x',
            'project' => 'pathauto',
            'datestamp' => 1461007782,
          ),
          'schema_version' => '8105',
          'version' => '8.x-1.0-alpha3',
        ),
        'eck' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/eck/eck.module',
          'basename' => 'eck.module',
          'name' => 'Entity Construction Kit',
          'info' => 
          array (
            'name' => 'Entity Construction Kit',
            'type' => 'module',
            'description' => 'ECK (Entity Contruction Kit) allows users to create and administer entity types, bundles and entities from UI',
            'package' => 'ECK',
            'configure' => 'eck.entity_type.list',
            'version' => '8.x-1.0-alpha1',
            'core' => '8.x',
            'project' => 'eck',
            'datestamp' => 1453547666,
          ),
          'schema_version' => '8003',
          'version' => '8.x-1.0-alpha1',
        ),
        'views_slideshow_cycle' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/views_slideshow/modules/views_slideshow_cycle/views_slideshow_cycle.module',
          'basename' => 'views_slideshow_cycle.module',
          'name' => 'Views Slideshow Cycle',
          'info' => 
          array (
            'name' => 'Views Slideshow Cycle',
            'type' => 'module',
            'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
            'package' => 'Views',
            'dependencies' => 
            array (
              0 => 'views_slideshow',
            ),
            'version' => '8.x-4.0',
            'core' => '8.x',
            'project' => 'views_slideshow',
            'datestamp' => 1455833943,
          ),
          'schema_version' => 0,
          'version' => '8.x-4.0',
        ),
        'views_slideshow' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/views_slideshow/views_slideshow.module',
          'basename' => 'views_slideshow.module',
          'name' => 'Views Slideshow',
          'info' => 
          array (
            'name' => 'Views Slideshow',
            'type' => 'module',
            'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
            'package' => 'Views',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'version' => '8.x-4.0',
            'core' => '8.x',
            'project' => 'views_slideshow',
            'datestamp' => 1455833943,
          ),
          'schema_version' => 0,
          'version' => '8.x-4.0',
        ),
        'rules' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/rules/rules.module',
          'basename' => 'rules.module',
          'name' => 'Rules',
          'info' => 
          array (
            'name' => 'Rules',
            'type' => 'module',
            'description' => 'React on events and conditionally evaluate actions.',
            'package' => 'Rules',
            'configure' => 'entity.rules_reaction_rule.collection',
            'version' => '8.x-3.0-alpha1',
            'core' => '8.x',
            'project' => 'rules',
            'datestamp' => 1457387804,
          ),
          'schema_version' => 0,
          'version' => '8.x-3.0-alpha1',
        ),
        'admin_toolbar_tools' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/admin_toolbar/admin_toolbar_tools/admin_toolbar_tools.module',
          'basename' => 'admin_toolbar_tools.module',
          'name' => 'Admin Toolbar Extra Tools',
          'info' => 
          array (
            'name' => 'Admin Toolbar Extra Tools',
            'description' => 'Adds menu links to the Admin Toolbar.',
            'package' => 'Administration',
            'type' => 'module',
            'dependencies' => 
            array (
              0 => 'admin_toolbar',
            ),
            'version' => '8.x-1.16',
            'core' => '8.x',
            'project' => 'admin_toolbar',
            'datestamp' => 1469715840,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.16',
        ),
        'admin_toolbar' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/admin_toolbar/admin_toolbar.module',
          'basename' => 'admin_toolbar.module',
          'name' => 'Admin Toolbar',
          'info' => 
          array (
            'name' => 'Admin Toolbar',
            'description' => 'Provides a drop-down menu interface to the core Drupal Toolbar.',
            'package' => 'Administration',
            'type' => 'module',
            'dependencies' => 
            array (
              0 => 'toolbar',
            ),
            'version' => '8.x-1.16',
            'core' => '8.x',
            'project' => 'admin_toolbar',
            'datestamp' => 1469715840,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.16',
        ),
        'menu_link_attributes' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/menu_link_attributes/menu_link_attributes.module',
          'basename' => 'menu_link_attributes.module',
          'name' => 'Menu Link Attributes',
          'info' => 
          array (
            'name' => 'Menu Link Attributes',
            'type' => 'module',
            'description' => 'Allows you to add attributes to menu links.',
            'dependencies' => 
            array (
              0 => 'menu_link_content',
            ),
            'configure' => 'menu_link_attributes.config',
            'version' => '8.x-1.0-beta3',
            'core' => '8.x',
            'project' => 'menu_link_attributes',
            'datestamp' => 1467719640,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.0-beta3',
        ),
        'color_field' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/color_field/color_field.module',
          'basename' => 'color_field.module',
          'name' => 'Color Field',
          'info' => 
          array (
            'name' => 'Color Field',
            'type' => 'module',
            'description' => 'Provides a color field type to store the color value and opacity',
            'package' => 'Field types',
            'dependencies' => 
            array (
              0 => 'field',
            ),
            'version' => '8.x-2.0-rc1',
            'core' => '8.x',
            'project' => 'color_field',
            'datestamp' => 1447537141,
          ),
          'schema_version' => 0,
          'version' => '8.x-2.0-rc1',
        ),
        'seckit' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/seckit/seckit.module',
          'basename' => 'seckit.module',
          'name' => 'Security Kit',
          'info' => 
          array (
            'name' => 'Security Kit',
            'description' => 'Enhance security of your Drupal website.',
            'package' => 'Security',
            'configure' => 'seckit.settings',
            'type' => 'module',
            'version' => '8.x-1.0-alpha1',
            'core' => '8.x',
            'project' => 'seckit',
            'datestamp' => 1467148740,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.0-alpha1',
        ),
        'metatag_test' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/tests/modules/metatag_test/metatag_test.module',
          'basename' => 'metatag_test.module',
          'name' => 'Metatag test',
          'info' => 
          array (
            'name' => 'Metatag test',
            'type' => 'module',
            'description' => 'Provides support for metatag tests.',
            'package' => 'Testing',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'schema_version' => 0,
          'version' => '8.x-1.0-beta9',
        ),
        'metatag' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/metatag.module',
          'basename' => 'metatag.module',
          'name' => 'Metatag',
          'info' => 
          array (
            'name' => 'Metatag',
            'type' => 'module',
            'description' => 'Manage meta tags for all entities.',
            'package' => 'SEO',
            'dependencies' => 
            array (
              0 => 'field',
              1 => 'token',
            ),
            'configure' => 'entity.metatag_defaults.collection',
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'schema_version' => '8107',
          'version' => '8.x-1.0-beta9',
        ),
      ),
      'themes' => 
      array (
        'minimal.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/core/profiles/minimal/minimal.info.yml',
          'basename' => 'minimal.info.yml',
          'name' => 'Minimal',
          'info' => 
          array (
            'name' => 'Minimal',
            'type' => 'profile',
            'description' => 'Build a custom site without pre-configured functionality. Suitable for advanced users.',
            'version' => 'VERSION',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'node',
              1 => 'block',
              2 => 'dblog',
              3 => 'page_cache',
              4 => 'dynamic_page_cache',
            ),
            'themes' => 
            array (
              0 => 'stark',
            ),
          ),
          'version' => '8.3.3-dev',
        ),
        'standard.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/core/profiles/standard/standard.info.yml',
          'basename' => 'standard.info.yml',
          'name' => 'Standard',
          'info' => 
          array (
            'name' => 'Standard',
            'type' => 'profile',
            'description' => 'Install with commonly used features pre-configured.',
            'version' => 'VERSION',
            'core' => '8.x',
            'dependencies' => 
            array (
              0 => 'node',
              1 => 'history',
              2 => 'block',
              3 => 'breakpoint',
              4 => 'ckeditor',
              5 => 'color',
              6 => 'config',
              7 => 'comment',
              8 => 'contextual',
              9 => 'contact',
              10 => 'menu_link_content',
              11 => 'datetime',
              12 => 'block_content',
              13 => 'quickedit',
              14 => 'editor',
              15 => 'help',
              16 => 'image',
              17 => 'menu_ui',
              18 => 'options',
              19 => 'path',
              20 => 'page_cache',
              21 => 'dynamic_page_cache',
              22 => 'taxonomy',
              23 => 'dblog',
              24 => 'search',
              25 => 'shortcut',
              26 => 'toolbar',
              27 => 'field_ui',
              28 => 'file',
              29 => 'rdf',
              30 => 'views',
              31 => 'views_ui',
              32 => 'tour',
              33 => 'automated_cron',
            ),
            'themes' => 
            array (
              0 => 'bartik',
              1 => 'seven',
            ),
          ),
          'version' => '8.3.3-dev',
        ),
        'easy_social_example.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/easy_social/contrib/easy_social_example/easy_social_example.info.yml',
          'basename' => 'easy_social_example.info.yml',
          'name' => 'Easy Social Example',
          'info' => 
          array (
            'name' => 'Easy Social Example',
            'type' => 'module',
            'description' => 'Example module that demonstrates how to create a custom Easy Social widget.',
            'dependencies' => 
            array (
              0 => 'easy_social',
            ),
            'package' => 'Examples',
            'configure' => 'admin/config/services/easy-social/example',
            'version' => '8.x-3.0',
            'core' => '8.x',
            'project' => 'easy_social',
            'datestamp' => 1466956140,
          ),
          'version' => '8.x-3.0',
        ),
        'easy_social.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/easy_social/easy_social.info.yml',
          'basename' => 'easy_social.info.yml',
          'name' => 'Easy Social',
          'info' => 
          array (
            'name' => 'Easy Social',
            'type' => 'module',
            'description' => 'Easily add social sharing widgets to your site.',
            'configure' => 'easy_social.settings',
            'version' => '8.x-3.0',
            'core' => '8.x',
            'project' => 'easy_social',
            'datestamp' => 1466956140,
          ),
          'version' => '8.x-3.0',
        ),
        'ctools_wizard_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/tests/modules/ctools_wizard_test/ctools_wizard_test.info.yml',
          'basename' => 'ctools_wizard_test.info.yml',
          'name' => 'Chaos Wizard Test',
          'info' => 
          array (
            'name' => 'Chaos Wizard Test',
            'type' => 'module',
            'description' => 'Provides testing for ctools wizard',
            'package' => 'Testing',
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'version' => '8.x-3.0-alpha26',
        ),
        'ctools_views_test_views.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/modules/ctools_views/tests/modules/ctools_views_test_views/ctools_views_test_views.info.yml',
          'basename' => 'ctools_views_test_views.info.yml',
          'name' => 'CTools Views test views',
          'info' => 
          array (
            'name' => 'CTools Views test views',
            'type' => 'module',
            'description' => 'Provides default views for CTools Views tests.',
            'package' => 'Testing',
            'dependencies' => 
            array (
              0 => 'views',
              1 => 'block',
              2 => 'entity_test',
              3 => 'ctools_views',
              4 => 'text',
              5 => 'user',
              6 => 'node',
              7 => 'taxonomy',
            ),
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'version' => '8.x-3.0-alpha26',
        ),
        'ctools_views.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/modules/ctools_views/ctools_views.info.yml',
          'basename' => 'ctools_views.info.yml',
          'name' => 'Chaos tools Views',
          'info' => 
          array (
            'name' => 'Chaos tools Views',
            'type' => 'module',
            'description' => 'A set of improvements to the core Views code that allows for greater control over Blocks.',
            'package' => 'Chaos tool suite',
            'dependencies' => 
            array (
              0 => 'block',
              1 => 'views',
            ),
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'version' => '8.x-3.0-alpha26',
        ),
        'ctools_block_field_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/modules/ctools_block/tests/modules/ctools_block_field_test/ctools_block_field_test.info.yml',
          'basename' => 'ctools_block_field_test.info.yml',
          'name' => 'Chaos tools blocks test',
          'info' => 
          array (
            'name' => 'Chaos tools blocks test',
            'type' => 'module',
            'description' => 'Support module for Chaos tools blocks tests.',
            'package' => 'Testing',
            'dependencies' => 
            array (
              0 => 'menu_ui',
              1 => 'node',
              2 => 'path',
              3 => 'text',
              4 => 'user',
            ),
            'features' => true,
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'version' => '8.x-3.0-alpha26',
        ),
        'ctools_block.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/modules/ctools_block/ctools_block.info.yml',
          'basename' => 'ctools_block.info.yml',
          'name' => 'Chaos tools blocks',
          'info' => 
          array (
            'name' => 'Chaos tools blocks',
            'type' => 'module',
            'description' => 'Provides improvements to blocks that will one day be added to Drupal core.',
            'package' => 'Chaos tool suite (Experimental)',
            'dependencies' => 
            array (
              0 => 'ctools',
            ),
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'version' => '8.x-3.0-alpha26',
        ),
        'ctools.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/ctools/ctools.info.yml',
          'basename' => 'ctools.info.yml',
          'name' => 'Chaos tools',
          'info' => 
          array (
            'name' => 'Chaos tools',
            'type' => 'module',
            'description' => 'Provides a number of utility and helper APIs for Drupal developers and site builders.',
            'package' => 'Chaos tool suite',
            'version' => '8.x-3.0-alpha26',
            'core' => '8.x',
            'project' => 'ctools',
            'datestamp' => 1462560866,
          ),
          'version' => '8.x-3.0-alpha26',
        ),
        'contact_block.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/contact_block/contact_block.info.yml',
          'basename' => 'contact_block.info.yml',
          'name' => 'Contact Block',
          'info' => 
          array (
            'name' => 'Contact Block',
            'type' => 'module',
            'description' => 'Provides blocks for Contact module\'s forms.',
            'package' => 'Other',
            'dependencies' => 
            array (
              0 => 'block',
              1 => 'contact',
            ),
            'version' => '8.x-1.2',
            'core' => '8.x',
            'project' => 'contact_block',
            'datestamp' => 1464603244,
          ),
          'version' => '8.x-1.2',
        ),
        'token_user_picture.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/token/tests/modules/token_user_picture/token_user_picture.info.yml',
          'basename' => 'token_user_picture.info.yml',
          'name' => 'Token User picture',
          'info' => 
          array (
            'type' => 'module',
            'name' => 'Token User picture',
            'description' => 'Testing module that provides user pictures field.',
            'package' => 'Testing',
            'hidden' => true,
            'dependencies' => 
            array (
              0 => 'image',
            ),
            'version' => '8.x-1.0-alpha2',
            'core' => '8.x',
            'project' => 'token',
            'datestamp' => 1453363741,
          ),
          'version' => '8.x-1.0-alpha2',
        ),
        'token_module_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/token/tests/modules/token_module_test/token_module_test.info.yml',
          'basename' => 'token_module_test.info.yml',
          'name' => 'Token Module Test',
          'info' => 
          array (
            'type' => 'module',
            'name' => 'Token Module Test',
            'description' => 'Testing module for token functionality.',
            'package' => 'Testing',
            'hidden' => true,
            'version' => '8.x-1.0-alpha2',
            'core' => '8.x',
            'project' => 'token',
            'datestamp' => 1453363741,
          ),
          'version' => '8.x-1.0-alpha2',
        ),
        'token.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/token/token.info.yml',
          'basename' => 'token.info.yml',
          'name' => 'Token',
          'info' => 
          array (
            'type' => 'module',
            'name' => 'Token',
            'description' => 'Provides a user interface for the Token API and some missing core tokens.',
            'version' => '8.x-1.0-alpha2',
            'core' => '8.x',
            'project' => 'token',
            'datestamp' => 1453363741,
          ),
          'version' => '8.x-1.0-alpha2',
        ),
        'image_url_formatter.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/image_url_formatter/image_url_formatter.info.yml',
          'basename' => 'image_url_formatter.info.yml',
          'name' => 'Image URL Formatter',
          'info' => 
          array (
            'name' => 'Image URL Formatter',
            'type' => 'module',
            'description' => 'Add an URL formatter for image field.',
            'package' => 'Field types',
            'dependencies' => 
            array (
              0 => 'image',
            ),
            'version' => '8.x-1.0-beta1',
            'core' => '8.x',
            'project' => 'image_url_formatter',
            'datestamp' => 1458189819,
          ),
          'version' => '8.x-1.0-beta1',
        ),
        'pathauto_views_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/pathauto/tests/modules/pathauto_views_test/pathauto_views_test.info.yml',
          'basename' => 'pathauto_views_test.info.yml',
          'name' => 'Views Test Config',
          'info' => 
          array (
            'name' => 'Views Test Config',
            'type' => 'module',
            'description' => 'Provides default views for tests.',
            'package' => 'Testing',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'version' => '8.x-1.0-alpha3',
            'core' => '8.x',
            'project' => 'pathauto',
            'datestamp' => 1461007782,
          ),
          'version' => '8.x-1.0-alpha3',
        ),
        'pathauto.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/pathauto/pathauto.info.yml',
          'basename' => 'pathauto.info.yml',
          'name' => 'Pathauto',
          'info' => 
          array (
            'name' => 'Pathauto',
            'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
            'type' => 'module',
            'dependencies' => 
            array (
              0 => 'ctools',
              1 => 'path',
              2 => 'token',
            ),
            'configure' => 'entity.pathauto_pattern.collection',
            'recommends' => 
            array (
              0 => 'redirect',
            ),
            'version' => '8.x-1.0-alpha3',
            'core' => '8.x',
            'project' => 'pathauto',
            'datestamp' => 1461007782,
          ),
          'version' => '8.x-1.0-alpha3',
        ),
        'eck.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/eck/eck.info.yml',
          'basename' => 'eck.info.yml',
          'name' => 'Entity Construction Kit',
          'info' => 
          array (
            'name' => 'Entity Construction Kit',
            'type' => 'module',
            'description' => 'ECK (Entity Contruction Kit) allows users to create and administer entity types, bundles and entities from UI',
            'package' => 'ECK',
            'configure' => 'eck.entity_type.list',
            'version' => '8.x-1.0-alpha1',
            'core' => '8.x',
            'project' => 'eck',
            'datestamp' => 1453547666,
          ),
          'version' => '8.x-1.0-alpha1',
        ),
        'views_slideshow_cycle.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/views_slideshow/modules/views_slideshow_cycle/views_slideshow_cycle.info.yml',
          'basename' => 'views_slideshow_cycle.info.yml',
          'name' => 'Views Slideshow Cycle',
          'info' => 
          array (
            'name' => 'Views Slideshow Cycle',
            'type' => 'module',
            'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
            'package' => 'Views',
            'dependencies' => 
            array (
              0 => 'views_slideshow',
            ),
            'version' => '8.x-4.0',
            'core' => '8.x',
            'project' => 'views_slideshow',
            'datestamp' => 1455833943,
          ),
          'version' => '8.x-4.0',
        ),
        'views_slideshow.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/views_slideshow/views_slideshow.info.yml',
          'basename' => 'views_slideshow.info.yml',
          'name' => 'Views Slideshow',
          'info' => 
          array (
            'name' => 'Views Slideshow',
            'type' => 'module',
            'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
            'package' => 'Views',
            'dependencies' => 
            array (
              0 => 'views',
            ),
            'version' => '8.x-4.0',
            'core' => '8.x',
            'project' => 'views_slideshow',
            'datestamp' => 1455833943,
          ),
          'version' => '8.x-4.0',
        ),
        'rules_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/rules/tests/modules/rules_test/rules_test.info.yml',
          'basename' => 'rules_test.info.yml',
          'name' => 'Rules test',
          'info' => 
          array (
            'name' => 'Rules test',
            'type' => 'module',
            'description' => 'Support module for the Rules tests.',
            'package' => 'Rules',
            'dependencies' => 
            array (
              0 => 'rules',
            ),
            'version' => '8.x-3.0-alpha1',
            'core' => '8.x',
            'project' => 'rules',
            'datestamp' => 1457387804,
          ),
          'version' => '8.x-3.0-alpha1',
        ),
        'rules_test_default_component.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/rules/tests/modules/rules_test_default_component/rules_test_default_component.info.yml',
          'basename' => 'rules_test_default_component.info.yml',
          'name' => 'Rules test default component',
          'info' => 
          array (
            'name' => 'Rules test default component',
            'type' => 'module',
            'description' => 'Support module for testing Rules config defaults.',
            'package' => 'Rules',
            'dependencies' => 
            array (
              0 => 'rules',
              1 => 'rules_test',
            ),
            'version' => '8.x-3.0-alpha1',
            'core' => '8.x',
            'project' => 'rules',
            'datestamp' => 1457387804,
          ),
          'version' => '8.x-3.0-alpha1',
        ),
        'rules_test_ui_embed.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/rules/tests/modules/rules_test_ui_embed/rules_test_ui_embed.info.yml',
          'basename' => 'rules_test_ui_embed.info.yml',
          'name' => 'Rules UI embedding test',
          'info' => 
          array (
            'name' => 'Rules UI embedding test',
            'type' => 'module',
            'description' => 'A module testing embedding the Rules UI.',
            'package' => 'Rules',
            'dependencies' => 
            array (
              0 => 'rules',
            ),
            'version' => '8.x-3.0-alpha1',
            'core' => '8.x',
            'project' => 'rules',
            'datestamp' => 1457387804,
          ),
          'version' => '8.x-3.0-alpha1',
        ),
        'rules.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/rules/rules.info.yml',
          'basename' => 'rules.info.yml',
          'name' => 'Rules',
          'info' => 
          array (
            'name' => 'Rules',
            'type' => 'module',
            'description' => 'React on events and conditionally evaluate actions.',
            'package' => 'Rules',
            'configure' => 'entity.rules_reaction_rule.collection',
            'version' => '8.x-3.0-alpha1',
            'core' => '8.x',
            'project' => 'rules',
            'datestamp' => 1457387804,
          ),
          'version' => '8.x-3.0-alpha1',
        ),
        'admin_toolbar_tools.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/admin_toolbar/admin_toolbar_tools/admin_toolbar_tools.info.yml',
          'basename' => 'admin_toolbar_tools.info.yml',
          'name' => 'Admin Toolbar Extra Tools',
          'info' => 
          array (
            'name' => 'Admin Toolbar Extra Tools',
            'description' => 'Adds menu links to the Admin Toolbar.',
            'package' => 'Administration',
            'type' => 'module',
            'dependencies' => 
            array (
              0 => 'admin_toolbar',
            ),
            'version' => '8.x-1.16',
            'core' => '8.x',
            'project' => 'admin_toolbar',
            'datestamp' => 1469715840,
          ),
          'version' => '8.x-1.16',
        ),
        'admin_toolbar.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/admin_toolbar/admin_toolbar.info.yml',
          'basename' => 'admin_toolbar.info.yml',
          'name' => 'Admin Toolbar',
          'info' => 
          array (
            'name' => 'Admin Toolbar',
            'description' => 'Provides a drop-down menu interface to the core Drupal Toolbar.',
            'package' => 'Administration',
            'type' => 'module',
            'dependencies' => 
            array (
              0 => 'toolbar',
            ),
            'version' => '8.x-1.16',
            'core' => '8.x',
            'project' => 'admin_toolbar',
            'datestamp' => 1469715840,
          ),
          'version' => '8.x-1.16',
        ),
        'menu_link_attributes.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/menu_link_attributes/menu_link_attributes.info.yml',
          'basename' => 'menu_link_attributes.info.yml',
          'name' => 'Menu Link Attributes',
          'info' => 
          array (
            'name' => 'Menu Link Attributes',
            'type' => 'module',
            'description' => 'Allows you to add attributes to menu links.',
            'dependencies' => 
            array (
              0 => 'menu_link_content',
            ),
            'configure' => 'menu_link_attributes.config',
            'version' => '8.x-1.0-beta3',
            'core' => '8.x',
            'project' => 'menu_link_attributes',
            'datestamp' => 1467719640,
          ),
          'version' => '8.x-1.0-beta3',
        ),
        'color_field.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/color_field/color_field.info.yml',
          'basename' => 'color_field.info.yml',
          'name' => 'Color Field',
          'info' => 
          array (
            'name' => 'Color Field',
            'type' => 'module',
            'description' => 'Provides a color field type to store the color value and opacity',
            'package' => 'Field types',
            'dependencies' => 
            array (
              0 => 'field',
            ),
            'version' => '8.x-2.0-rc1',
            'core' => '8.x',
            'project' => 'color_field',
            'datestamp' => 1447537141,
          ),
          'version' => '8.x-2.0-rc1',
        ),
        'seckit.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/seckit/seckit.info.yml',
          'basename' => 'seckit.info.yml',
          'name' => 'Security Kit',
          'info' => 
          array (
            'name' => 'Security Kit',
            'description' => 'Enhance security of your Drupal website.',
            'package' => 'Security',
            'configure' => 'seckit.settings',
            'type' => 'module',
            'version' => '8.x-1.0-alpha1',
            'core' => '8.x',
            'project' => 'seckit',
            'datestamp' => 1467148740,
          ),
          'version' => '8.x-1.0-alpha1',
        ),
        'admin_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/admin_test/admin_test.info.yml',
          'basename' => 'admin_test.info.yml',
          'name' => 'Admin test',
          'info' => 
          array (
            'name' => 'Admin test',
            'type' => 'module',
            'description' => 'Admin test module',
            'package' => 'Custom',
            'core' => '8.x',
          ),
        ),
        'metatag_test.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/tests/modules/metatag_test/metatag_test.info.yml',
          'basename' => 'metatag_test.info.yml',
          'name' => 'Metatag test',
          'info' => 
          array (
            'name' => 'Metatag test',
            'type' => 'module',
            'description' => 'Provides support for metatag tests.',
            'package' => 'Testing',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'version' => '8.x-1.0-beta9',
        ),
        'metatag_open_graph.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/metatag_open_graph/metatag_open_graph.info.yml',
          'basename' => 'metatag_open_graph.info.yml',
          'name' => 'Metatag: Open Graph',
          'info' => 
          array (
            'name' => 'Metatag: Open Graph',
            'type' => 'module',
            'description' => 'Provides support for Open Graph Protocol meta tags.',
            'package' => 'SEO',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'version' => '8.x-1.0-beta9',
        ),
        'metatag_verification.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/metatag_verification/metatag_verification.info.yml',
          'basename' => 'metatag_verification.info.yml',
          'name' => 'Metatag: Verification',
          'info' => 
          array (
            'name' => 'Metatag: Verification',
            'type' => 'module',
            'description' => 'Verifies ownership of a site for search engines and other services.',
            'package' => 'SEO',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'version' => '8.x-1.0-beta9',
        ),
        'metatag_google_plus.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/metatag_google_plus/metatag_google_plus.info.yml',
          'basename' => 'metatag_google_plus.info.yml',
          'name' => 'Metatag: Google Plus',
          'info' => 
          array (
            'name' => 'Metatag: Google Plus',
            'type' => 'module',
            'description' => 'Provides support for Google\'s Plus meta tags.',
            'package' => 'SEO',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'version' => '8.x-1.0-beta9',
        ),
        'metatag_twitter_cards.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/metatag_twitter_cards/metatag_twitter_cards.info.yml',
          'basename' => 'metatag_twitter_cards.info.yml',
          'name' => 'Metatag: Twitter Cards',
          'info' => 
          array (
            'name' => 'Metatag: Twitter Cards',
            'type' => 'module',
            'description' => 'Provides support for Twitter\'s Card meta tags.',
            'package' => 'SEO',
            'dependencies' => 
            array (
              0 => 'metatag',
            ),
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'version' => '8.x-1.0-beta9',
        ),
        'metatag.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/modules/metatag/metatag.info.yml',
          'basename' => 'metatag.info.yml',
          'name' => 'Metatag',
          'info' => 
          array (
            'name' => 'Metatag',
            'type' => 'module',
            'description' => 'Manage meta tags for all entities.',
            'package' => 'SEO',
            'dependencies' => 
            array (
              0 => 'field',
              1 => 'token',
            ),
            'configure' => 'entity.metatag_defaults.collection',
            'version' => '8.x-1.0-beta9',
            'core' => '8.x',
            'project' => 'metatag',
            'datestamp' => 1464897844,
          ),
          'version' => '8.x-1.0-beta9',
        ),
        'druppio_monopage.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/themes/druppio_monopage/druppio_monopage.info.yml',
          'basename' => 'druppio_monopage.info.yml',
          'name' => 'Druppio Drupal 8 MonoPage Responsive Theme',
          'info' => 
          array (
            'name' => 'Druppio Drupal 8 MonoPage Responsive Theme',
            'type' => 'theme',
            'description' => 'Druppio Drupal 8 MnonoPage Responsive Theme based on bootstrap. Developed & Designed by <a href=http://www.druppio.com>Druppio</a>',
            'package' => 'Core',
            'force_export' => false,
            'inherit_layout' => false,
            'scss_support' => true,
            'libraries' => 
            array (
              0 => 'druppio_monopage/bootstrap',
              1 => 'druppio_monopage/druppio-monopage',
              2 => 'druppio_monopage/easing',
            ),
            'regions' => 
            array (
              'navigation' => 'Navigation',
              'navigation_user_menu' => 'Navigation (User menu)',
              'navigation_collapsible' => 'Navigation (Collapsible)',
              'navigation_search' => 'Navigation (Search)',
              'header' => 'Header',
              'highlighted' => 'Highlighted',
              'slideshow' => 'Slideshow',
              'top_bar' => 'Top Bar',
              'content_top' => 'Content Top',
              'help' => 'Help',
              'page_top' => 'Page top',
              'content' => 'Content',
              'page_bottom' => 'Page bottom',
              'content_bottom' => 'Content Bottom',
              'sidebar_first' => 'Primar Sidebar',
              'sidebar_second' => 'Secondary Sidebar',
              'bottom_bar' => 'Bottom Bar',
              'footer' => 'Footer First',
              'footer_second' => 'Footer Second',
              'footer_third' => 'Footer Third',
              'footer_fourth' => 'Footer Fourth',
              'footer_credits' => 'Footer credits',
              'footer_copyright' => 'Footer copyright',
            ),
            'features' => 
            array (
              'logo' => true,
              'name' => true,
              'slogan' => true,
              'node_user_picture' => true,
              'comment_user_picture' => true,
              'comment_user_verification' => true,
              'favicon' => true,
              'main_menu' => true,
              'secondary_menu' => true,
            ),
            'version' => '8.x-1.x',
            'core' => '8.x',
            'datestamp' => 1456164599,
          ),
          'version' => '8.x-1.x',
        ),
        'druppio_monopage_profile.info' => 
        array (
          'filename' => '/var/aegir/projects/andrew/dev/profiles/druppio_monopage_profile/druppio_monopage_profile.info.yml',
          'basename' => 'druppio_monopage_profile.info.yml',
          'name' => 'Druppio Monopage Profile',
          'info' => 
          array (
            'name' => 'Druppio Monopage Profile',
            'type' => 'profile',
            'description' => 'Druppio Monopage installation profile.',
            'core' => '8.x',
            'distribution' => 
            array (
              'name' => 'Druppio Monopage',
            ),
            'dependencies' => 
            array (
              0 => 'node',
              1 => 'history',
              2 => 'block',
              3 => 'breakpoint',
              4 => 'ckeditor',
              5 => 'color',
              6 => 'config',
              7 => 'comment',
              8 => 'contextual',
              9 => 'contact',
              10 => 'menu_link_content',
              11 => 'datetime',
              12 => 'block_content',
              13 => 'quickedit',
              14 => 'editor',
              15 => 'help',
              16 => 'image',
              17 => 'menu_ui',
              18 => 'options',
              19 => 'path',
              20 => 'page_cache',
              21 => 'dynamic_page_cache',
              22 => 'taxonomy',
              23 => 'dblog',
              24 => 'search',
              25 => 'shortcut',
              26 => 'toolbar',
              27 => 'field_ui',
              28 => 'file',
              29 => 'rdf',
              30 => 'views',
              31 => 'views_ui',
              32 => 'tour',
              33 => 'automated_cron',
              34 => 'admin_toolbar',
              35 => 'admin_toolbar_tools',
              36 => 'color_field',
              37 => 'contact_block',
              38 => 'ctools',
              39 => 'eck',
              40 => 'image_url_formatter',
              41 => 'menu_link_attributes',
              42 => 'metatag',
              43 => 'pathauto',
              44 => 'rules',
              45 => 'seckit',
              46 => 'token',
              47 => 'views_slideshow',
              48 => 'views_slideshow_cycle',
              49 => 'easy_social',
            ),
            'themes' => 
            array (
              0 => 'druppio_monopage',
              1 => 'bartik',
              2 => 'seven',
            ),
          ),
        ),
      ),
    ),
  ),
);
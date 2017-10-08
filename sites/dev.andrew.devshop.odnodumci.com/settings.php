<?php
/**
 * @file Drupal's settings.php file
 *
 * This file was automatically generated by Aegir 7.x-3.10+2-dev
 * on Thu, 13 Jul 2017 02:11:09 +0200.
 *
 * If it is still managed by Aegir, changes to this file may be
 * lost. If it is not managed by aegir, you should remove this header
 * to avoid further confusion.
 */

/**
 * Detecting subdirectory mode
 */
if (isset($_SERVER['SITE_SUBDIR']) && isset($_SERVER['RAW_HOST'])) {
  $base_url = 'http://' . $_SERVER['RAW_HOST'] . '/' . $_SERVER['SITE_SUBDIR'];
}

if (isset($_SERVER['db_name'])) {
  /**
   * The database credentials are stored in the Apache or Nginx vhost config
   * of the associated site with SetEnv (fastcgi_param in Nginx) parameters.
   * They are called here with $_SERVER environment variables to
   * prevent sensitive data from leaking to site administrators
   * with PHP access, that potentially might be of other sites in
   * Drupal's multisite set-up.
   * This is a security measure implemented by the Aegir project.
   */
  $databases['default']['default'] = array(
    'driver' => $_SERVER['db_type'],
    'database' => $_SERVER['db_name'],
    'username' => $_SERVER['db_user'],
    'password' => $_SERVER['db_passwd'],
    'host' => $_SERVER['db_host'],
    /* Drupal interprets $databases['db_port'] as a string, whereas Drush sees
     * it as an integer. To maintain consistency, we cast it to a string. This
     * should probably be fixed in Drush.
     */
    'port' => (string) $_SERVER['db_port'],
  );
  $db_url['default'] = $_SERVER['db_type'] . '://' . $_SERVER['db_user'] . ':' . $_SERVER['db_passwd'] . '@' . $_SERVER['db_host'] . ':' . $_SERVER['db_port'] . '/' . $_SERVER['db_name'];
}

  /**
   * Now that we used the credentials from the apache environment, we
   * don't need them anymore. Clear them from apache and the _SERVER
   * array, otherwise they show up in phpinfo() and other friendly
   * places.
   */
  if (function_exists('apache_setenv')) {
    apache_setenv('db_type', null);
    apache_setenv('db_user', null);
    apache_setenv('db_passwd', null);
    apache_setenv('db_host', null);
    apache_setenv('db_port', null);
    apache_setenv('db_name', null);
    // no idea why they are also in REDIRECT_foo, but they are
    apache_setenv('REDIRECT_db_type', null);
    apache_setenv('REDIRECT_db_user', null);
    apache_setenv('REDIRECT_db_passwd', null);
    apache_setenv('REDIRECT_db_host', null);
    apache_setenv('REDIRECT_db_port', null);
    apache_setenv('REDIRECT_db_name', null);
  }
  unset($_SERVER['db_type']);
  unset($_SERVER['db_user']);
  unset($_SERVER['db_passwd']);
  unset($_SERVER['db_host']);
  unset($_SERVER['db_port']);
  unset($_SERVER['db_name']);
  unset($_SERVER['REDIRECT_db_type']);
  unset($_SERVER['REDIRECT_db_user']);
  unset($_SERVER['REDIRECT_db_passwd']);
  unset($_SERVER['REDIRECT_db_host']);
  unset($_SERVER['REDIRECT_db_port']);
  unset($_SERVER['REDIRECT_db_name']);


  $profile = "standard";
  $install_profile = "standard";

  /**
  * PHP settings:
  *
  * To see what PHP settings are possible, including whether they can
  * be set at runtime (ie., when ini_set() occurs), read the PHP
  * documentation at http://www.php.net/manual/en/ini.php#ini.list
  * and take a look at the .htaccess file to see which non-runtime
  * settings are used there. Settings defined here should not be
  * duplicated there so as to avoid conflict issues.
  */
  ini_set('session.gc_probability', 1);
  ini_set('session.gc_divisor', 100);
  ini_set('session.gc_maxlifetime', 200000);
  ini_set('session.cookie_lifetime', 2000000);

  /**
  * Set the umask so that new directories created by Drupal have the correct permissions
  */
  umask(0002);

  $settings['install_profile'] = 'standard';
  $settings['file_public_path'] = 'sites/dev.andrew.devshop.odnodumci.com/files';
  $settings['file_private_path'] = 'sites/dev.andrew.devshop.odnodumci.com/private/files';
  $config['system.file']['path']['temporary'] = 'sites/dev.andrew.devshop.odnodumci.com/private/temp';
  $config_directories[CONFIG_SYNC_DIRECTORY] = 'sites/dev.andrew.devshop.odnodumci.com/private/config/sync';
  $settings['hash_salt'] = 'gihQGwUy6_Kn3nGr4ourxluquDjghXb95VAFlYjqb70HI0n5qQbxG8i55Ta-pei4IaVXqvXQvQ';
  $settings['aegir_api'] = 3;
  $settings['allow_authorize_operations'] = FALSE;

  /**
   * Useless currently, because it is not used in Drupal 8 anyway.
   * Instead, Drupal 8 is trying to set the clean URLs mode on the fly,
   * depending on the request, so we should force this by redirecting
   * non-clean to clean URLs on the web server level - Nginx example:
   *
   *   rewrite ^/index.php/(.*)$ $scheme://$host/$1 permanent;
   *
   */
  $settings['clean_url'] = 1;


  /**
   * Load services definition file.
   */
  $settings['container_yamls'][] = __DIR__ . '/services.yml';

  /**
   * Trusted Host Settings support.
   */
  $settings['trusted_host_patterns'] = array(
    '^dev\.andrew\.devshop\.odnodumci\.com$',
    '^bezheryankin\.com$',
    '^dev\.bezheryankin\.com$',
    '^www\.dev\.andrew\.devshop\.odnodumci\.com$',
    '^localhost$',
    '^localhost\.*',
    '\.local$',
  );

# Extra configuration from modules:

  # This site's devshop project name and environment name.
  $_SERVER['DEVSHOP_ENVIRONMENT'] = '';
  $_SERVER['DEVSHOP_PROJECT'] = '';

  # Include devshop environment configuration settings, if there is any.
  if (file_exists(__DIR__ . '/../all/settings.devshop.php')) {
    include_once(__DIR__ . '/../all/settings.devshop.php');
  }

  if (file_exists(__DIR__ . '/../default/settings.devshop.php')) {
    include_once(__DIR__ . '/../default/settings.devshop.php');
  }

  # Additional host wide configuration settings. Useful for safely specifying configuration settings.
  if (is_readable('/var/aegir/config/includes/global.inc')) {
    include_once('/var/aegir/config/includes/global.inc');
  }

  # Additional site configuration settings.
  if (is_readable('/var/aegir/projects/andrew/dev/sites/dev.andrew.devshop.odnodumci.com/local.settings.php')) {
    include_once('/var/aegir/projects/andrew/dev/sites/dev.andrew.devshop.odnodumci.com/local.settings.php');
  }

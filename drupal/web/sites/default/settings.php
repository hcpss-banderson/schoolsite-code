<?php

$settings['container_yamls'][] = __DIR__ . '/services.yml';
$settings['hash_salt'] = 'GfXXnrAGlp-10Vm-EhB6A-Lc65VdaVoEdaBQ2HXFyvz3t3236luj39IHNSP0AkBdSBxaIMa8EQ';
$settings['update_free_access'] = FALSE;

// Database settings
$databases['default']['default'] = array (
  'database'  => 'drupal',
  'username'  => 'drupal',
  'password'  => 'drupal',
  'prefix'    => '',
  'host'      => 'drupal_db',
  'port'      => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver'    => 'mysql',
);

$settings['install_profile'] = 'standard';
$config_directories['sync'] = '/var/www/drupal/config/sync';

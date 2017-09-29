<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site htfcd8, environment dev.
$aliases['dev'] = array(
  'root' => '/var/www/html/htfcd8.dev/docroot',
  'ac-site' => 'htfcd8',
  'ac-env' => 'dev',
  'ac-realm' => 'devcloud',
//  'uri' => 'htfcd8fnvwbfx6zr.devcloud.acquia-sites.com',
  'uri' => 'htfcd8fnvwbfx6zr.ssh.devcloud.acquia-sites.com',
  'remote-host' => 'htfcd8fnvwbfx6zr.ssh.devcloud.acquia-sites.com',
  'remote-user' => 'htfcd8.dev',
  'path-aliases' => array(
    // Per https://github.com/acquia/blt/issues/856, set to drush8 for
    // Acquia support.
    // @todo - refactor this in policy.drush.inc
    // '%drush-script' => 'drush' . $drush_major_version,
    '%drush-script' => 'drush8',
  ),
);
$aliases['dev.livedev'] = array(
  'parent' => '@htfcd8.dev',
  'root' => '/mnt/gfs/htfcd8.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site htfcd8, environment test.
$aliases['test'] = array(
  'root' => '/var/www/html/htfcd8.test/docroot',
  'ac-site' => 'htfcd8',
  'ac-env' => 'test',
  'ac-realm' => 'devcloud',
  'uri' => 'htfcd8eepfagqwrs.devcloud.acquia-sites.com',
  'remote-host' => 'htfcd8eepfagqwrs.ssh.devcloud.acquia-sites.com',
  'remote-user' => 'htfcd8.test',
  'path-aliases' => array(
    // Per https://github.com/acquia/blt/issues/856, set to drush8 for
    // Acquia support.
    // @todo - refactor this in policy.drush.inc
    // '%drush-script' => 'drush' . $drush_major_version,
    '%drush-script' => 'drush8',
  ),
);
$aliases['test.livedev'] = array(
  'parent' => '@htfcd8.test',
  'root' => '/mnt/gfs/htfcd8.test/livedev/docroot',
);

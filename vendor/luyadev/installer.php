<?php

$vendorDir = dirname(__DIR__);

return array (
  'configs' => 
  array (
    'luyadev/luya-core' => 
    array (
      'package' => 
      array (
        'name' => 'luyadev/luya-core',
        'prettyName' => 'luyadev/luya-core',
        'version' => '1.0.26.0',
        'targetDir' => NULL,
        'installSource' => 'dist',
        'sourceUrl' => 'https://github.com/luyadev/luya-core.git',
        'packageFolder' => 'luyadev/luya-core',
      ),
      'blocks' => 
      array (
      ),
      'bootstrap' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'luyadev/luya-module-admin' => 
    array (
      'package' => 
      array (
        'name' => 'luyadev/luya-module-admin',
        'prettyName' => 'luyadev/luya-module-admin',
        'version' => '3.0.3.0',
        'targetDir' => NULL,
        'installSource' => 'dist',
        'sourceUrl' => 'https://github.com/luyadev/luya-module-admin.git',
        'packageFolder' => 'luyadev/luya-module-admin',
      ),
      'blocks' => 
      array (
      ),
      'bootstrap' => 
      array (
        0 => '\\luya\\admin\\Bootstrap',
      ),
      'themes' => 
      array (
      ),
    ),
    'luyadev/luya-module-cms' => 
    array (
      'package' => 
      array (
        'name' => 'luyadev/luya-module-cms',
        'prettyName' => 'luyadev/luya-module-cms',
        'version' => '3.0.2.0',
        'targetDir' => NULL,
        'installSource' => 'dist',
        'sourceUrl' => 'https://github.com/luyadev/luya-module-cms.git',
        'packageFolder' => 'luyadev/luya-module-cms',
      ),
      'blocks' => 
      array (
        0 => 'vendor/luyadev/luya-module-cms/src/frontend/blocks',
      ),
      'bootstrap' => 
      array (
        0 => '\\luya\\cms\\frontend\\Bootstrap',
      ),
      'themes' => 
      array (
      ),
    ),
    'luyadev/luya-testsuite' => 
    array (
      'package' => 
      array (
        'name' => 'luyadev/luya-testsuite',
        'prettyName' => 'luyadev/luya-testsuite',
        'version' => '1.0.27.0',
        'targetDir' => NULL,
        'installSource' => 'dist',
        'sourceUrl' => 'https://github.com/luyadev/luya-testsuite.git',
        'packageFolder' => 'luyadev/luya-testsuite',
      ),
      'blocks' => 
      array (
      ),
      'bootstrap' => 
      array (
        0 => 'luya\\testsuite\\Bootstrap',
      ),
      'themes' => 
      array (
      ),
    ),
  ),
  'timestamp' => 1583851608,
);

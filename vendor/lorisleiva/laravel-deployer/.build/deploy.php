<?php

namespace Deployer;

require 'recipe/laravel-deployer.php';

/*
 * Includes
 */

/*
 * Options
 */

set('strategy', 'basic');
set('application', 'Laravel');
set('repository', 'https://github.com/blackemr/stocksSquared2');
set('php_fpm_service', 'php7.3-fpm');

/*
 * Hosts and localhost
 */

host('http://127.0.0.1:8000/')
    ->set('deploy_path', 'http://127.0.0.1:8000/')
    ->user('root');

/*
 * Strategies
 */

/*
 * Hooks
 */

after('hook:ready', 'artisan:storage:link');
after('hook:ready', 'artisan:view:clear');
after('hook:ready', 'artisan:config:cache');
after('hook:ready', 'artisan:migrate');
after('hook:done', 'fpm:reload');
after('hook:rollback', 'fpm:reload');
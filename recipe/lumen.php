<?php
/* (c) Matthew Waygood <matthew.waygood@stscommercial.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/*
 * This recipe supports Laravel lumen 5.1+, for older versions, please read the documentation https://github.com/deployphp/docs
 */

namespace Deployer;

require_once __DIR__ . '/laravel.php';

task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:vendors',
    'deploy:writable',
    //'artisan:storage:link',
    //'artisan:view:cache',
    //'artisan:config:cache',
    //'artisan:optimize',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
]);

?>
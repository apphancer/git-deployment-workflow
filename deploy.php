<?php
$commands = [
    'cd /mnt/data/vhosts/site/www', // absolute path to the application
    'git checkout master',
    'git reset --hard HEAD && git pull origin master', // pull from origin master (change this accordingly)
    'chmod -R og-rx .git',
    'cd /mnt/data/vhosts/site/protected', // change directoy into path for Yii's app protected directory
    './yiic migrate --interactive=0',  // execute yiic migration tool, using the interactive parameter seto to zero so that the confirmation prompt is skipped
];

$output = shell_exec(join(' && ', $commands).' 2>&1');
echo "<pre>$output</pre>";

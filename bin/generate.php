<?php

require 'vendor/autoload.php';

use Philo\Blade\Blade;

$dir = [
    'views'  => __DIR__ . '/../views',
    'cache'  => __DIR__ . '/../cache',
    'dist'   => __DIR__ . '/../dist',
    'config' => __DIR__ . '/../config'
];

$blade = new Blade($dir['views'], $dir['cache']);

$blade->view()->share([
    'version' => time(),
    'assets'  => 'assets/'
]);

foreach (['all', 'forwards', 'defensemen', 'goalies'] as $position) {

    $blade->view()->share([
        'position' => $position
    ]);

    $html = $blade->view()->make($position, [
        'players'       => include $dir['config'] . '/players.php',
        'statistics'    => include $dir['config'] . '/' . $position . '.php',
    ]);

    file_put_contents(
        $dir['dist'] . '/' . ($position == 'all' ? 'index' : $position) . '.html',
        $html
    );
}
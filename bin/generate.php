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

$html = $blade->view()->make('index', [
    'players' => include $dir['config'] . '/players.php',
    'all' => include $dir['config'] . '/all.php',
    'forwards' => include $dir['config'] . '/forwards.php',
    'defensemen' => include $dir['config'] . '/defensemen.php',
    'goalies' => include $dir['config'] . '/goalies.php'
]);

file_put_contents($dir['dist'] . '/index.html', $html);

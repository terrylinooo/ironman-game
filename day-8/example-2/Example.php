<?php

include 'vendor/autoload.php';

include 'RedisInterface.php';
include 'RedisExt.php';
include 'PredisExt.php';
include 'CacheRedis.php';


$redis = new RedisExt([
    'host' => '127.0.0.1',
    'port' => 6379
]);

$cache = new CacheRedis($redis);

$cache->set('day8', 'example 2 - redis - ok');

echo $cache->get('day8') . "\n";

unset($redis, $cache);

$redis = new PredisExt([
    'host' => '127.0.0.1',
    'port' => 6379
]);

$cache = new CacheRedis($redis);

$cache->set('day8', 'example 2 - predis - ok');

echo $cache->get('day8') . "\n";
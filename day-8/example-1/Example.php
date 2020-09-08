<?php

include 'CacheRedis.php';

$host = '127.0.0.1';
$port = 6379;

$redis = new Redis();
$redis->connect($host, $port);

$cache = new CacheRedis($redis);

$cache->set('day8', 'ok');

echo $cache->get('day8') . "\n";
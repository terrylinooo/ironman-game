<?php

include 'CacheRedis.php';

$setting['host'] = '127.0.0.1';
$setting['port'] = 6379;

$cache = new CacheRedis($setting);

$cache->set('foo', 'bar la');

echo $cache->get('foo')  .  "\n";
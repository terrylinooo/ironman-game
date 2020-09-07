<?php

include 'CacheFactory.php';

$setting['mysql']['host'] = '127.0.0.1';
$setting['mysql']['dbname'] = 'test';
$setting['mysql']['charset'] = 'UTF8';
$setting['mysql']['user'] = 'shieldon';
$setting['mysql']['pass'] = 'taiwan';
$setting['mysql']['table'] = 'cache_data';

$setting['redis']['host'] = '127.0.0.1';
$setting['redis']['port'] = 6379;

$factory = new CacheFactory();

$cache = $factory->createDriver('redis', $setting);;

$cache->set('hello', 'world');

echo $cache->get('hello') . "\n";
<?php

include 'Cache.php';

$setting['host'] = '127.0.0.1';
$setting['dbname'] = 'test';
$setting['charset'] = 'UTF8';

$setting['user'] = 'shieldon';
$setting['pass'] = 'taiwan';
$setting['table'] = 'cache_data';

$cache = new Cache($setting);

$cache->set('foo', 'bar222');

echo $cache->get('foo');
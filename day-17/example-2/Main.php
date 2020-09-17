<?php

use Shieldon\SimpleCache\Cache;
use Shieldon\SimpleCache\Driver\Redis;

class Main
{
    public function example()
    {
        $redis = new Redis('127.0.0.1', 6379);

        $cache = new Cache($redis);
        $cache->set('foo', 'bar', 3600);

        echo $cache->get('foo');
        // echo: bar
    }
}
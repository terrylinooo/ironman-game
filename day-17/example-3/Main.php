<?php

use Shieldon\SimpleCache\Cache;
use Shieldon\SimpleCache\Driver\Redis;

class Main
{
    public function example()
    {
        $redis = new Redis([
            'host' => '127.0.0.1',
            'port' => 6379,
        ]);

        $cache = new Cache($redis);
        $cache->set('foo', 'bar', 3600);

        echo $cache->get('foo');
        // echo: bar
    }
    
    public function example2()
    {
        $sqlite = new Sqlite([
            'path' => '/home/app/writable',
        ]);

        $cache = new Cache($sqlite);
        $cache->set('foo2', 'bar2', 3600);

        echo $cache->get('foo2');
        // echo: bar2
    }
}
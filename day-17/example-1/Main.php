<?php

use Shieldon\SimpleCache\Cache;
use Shieldon\SimpleCache\Driver\Redis;

class Main
{
    public function example()
    {
        $cache = new Cache('redis');
        $cache->set('foo', 'bar', 3600);
        
        echo $cache->get('foo');
        // echo: bar
    }
}
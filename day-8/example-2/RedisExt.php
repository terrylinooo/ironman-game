<?php

class RedisExt extends Redis implements RedisInterface
{
    public function __construct($setting)
    {
        $this->connect($setting['host'],$setting['port']);
    }
}
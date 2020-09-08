<?php

interface RedisInterface
{
    public function get($key);

    public function set($key, $value);
}
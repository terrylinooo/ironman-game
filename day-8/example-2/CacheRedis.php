<?php

/**
 * A cache driver used with Redis
 */
class CacheRedis
{
    protected $db;

    public function __construct(RedisInterface $redis)
    {
        $this->db = $redis;
    }
    
    public function get($key)
    {
        return $this->db->get($key);
    }
    
    public function set($key, $value)
    {
        return $this->db->set($key, $value);
    }
}
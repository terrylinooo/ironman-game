<?php

/**
 * A cache driver used with Redis
 */
class CacheRedis
{
    protected $db;

    public function __construct($setting)
    {
        $host = $setting['host'];
        $port = $setting['port'];

        $this->db = new Redis();
        $this->db->connect($host, $port);
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
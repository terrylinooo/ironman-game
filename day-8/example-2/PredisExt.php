<?php

class PredisExt implements RedisInterface
{
    protected $db;

    public function __construct($setting)
    {
        $this->db = new \Predis\Client($setting);
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
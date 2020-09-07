<?php

/**
 * Factory
 */
class CacheFactory
{
    public function createDriver($type, $setting)
    {
        $setting = $setting[$type];

        $className = 'Cache' . ucfirst(strtolower($type));
        $classFilePatch = __DIR__ . '/' . $className . '.php';

        if (file_exists($classFilePatch)) {
            include_once $classFilePatch;
            return new $className($setting);
        } else {
            throw new Exception('Driver ' . $className . ' not found.');
        }
    }
}
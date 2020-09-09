<?php

class Event
{
    /**
     * 儲放 callback 的陣列
     *
     * @var array
     */
    protected static $event = [];

    /**
     * 註冊事件
     *
     * @param string $name     事件名稱
     * @param mixed  $callback 可執行的函式或閉包
     *
     * @return void
     */
    public static function addListener($name, $callback)
    {
        $name = strtolower($name);
        self::$event[$name][] = $callback;
    }

    /**
     * 觸發事件
     *
     * @param string $name 事件名稱
     * @param mixed  $args 傳給回呼函式的參數
     *
     * @return void
     */
    public static function trigger($name, $args)
    {
        $name = strtolower($name);

        if (self::has($name)) {
            foreach (self::$event[$name] as $func) {
                $func($args);
            }
        }
    }

    /**
     * 檢查事件是否存在
     *
     * @param string $name 事件名稱
     *
     * @return bool
     */
    public static function has($name) 
    {
        if (isset(self::$event[$name])) {
            return true;
        }
        
        return false;
    }
}
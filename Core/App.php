<?php
// Store all  configure and main static data

class App{
    protected static $registry =[];

    public static function bind($key,$data){
        static::$registry[$key] = $data;
    }

    public static function get($key){
        if(!array_key_exists($key,static::$registry)){
            throw new Exception('no kwy');
        }
        else{
            return static::$registry[$key];
        }



    }
    public static function test(){
        var_dump(static::$registry);
    }

}
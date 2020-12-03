<?php 

namespace Patterns\Creational;

use Exception;

final class Singleton {


    /**
     * holds an instance of the class
     * @var static instance
     */
    protected static $instance = null;

    /**
     * 
     */
    private function __construct()
    {
    }
    private function __clone()
    {

    }
    public function __wakeup()
    {
        throw new Exception("Cannot unserialize singleton objet!");
    }

    /**
     * get a new instance of the class
     * @return self 
     */
    public static function getInstance(): self
    {
        if(static::$instance === null){
            static::$instance = new static();
        }
        return static::$instance;
    }


}

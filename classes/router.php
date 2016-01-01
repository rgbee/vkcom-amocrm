<?php

class Router {
    
    /** @var string */
    protected $_current_route;
    
    static protected $_instance;
    
    protected function __construct() {}
    
    static function instance(){
        if (static::$_instance === NULL) {
            static::$_instance = new static;
        }
        return static::$_instance;
    }
    
    /**
     * @param string $id
     * 
     * @return void
     */
    public function set_current_route($id){
        $this->_current_route = $id;
    }
    
    /**
     * @param string $id
     * 
     * @return boolean
     */
    public function is_current_route($id) {
        return !empty($this->_current_route) && $this->_current_route === $id;
    }
}
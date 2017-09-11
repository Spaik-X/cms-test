<?php

namespace Engine\DI;

class DI {
    /**
     *
     * @var type array
     */
    private $container = [];
    
    /**
     * 
     * @param type $key
     * @param type $value
     * @return \Engine\DI\DI
     */
    public function set($key, $value) {
        $this->container[$key] = $value;
        
        return $this;
    }
    
    /**
     * 
     * @param type $key
     * @return type mixed
     */
    public function get($key) {
        return $this->has($key);
    }
    
    /**
     * 
     * @param type $key
     * @return type bool
     */
    public function has($key) {
        return isset($this->container[$key]) ? $this->container[$key] : NULL;
    }
}

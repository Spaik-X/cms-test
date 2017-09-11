<?php

namespace Engine;

class Cms {
    
    /**
     *
     * @var type DI
     */
    private $di;
    
    /**
     * Cms constructor
     * @param type $di
     */
    public function __construct($di) {
        $this->di = $di;
    }
    
    /**
     * Run Cms
     */
    public function run() {
        $db = $this->di->get('test2');
        
        print_r($db);
    }
}

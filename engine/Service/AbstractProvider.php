<?php

namespace Engine\Service;

abstract class AbstractProvider {
    
    /**
     *
     * @var type \Engine\DI\DI
     */
    protected $di;
    
    public function __construct(Engine\DI\DI $di) {
        
        $this->di = $di;
        
    }
    
    abstract function init();
    
}

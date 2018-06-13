<?php

class Bu1kProvisioning extends Module {

    public function __construct() {
        $this->loadConfig(dirname(__FILE__) . DS . "config.json");
    }
    
}

<?php

class Bu1kProvisioning extends Module {

    public function __construct() {
        $this->loadConfig(dirname(__FILE__) . DS . "config.json");
    }
    
    
    public function getPackageFields($vars=null) {
        // Create the labels
        $fields = new ModuleFields();
        $label_username = $fields->label("Username", "bu1k_nextcloud_username_id");
        
        // Create the fields
        $user_field = $fields->fieldText("bu1k_nextcloud_username", "Username", array('id' => "bu1k_nextcloud_username_id"));
        
        // Attach the fields to the labels
        $label_username->attach($user_field);
 
        // Add the module fields
        $fields->setField($label_username);
        return $fields;   
    }
}

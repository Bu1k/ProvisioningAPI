<?php

namespace OCA\Bu1kProvisioning\AppInfo;

use \OCP\AppFramework\App;
use \OCA\Bu1kProvisioning\Service\UserService;

class Application extends App {

    public function __construct(array $urlParams=array()){
        parent::__construct('bu1kprovisioning', $urlParams);

        $container = $this->getContainer();

        /**
         * Controllers
         */
        $container->registerService('UserService', function($c) {
            return new UserService($c->query('UserManager'));
        });

        $container->registerService('UserManager', function($c) {
          return $c->query('ServerContainer')->getUserManager();
        });
    }
    
    
}

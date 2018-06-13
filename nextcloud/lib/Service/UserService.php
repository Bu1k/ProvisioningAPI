<?php

namepace OCA\Bu1kProvisioning\Service;

class UserService 
{
  private $userManager;
  
  public function __construct($userManager) {
    $this->userManager = $userManager;
  }
  
  public function create($userId, $password)
  {
    $this->userManager->create($userId, $password);
  }
}

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
  
  public function delete($userId) 
  {
    return $this->userManager->get($userId)->delete();
  }
  
  // recoveryPassword is used for the encryption app to recover the keys
  public function setPassword($userId, $password, $recoveryPassword) 
  {
    return $this->userManager->get($userId)->setPassword($password, $recoveryPassword);
  }

  public function enable($userId) 
  {
    return $this->userManager->get($userId)->setEnabled(true); 
  }
  
  public function disable($userId) 
  {
    return $this->userManager->get($userId)->setEnabled(false);
  }

  public function getHome($userId) 
  {
    return $this->userManager->get($userId)->getHome();
  }
}

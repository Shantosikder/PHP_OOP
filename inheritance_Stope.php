<?php
class Member {
  public $username = "";
  private $loggedIn = false;
  public final function login() {
    $this->loggedIn = true;
  }
  public function logout() {
    $this->loggedIn = false;
  }
  public function isLoggedIn() {
    return $this->loggedIn;
  }
}
 
class NaughtyMember extends Member {
  public function login() {
    $this->loggedIn = true;
    // Do something bad
  }
}
?>
<?php
class Member {
  public $username = "";
  private $loggedIn = false;
  public function login() {
    $this->loggedIn = true;
  }
  public function logout() {
    $this->loggedIn = false;
  }
}
class Administrator extends Member {
  public function login() {
    parent::login(); // Using parent keyword
    echo "Log entry: $this->username logged in<br>";
  }
}
// Create a new member and log them in
$member = new Member();
$member->username = "Rana";
$member->login();
$member->logout();
// Create a new administrator and log them in
$admin = new Administrator();
$admin->username = "Shanto";
$admin->login();           // Displays "Log entry: Farhan logged in"
$admin->logout();
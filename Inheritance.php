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
    public function isLoggedIn() {
        return $this->loggedIn;
    }
}
 
class Administrator extends Member {
    public function createForum( $forumName ) {
        echo "$this->username created a new forum: $forumName<br>";
    }
    public function banMember( $member ) {
        echo "$this->username banned the member: $member->username<br>";
    }
}
 
// Create a new member and log them in
$member = new Member();
$member->username = "shanto";
$member->login();
echo $member->username . " is " . ( $member->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";
 
// Create a new administrator and log them in
$admin = new Administrator();
$admin->username = "Rana";
$admin->login();
echo $admin->username . " is " . ( $member->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";
// Displays "Mary created a new forum: W3programmers"
$admin->createForum( "W3programmers" );
// Displays "Rana banned the member: shanto"
$admin->banMember( $member );
?>
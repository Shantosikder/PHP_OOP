<?php
class Member{
  public $Name="Shanto";
  public $Email="shantosikder77@gmail.com";
  public $mobile="01799541685";
  public  $address="Mirpur,Dhaka,Bangladesh";
}
  
$member = new Member();
  
$memberString = serialize( $member );
 
echo $memberString;
?>

<?php
class oop{
 public function __construct(){
     echo "Welcome to PHP World!";
 }
 public function sayHello(){
     echo "Hello World";
 }
  
 public function __destruct(){
     echo "<br>I'm about to disappear - bye bye!";
 }
 
}
$obj=new oop;
 
echo "<br>";
 
$obj->sayHello();




//PHP Destructor Method argument receive



// class oop{
// private $name;
//  public function __construct($val){
//      return $this->name=$val;
//  }
//  public function sayHello(){
//      echo "Hello World";
//  }
  
//  public function __destruct(){
//      echo "<br>Bye bye $this->name!";
//  }
 
// }
// $obj=new oop("Imran");
 
// echo "<br>";
 
// $obj->sayHello();
 
?>
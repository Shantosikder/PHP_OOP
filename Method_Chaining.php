<?php

class person
{
  private $name="";
  private $age="";
 
  public function setName($name="")
  {
    $this->name=$name;  
    return $this;
  }
  public function setAge($age="20")
  {
    $this->age=$age;
    return $this;
  }
 
  public function getInfo()
  {
    echo "Hello, My name is ".$this->name." And my age is ".$this->age." years.";
  }
}
 
$person = new person();
  $person->setName("Shanto Sikder")->setAge("23")->getInfo();





//Constructor Method Parameter Argument 




//   class Car {
//   private $model;
   
//   //__construct
//   public function __construct ($model)
//   {
//     $this -> model = $model;
//   }
    
//   public function getCarModel()
//   {
//     return ' The car model is: ' . $this -> model;
//   }
// }
   
// //We pass the value of the variable once we create the object
// $car1 = new Car("Mercedes"); // Passing Argument to Constructor Parameter
   
// echo $car1 -> getCarModel();

 ?>
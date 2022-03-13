<?php
class GrandFather
{
    protected $name='shantosikder77';  // A Protected variable
    public function getName(){
      return $this->name;
    }
}
 
class Daddy extends GrandFather // Inherited class
{
    function displayGrandFaName()
    {
        return $this->name; // The Protected Property will be available to the inherited class
    }
 
}
 
$grandFa=new GrandFather;
 
echo $grandFa->getName(),"\n"; //Prints 'shantosikder77'
 
// Inherited class Daddy wants to know Grandpas Name
$daddy = new Daddy;
echo $daddy->displayGrandFaName(),"\n"; // Prints 'shantosikder77'
 
// Protected Property can not be accessed outside of the class!
$outsiderWantstoKnowGrandpasName = new GrandFather;
echo $outsiderWantstoKnowGrandpasName->name; // // Results in a Fatal Error
 
?>
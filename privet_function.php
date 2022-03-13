<?php
class GrandFather
{
    private $name='Shanto sikder';  // A Protected variable
    public function getName(){
      return $this->name;
    }
}
 
class Daddy extends GrandFather // Inherited class
{
    function displayGrandFaName()
    {
        return $this->name; // The Private Property will not available to the inherited class and will show notice
    }
 
}
 
$grandFa=new GrandFather;
 
echo $grandFa->getName(),"\n"; //Prints 'Shanto sikder'
echo $gradFa->name, "\n"; //Results in a Notice 
 
// Inherited class Daddy wants to know Grandpas Name
$daddy = new Daddy;
echo $daddy->displayGrandFaName(),"\n"; // Results in a Notice 
 
// Protected Property can not be accessed outside of the class!
$outsiderWantstoKnowGrandpasName = new GrandFather;
echo $outsiderWantstoKnowGrandpasName->name; // // Results in a Fatal Error
 
?>
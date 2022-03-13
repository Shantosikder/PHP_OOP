<?php
class SimpleClass
{
    // property declaration
   static public $var = 'Name: '.'Shanto Sikder';
   const a="Round: "."IDB_PWAD50";
 
    //  method declaration 
    public function sayHello() {
        echo self::$var; // use self with scope resolution Operator
        echo "<br>", self::a;
    }
}
$obj=new SimpleClass;
$obj->sayHello();

// Making and using of Class, Object and Class Members

?>

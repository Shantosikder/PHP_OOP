<?php
class testStatic{
     
  public static $count = 0;
 
   
  public static function counter(){
      echo "Its Static Counter";
  }
  
}
 
//Accessing Static Property and Method Outside of the Class
testStatic::$count='Shanto PWAD50'; // Assigning Value to static Property
echo testStatic::$count; // Calling Static Property with Updated Value
echo "<br>";
testStatic::counter(); // Calling Static Method with Updated Value


//“self” keyword এর ব্যবহার

// class Course{
//     protected static $courseName = 'Professional PHP';
//     public static function getCourseName(){
//         return self::$courseName;
//     }
// }
  
// class Student extends Course{
//     protected static $courseName = 'Laravel';   
// }
  
// echo Student::getCourseName(); // Professional PHP, not Laravel
?>
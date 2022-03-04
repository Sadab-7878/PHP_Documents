<?php 

  /* function ABC() {

    echo "<br>Hello I am Sadab.";
    echo "<br>";
    echo "Ok Bye!";

   } 

   echo "This is Bangladesh.";
   ABC(); */


  /* function sum($a,$b) {

        echo $a+$b;
   
   }


   sum(10,20); */



// function hello($fname = "First",$lname="Last") {
//
//      $v = "$fname $lname";
//
//      return $v;
// 
// }
//
  // echo hello();

  //$name = hello();
//
  //echo $name;



 //function sum($math,$eng,$science) {

 //  $s = $math + $eng + $science;

 //  return $s;
 //
 //}

 //function percentage($st) {
 //  
 //      echo  $per = $st/3 ;
 //}

 //  $total = sum(55,6,34);

 //  percentage($total);

 //  echo "<br> Total is: " . $total;

  // function testing(&$string) {
  //     
  //     $string = "This is an Integer";
  // }


  // $str = "This is a String";
  // testing($str);
  // echo $str;


  //Variable Functions


    // function wow($name) {

    //   echo "Hello $name";
    // 
    // }


    // $func = "wow";

    // $func("Sadab Uz Zaman");



  //$wow = function ($name) {

  //   echo "Hello $name";
  // 
  // };


  //

  // $wow("Sadab Uz Zaman");


  //Recursive Function

    
 //function display($number) {

 //  if($number <= 5){

 //    echo "$number <br>";

 //    display($number+1);
 //    

 //  }

 // 
 // 
 //
 //}

 //display(2);

//
// function factorial($n) {
//
//  if($n == 0){
//
//    return 1;
//
//  }
//
//
//  else {
//    return ($n * factorial($n-1));
//  }
//
// 
// 
//
//}
//
// echo factorial(5);


    //Variable Scope

   /*   $x = 10;
    function test() {


      $x = 10;
      echo "Variable X inside function : $x";
    
    }

    test();
    
    echo "Variable X outside function : $x"; */

    //... Or

   /* $x = 10;
    function test() {


      global $x ;
      echo "Variable X inside function : $x <br>";
    
    }

    test();
    
    echo "Variable X outside function : $x"; */



    $x = 10;
    $y = 5;
    function test() {


      global $x , $y ;

      $x = $x + $y;
     
    
    }

    test();
    
    echo $x;
?>
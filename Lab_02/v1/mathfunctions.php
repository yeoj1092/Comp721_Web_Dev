<!DOCTYPE html>
<html>

<head>
   <title>Lab02 Task 3 - Math Functions</title>
   <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>

<body>
   <?php
   $number = $_GET['number'];
   factorial($number);
   function factorial($n)
   {
      // declare the factorial function
      $result = 1; // declare and initialise the result variable
      $factor = $n; // declare and itialise the factor variable
      while ($factor > 1) {
         // loop to multiple all factor untill 1
         $result = $result * $factor;
         $factor--; // next factor
      } // note that the factor 1 is not multiplied
      return $result;
   }
   ?>
</body>

</html>
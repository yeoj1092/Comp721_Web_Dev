<!DOCTYPE html>
<html>

<head>
   <!-- This line specifies the title of the page, which is displayed in the browser's title bar or tab -->
   <title>PHP Function</title>
   <!-- This line specifies the content type and character encoding for the HTML document -->
   <meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
</head>

<body>
   <!-- This is the main heading of the page -->
   <h1>Use of PHP built-in function</h1>
   <?php
   /* 
            This block of code uses the abs() and pow() built-in functions,
            and the echo statement to output the result of the functions.
         */
   echo '<p>Absolute value of -9 is: ', abs(-9), '.</p>';
   echo '<p>2 to the power of 5 is : ', pow(2, 5), '.</p>';
   ?>
   <?php
   /* 
            This block of code uses the decbin() and bindec() functions
            to convert between decimal and binary numbers.
         */
   echo '<p>Decimal equivalent of 1101 is: ', bindec(1101), '.</p>';
   echo '<p>Binary equivalent of 14 is: ', decbin(14), '.</p>';
   ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constant</title>
</head>

<body>
    <?php
    /* 
      constant mirip seperti variable dan tidak boleh di ganti valuenya atau undefined  

      ada 2 cara membuat constant di php:
      - define()
      - const
      
      perlu di ingat, constant bersifat global variable, yang dimana constant dapat diakses disemua scope

      a  constant is an identifier (name) for a simple value. The value cannot be changed during the script.
      A valid constant name starts with a letter or underscore (no $ sign before the constant name).
      Note: Unlike variables, constants are automatically global across the entire script.

    */

    /* 
        Parameters:

        name: Specifies the name of the constant
        value: Specifies the value of the constant
        case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false. Note: Defining case-insensitive constants was deprecated in PHP 7.3. PHP 8.0 accepts only false, the value true will produce a warning.
    */

    /* 
      # define(name, value, case-insensitive);
      # const NAME = "david";
      
      const vs. define()

      - const are always case-sensitive
      - define() has has a case-insensitive option.
      - const cannot be created inside another block scope, like inside a function or inside an if statement.
      - define can be created inside another block scope.
    */

    define("GREETING", "Hello David!");
    echo "<br>";
    echo GREETING;

    function myTest()
    {
        echo "<br>";
        echo GREETING . " bagaimana kabarmu?";
    }

    myTest();



    /*
      kita bisa membuat constant array dengan funciton define()
    */
    echo '<h3>PHP Constant Arrays</h3>';
    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
    ]);
    echo cars[0];
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable scopes</title>
</head>

<body>
    <!-- 

    PHP has three different variable scopes:
- local
- global
- static
-->

    <?php
    // global variable hanya bisa di gunakan diluar function
    $global = "global variable"; // global scope

    function testGlobal()
    {
        // error karena variable berada diluar scopenya
        echo "<p>This is global var: $global </p>";
    }
    testGlobal();

    echo "<p>This is global var: $global</p>";

    // local variable
    function testLocal()
    {
        // local variable hanya dapat digunakan di dalam scopenya
        $local = "local variable"; // local scope
        echo "<p>This is local var: $local </p>";
    }
    testLocal();

    // error karena variable berada dalam scope berbeda
    echo "<p>This is local var: $local</p>";


    // namun jika kita ingin mengakses global variable, kita bisa menggunakan keyword global
    $firstName = "David";
    $lastName = "Pinarto";
    $fullName = null; // This will hold the concatenated full name

    $a = 5;
    $b = 2;
    $c = null;
    // Define a function to set the full name
    function setFullName()
    {
        global $firstName, $lastName, $fullName;
        $fullName = $firstName . ' ' . $lastName; // tanda '.' digunakan untuk string concatination
    }

    function multiply()
    {
        global $a, $b, $c;
        $c = $a * $b;
    }

    // Call the function to set the full name
    setFullName();
    echo "<p>My name is $fullName</p>"; // "My name is David Pinarto"

    multiply();
    echo "<p>$a * $b = $c</p>"; // "1 + 2 = 3"


    // PHP juga menyimpan global variables di dalam array dengan syntax $GLOBALS[index]. index adalah nama dari variable. Array ini juga dapat digunakan di dalam function dan bisa digunakan untuk mengupdate global variable secara langsung

    $x = 5;
    $y = 10;

    function myTest()
    {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    myTest();
    echo $y; // outputs 15



    // PHP The static Keyword
    // di php normalnya semua variable di dalam sebuah function akan hilang setelah function selesai di eksekusi, namun terkadang ktia tidak ingin variable tersebut tidak hilang, maka kita bisa menggunakan keyword static untuk kasus seperti ini

    function staticKeyword()
    {
        static $x = 0;
        echo "<br>";
        echo $x;
        $x++;
    }

    staticKeyword();
    staticKeyword();
    staticKeyword();
    ?>

</body>

</html>
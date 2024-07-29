<!DOCTYPE html>
<html>

<body>

    <?php
    $myName = "David Pinarto";
    $myAge = 23;

    echo $myName;
    echo "<br>";
    echo $myAge;
    echo "<br>";

    // mirip seperti javascript string literal
    echo "<br>";
    echo "my name $myName!";
    echo "<br>";

    // bisa juga seperti string concatination
    echo "<br>";
    echo "my name is " . $myName . "and my age is " . $myAge;
    echo "<br>";

    // contoh pertambahan dengan variable
    echo "<br>";
    $x = 5;
    $y = 4;
    echo $x + $y;
    echo "<br>";

    // untuk mendapatkan informasi type data dari sebuah variable
    echo "<br>";
    var_dump($x);
    echo "<br>";
    var_dump($myName);
    echo "<br>";

    echo "<br>";
    var_dump("John");
    echo "<br>";
    var_dump(3.14);
    echo "<br>";
    var_dump(true);
    echo "<br>";
    var_dump([2, 3, 56]);
    echo "<br>";
    var_dump(NULL);
    echo "<br>";
    echo "<br>";

    $var1 = $var2 = $var3 = "Contoh Assign Multiple Values";

    echo $var1;
    echo "<br>";
    echo $var2;
    echo "<br>";
    echo $var3;
    echo "<br>";
    ?>

</body>

</html>
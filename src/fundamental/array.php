<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array</title>
</head>

<body>
    <?php
    /*
        PHP Array Types
        In PHP, there are three types of arrays:

        - Indexed arrays - Arrays with a numeric index
        - Associative arrays - Arrays with named keys
        - Multidimensional arrays - Arrays containing one or more arrays
    */

    // Indexed array
    echo '<h3>Indexed array</h3>';
    $cars = array("Volvo", "BMW", "Toyota");
    // access the index array
    echo $cars[0];

    // change array
    echo "<br>";
    $cars[0] = "Yamaha";
    echo $cars[0];

    // loop the array
    echo '<h4>Loop the array</h4>';
    foreach ($cars as $x) {
        echo "$x <br>";
    }

    echo '<h4>Push item to the array</h4>';
    array_push($cars, "Honda");
    var_dump($cars);


    // Associative Arrays
    echo '<h3>Associative Arrays</h3>';
    $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    var_dump($car);

    // Access associative arrays
    echo '<h4>access associative arrays</h4>';
    echo $car["model"];

    // change the value of the associative arrays
    echo '<h4>change value of associative arrays</h4>';
    $car["year"] = 2024;
    var_dump($car);

    // loop the associative arrays
    echo '<h4>loop the associative arrays</h4>';
    /* 
        $x: Represents the key in the current iteration.
        $y: Represents the value associated with the key in the current iteration.
    */
    foreach ($car as $x => $y) {
        echo "$x: $y <br>";
    }


    // Multidimensional Array
    echo '<h3>Multidimensional Arrays</h3>';
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );
    var_dump($cars);
    echo "<br>";
    echo "<br>";

    // this is how to use an array in an array in PHP
    echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
    echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
    echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
    echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";

    // loop the Multidimensional arrays
    echo '<h4>loop the Multidimensional arrays</h4>';
    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }




    // add array items, remove arrays, and sorting arrays
    echo "<h3>add array items, remove arrays, and sorting arrays</h3>";
    echo "<h4>indexed array</h4>";
    $karyawan = [
        "Davod",
        "Eko",
        "Budi",
    ];
    var_dump($karyawan);

    echo "<h5>add items to index array</h5>";
    $karyawan[] = "Baru";
    var_dump($karyawan);

    echo "<h5>add multiple value to index array</h5>";
    array_push($karyawan, "Joko", "Bryyan", "Lemon");
    var_dump($karyawan);

    echo "<h4>associative array</h4>";
    $dataDavid = [
        "name" => "David",
        "age" => 23,
        "email" => "davidpinarto90@gmail.com",
    ];
    var_dump($dataDavid);

    echo "<h5>add items to associative array</h5>";
    $dataDavid["from"] = "makassar";
    var_dump($dataDavid);

    echo "<h5>add multiple value to associative array</h5>";
    // kita menggunakan operator += untuk menambahkan multiple value pada associative array
    $dataDavid += ["hobi" => "Baca manhwa", "laptop" => "lenovo"];
    var_dump($dataDavid);

    ?>
</body>

</html>
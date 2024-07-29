<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
</head>

<body>
    <?php
    // While Loop
    echo "<h3>While Loop Example</h3>";
    $i = 1;
    while ($i <= 5) {
        echo "<p>Number: $i</p>";
        $i++;
    }

    // While loop with break
    echo "<h3>While Loop with break Example</h3>";
    $i = 1;
    while ($i < 6) {
        if ($i == 3) break;
        echo $i;
        echo "<br>";
        $i++;
    }

    // While loop with continue
    echo "<h3>While Loop with continue Example</h3>";
    $i = 0;
    while ($i < 6) {
        $i++;
        if ($i == 3) {
            echo "<p>Ups nomor 3 hilang</p>";
            continue;
        };
        echo $i;
        echo "<br>";
    }

    // Do...While Loop
    echo "<h3>Do...While Loop Example</h3>";
    $i = 1;
    do {
        echo "<p>Number: $i</p>";
        $i++;
    } while ($i <= 5);

    // For Loop
    echo "<h3>For Loop Example</h3>";
    for ($i = 1; $i <= 5; $i++) {
        echo "<p>Number: $i</p>";
    }

    // Foreach Loop with Simple Array
    echo "<h3>Foreach Loop with indexed Array Example</h3>";
    $colors = array("Red", "Green", "Blue", "Yellow"); // bisa juga ["Red","Green","Blue","Yellow"]
    foreach ($colors as $color) {
        echo "<p>Color: $color</p>";
    }

    // Foreach Loop with Simple Array
    echo "<h3>Foreach Loop with Object</h3>";
    class DataKaryawan
    {
        // ini adalah properties 
        public $name;
        public $age;
        public $email;
        // ini adalah constructor
        public function __construct($name, $age, $email)
        {
            $this->name = $name;
            $this->age = $age;
            $this->email = $email;
        }
        // ini adalah method
        function printNama() {
            return $this->name . " will be printed now";
        }
    }

    $dataKaryawan = new DataKaryawan("David", 23, "davidpinarto90@gmail.com");
    foreach ($dataKaryawan as $x => $y) {
        echo "$x: $y <br>";
    }
    echo $dataKaryawan->printNama() . "<br><br>";

    $object = new DataKaryawan("Eko", 25, "eko@email.com");
    foreach ($object as $key => $value) {
        echo "$key: $value <br>";
    }


    // Foreach Loop with Associative Array
    echo "<h3>Foreach Loop with Associative Array Example</h3>";
    $ages = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
    foreach ($ages as $name => $age) {
        echo "<p>$name is $age years old.</p>";
    }
    ?>

</body>

</html>
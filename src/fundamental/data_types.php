<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data types</title>
</head>

<body>
    <!-- 
  PHP supports the following data types:

- String
- Integer
- Float (floating point numbers - also called double)
- Boolean
- Array
- Object
- NULL
- Resource 

-->


    <?php
    // string
    # string bisa menggunakan petik satu ataupun petik 2
    echo "<h3>Data type String</h3>";
    $firstName = "David";
    $lastName = 'Pinarto';
    var_dump($firstName);
    var_dump($lastName);

    // integer
    /* 
        tipe data integer adalah angka non-desimal dengan range -2,147,483,648 dan 2,147,483,647.

        aturan untuk tipe data integer:

        minimal ada 1 digit
        tidak boleh angka desimal
        integer boleh negatif ataupun positif berdasarkan range di atas
        integer bisa di spesifikasikan dengan: decimal (base 10), hexadecimal (base 16), octal (base 8), binary (base 2) notation
    */
    echo "<h3>Data type Integer</h3>";
    $a = 1598324;
    echo "<br>";
    var_dump($a);



    // floating point or double
    # floating point adalah tipe data untuk angka yang memiliki  titik desimal atau angka dalam bentuk eksponensial
    echo "<h3>Data type Float or double</h3>";
    $x = 10.365;
    echo "<br>";
    var_dump($x);


    // boolean
    echo "<h3>Data type Boolean</h3>";
    $x = true; # or false
    var_dump($x);



    // Array
    # array adalah tipe data yang menyimpan banyak nilai di dalam satu variable
    echo "<h3>Data type Array</h3>";
    $karyawan = array("Budi", "Joko", "David");
    var_dump($karyawan);



    // Object
    /* 
        Class and Object

        Sebuah class adalah template untuk Object, dan objecct adalah instansi dari sebuah class.

        Ketika object dibuat menggunakan class, object akan mewarisi semua properti dan method dari class, tetapi setiap objek akan memiliki nilai yang berbeda untuk propertinya.

        Jika kita membuat fungsi __construct(), PHP akan secara otomatis memanggil fungsi ini ketika kita membuat sebuah objek dari sebuah kelas.
    */
    echo "<h3>Data type Object</h3>";
    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function message()
        {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }

    $myFirstCar = new Car("Blue", "Honda");
    $mySecondCar = new Car("Black", "Suzuki");
    var_dump($myFirstCar);
    var_dump($mySecondCar);



    # NULL
    # Tip: If a variable is created without a value, it is automatically assigned a value of NULL.
    echo "<h3>Data type NULL</h3>";
    $testNull = "Hello world!";
    $testNull = null;
    var_dump($testNull);





    // Change Data Type
    /*
        If you assign an integer value to a variable, the type will automatically be an integer.

        If you assign a string to the same variable, the type will change to a string:
    */
    echo "<h3>Change data type</h3>";
    $fromIntToStr = 5;
    var_dump($fromIntToStr);

    $fromIntToStr = "Hello";
    echo "<br>";
    var_dump($fromIntToStr);

    echo "<br>";
    /* 
        If you want to change the data type of an existing variable, but not by changing the value, you can use casting.

        Casting allows you to change the data type of variables:
    */
    $fromInt = 5;
    echo "<br>";
    var_dump($fromInt);
    $intToStringByCasting = (string) $fromInt;
    echo "<br>";
    var_dump($intToStringByCasting);
    ?>
</body>

</html>
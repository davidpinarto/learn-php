<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function Type Declaration</title>
</head>

<body>
    <?php

    /*
        PHP is a Loosely Typed Language
        secara otomatis, pada saat variable dibuat, php akan secara langsung memberikan type data pada variable, tergantung nilainya. dan ini akan menyebabkan rawan bug karena misal ada kesalahan "50" + 50, sebenarnya string tidak bisa ditambah dengan integer, tapi secara ajaib, php mengubah string "50" menjadi 50 dan hasilnya menjadi 100 

        di php 7 ada fitur yang bernama type declaration. yang memberi kita sebuah pilihan akan ekspektasi dan menspesifikasikan tipe data untuk argument pada function, untuk mengaktifkannya cukup tulis kode ini di script paling atas: 


        declare(strict_types=1); // kita butuh kode ini untuk mengaktifkan fitur type declarations

    
    */
    function addNumbers(int $a, int $b)
    {
        return $a + $b;
    }
    echo addNumbers(5, "5 days");

    // declare(strict_types=1); // kita butuh kode ini untuk mengaktifkan fitur type declarations
    function addNumbersStrict(int $a, int $b)
    {
        return $a + $b;
    }
    echo addNumbersStrict(5, "5 days");  // Throws an error
    ?>
</body>

</html>
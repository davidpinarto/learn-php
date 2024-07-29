<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function</title>
</head>

<body>
    <?php
    // create function
    function myMessage()
    {
        echo "<h3>create and call function</h3>";
        echo "Hello world!";
    }

    // call function
    myMessage();

    // function arguments
    function familyName($fname)
    {
        echo "<h3>function with arguments</h3>";
        echo "$fname Refsnes.<br>";
    }
    familyName("Jani");


    function setHeight($minheight = 50)
    {
        echo "<h3>default value of arguments</h3>";
        echo "The height is : $minheight <br>";
    }
    setHeight(350);
    setHeight();  // default value 50


    function sum($x, $y)
    {
        return $x + $y;
    }
    echo "<h3>returning value</h3>";
    echo sum(5, 10);  // x + y = ????


    /* 
        secara default, php melakukan pass by default, yang dimana artinya saat sebuah nilai pada variable di assign ke sebuah argument ataupun variable baru, maka nilainya akan di copy, 
        
        berbeda dengan pass by reference yang dimana ketika sebuah nilai pada variable di assing ke sebuah argument ataupun variable baru maaka nilainya akan mereferensikan ke nilai asalnya

        misal:
        $a = 1
        $b = $a
        
        artinya $b meng-copy nilai a dan jika $b + 1, maka hanya nilai b yang berubah, nilai a tidak, karena value $b meng-copy value $a sebelumnya

        untuk pass by reference:
        $a = 1
        $b = $a

        asumsikan php pass by reference maka ketika $b + 1 maka nilai $a akan ikut berubah, karena nilai $b adalah referensi dari nilai $a
    */
    function add_five(&$value)
    {
        $value += 5;
    }
    $num = 2;
    add_five($num);
    echo "<h3>passing by reference value</h3>";
    echo $num;


    // variadic arguments, mirip spread operator javascript
    function sumMyNumbers(...$x)
    {
        $n = array_sum($x);
        return $n;
    }
    echo "<h3>variadic arguments</h3>";
    echo sumMyNumbers(5, 2, 6);

    ?>
</body>

</html>
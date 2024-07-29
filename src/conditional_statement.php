<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conditional Statement</title>
</head>

<body>
    <?php
    $a = 10;
    $b = 20;
    $c = "10";
    // $c = 10;
    // $a = 20;
    // $b = 20;
    // $a = 20;
    // $b = 10;

    // Equal (==)
    echo "<h3>Equal (==)</h3>";
    if ($a == $b) {
        echo "<p>a is equal to b</p>";
    } else {
        echo "<p>a is not equal to b</p>";
    }

    // Identical (===)
    echo "<h3>Identical (===)</h3>";
    if ($a === $b) {
        echo "<p>a is identical to b</p>";
    } else {
        echo "<p>a is not identical to b</p>";
    }

    // Not Equal (!=)
    echo "<h3>Not Equal (!=)</h3>";
    if ($a != $b) {
        echo "<p>a is not equal to b</p>";
    } else {
        echo "<p>a is equal to b</p>";
    }

    // Not Equal (<>)
    echo "<h3>Not Equal (<>):</h3>";
    if ($a <> $b) {
        echo "<p>a is not equal to b</p>";
    } else {
        echo "<p>a is equal to b</p>";
    }

    // Not Identical (!==)
    echo "<h3>Not Identical (!==)</h3>";
    if ($a !== $c) {
        echo "<p>a is not identical to c</p>";
    } else {
        echo "<p>a is identical to c</p>";
    }

    // Greater Than (>)
    echo "<h3>Greater Than (>)</h3>";
    if ($a > $b) {
        echo "<p>a is greater than b</p>";
    } else {
        echo "<p>a is not greater than b</p>";
    }

    // Less Than (<)
    echo "<h3>Less Than (<)</h3>";
    if ($a < $b) {
        echo "<p>a is less than b</p>";
    } else {
        echo "<p>a is not less than b</p>";
    }

    // Greater Than or Equal To (>=)
    echo "<h3>Greater Than or Equal To (>=)</h3>";
    if ($a >= $b) {
        echo "<p>a is greater than or equal to b</p>";
    } else {
        echo "<p>a is less than b</p>";
    }

    // Less Than or Equal To (<=)
    echo "<h3>Less Than or Equal To (<=)</h3>";
    if ($a <= $b) {
        echo "<p>a is less than or equal to b</p>";
    } else {
        echo "<p>a is greater than b</p>";
    }

    // Ternary Operator (Shorthand If)
    echo "<h2>Ternary Operator (Shorthand If)</h2>";
    $result = ($a == $b) ? "a is equal to b" : "a is not equal to b";
    echo "<p>$result</p>";

    // Nested If Statements
    echo "<h2>Nested If Statements</h2>";
    if ($a < $b) {
        echo "<p>a is less than b</p>";
        if ($a === $c) {
            echo "<p>a is identical to c</p>";
        } else {
            echo "<p>a is not identical to c</p>";
        }
    } else {
        echo "<p>a is not less than b</p>";
    }
    ?>
</body>

</html>
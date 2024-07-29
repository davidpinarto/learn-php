<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operator</title>
</head>

<body>
    <?php
    $a = 5;
    $b = 5;

    // Comparison Operators
    echo "<h2>Comparison Operators</h2>";

    // Equal (==)
    $equal = ($a == $b);
    echo "<p>a is " . ($equal ? "equal to" : "not equal to") . " b</p>";

    // Identical (===)
    $identical = ($a === $b);
    echo "<p>a is " . ($identical ? "identical to" : "not identical to") . " b</p>";

    // Not Equal (!=)
    $notEqual = ($a != $b);
    echo "<p>a is " . ($notEqual ? "not equal to" : "equal to") . " b</p>";

    // Not Identical (!==)
    $notIdentical = ($a !== $b);
    echo "<p>a is " . ($notIdentical ? "not identical to" : "identical to") . " b</p>";

    // Greater Than (>)
    $greaterThan = ($a > $b);
    echo "<p>a is " . ($greaterThan ? "greater than" : "not greater than") . " b</p>";

    // Less Than (<)
    $lessThan = ($a < $b);
    echo "<p>a is " . ($lessThan ? "less than" : "not less than") . " b</p>";

    // Greater Than or Equal To (>=)
    $greaterThanOrEqual = ($a >= $b);
    echo "<p>a is " . ($greaterThanOrEqual ? "greater than or equal to" : "less than") . " b</p>";

    // Less Than or Equal To (<=)
    $lessThanOrEqual = ($a <= $b);
    echo "<p>a is " . ($lessThanOrEqual ? "less than or equal to" : "greater than") . " b</p>";

    // Logical Operators
    echo "<h2>Logical Operators</h2>";

    // Logical AND (&&)
    $logicalAnd = ($a == $b && $b > 0);
    echo "<p>Logical AND: " . ($logicalAnd ? "true" : "false") . "</p>";

    // Logical OR (||)
    $logicalOr = ($a == $b || $b < 0);
    echo "<p>Logical OR: " . ($logicalOr ? "true" : "false") . "</p>";

    // Logical XOR (xor)
    $logicalXor = ($a == $b xor $b < 0);
    echo "<p>Logical XOR: " . ($logicalXor ? "true" : "false") . "</p>";

    // Logical NOT (!)
    $logicalNot = !($a == $b);
    echo "<p>Logical NOT: " . ($logicalNot ? "true" : "false") . "</p>";

    // Logical AND (and) (lower precedence)
    $logicalAndLower = ($a == $b and $b > 0);
    echo "<p>Logical AND (lower precedence): " . ($logicalAndLower ? "true" : "false") . "</p>";

    // Logical OR (or) (lower precedence)
    $logicalOrLower = ($a == $b or $b < 0);
    echo "<p>Logical OR (lower precedence): " . ($logicalOrLower ? "true" : "false") . "</p>";

    // Ternary Operator
    echo "<h2>Ternary Operator</h2>";
    $result = ($a == $b) ? "a is equal to b" : "a is not equal to b";
    echo "<p>Ternary Operator: $result</p>";

    // Null Coalescing Operator
    echo "<h2>Null Coalescing Operator</h2>";
    $c = null;
    $result = $c ?? $b;
    echo "<p>Null Coalescing Operator: $result</p>";
    ?>
</body>

</html>
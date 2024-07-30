<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Switch</title>
</head>

<body>
    <?php
    $grade = 95;
    $finished = true;

    echo "<h2>Grade example of switch statement</h2>";

    switch ($finished) {
        case ($grade >= 90):
            echo "<p>Grade is A</p>";
            break;
        case ($grade >= 80):
            echo "<p>Grade is B</p>";
            break;
        case ($grade >= 70):
            echo "<p>Grade is C</p>";
            break;
        case ($grade >= 60):
            echo "<p>Grade is D</p>";
            break;
        default:
            echo "<p>Grade is F</p>";
            break;
    }

    echo "<h2>Work day example of switch statement</h2>";
    $day = 1; // angka merupakan representasi dari hari (1 - 7 or senin - minggu)

    switch ($day) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "<p>Waktunya bekerja!! semangat!!</p>";
            break;
        case 7:
            echo "<p>Horee hari minggu! waktunya berlibur</p>";
            break;
        default:
            echo "<p>Angka yang kamu masukkan tidak valid.</p>";
    }
    ?>
</body>

</html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $pheptinh = $_POST["pheptinh"];
    switch ($pheptinh) {
        case "Addition":
            echo "<h1>Result:</h1> $num1 + $num2 = ".($num1 + $num2);
            break;
        case "Substraction":
            echo "<h1>Result:</h1> $num1 - $num2 = " . ($num1 - $num2);
            break;
        case "Multiply":
            echo "<h1>Result:</h1> $num1 x $num2 = " . ($num1 * $num2);
            break;
        case "Division":
            if ($num2 != 0) {
                echo "<h1>Result:</h1> $num1 : $num2 = " . ($num1 / $num2);
            } else {
                echo "<h1>No Result</h1>";
            }
    }
}
?>
</body>
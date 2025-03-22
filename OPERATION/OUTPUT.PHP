<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Result</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                $op = "+";
                break;
            case "subtract":
                $result = $num1 - $num2;
                $op = "-";
                break;
            case "multiply":
                $result = $num1 * $num2;
                $op = "*";
                break;
            case "divide":
                if ($num2 == 0) {
                    echo "<h3>Error: Division by zero is not allowed.</h3>";
                    exit;
                }
                $result = $num1 / $num2;
                $op = "/";
                break;
            default:
                echo "<h3>Invalid operation.</h3>";
                exit;
        }
        echo "<h3>Result: $num1 $op $num2 = $result</h3>";
    } else {
        echo "<h3>Please enter valid numbers.</h3>";
    }
}
?>

</body>
</html>



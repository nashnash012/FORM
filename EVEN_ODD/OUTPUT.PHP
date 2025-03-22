<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Result</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
    if (is_numeric($num)) {
        if ($num % 2 == 0) {
            echo "<h3>$num is Even</h3>";
        } else {
            echo "<h3>$num is Odd</h3>";
        }
    } else {
        echo "<h3>Please enter a valid number.</h3>";
    }
}
?>

</body>
</html>

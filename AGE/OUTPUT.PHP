<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Verification Result</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST["age"];
    if (is_numeric($age)) {
        if ($age >= 18) {
            echo "<h3>You are an adult.</h3>";
        } else {
            echo "<h3>You are not an adult.</h3>";
        }
    } else {
        echo "<h3>Please enter a valid age.</h3>";
    }
}
?>

</body>
</html>

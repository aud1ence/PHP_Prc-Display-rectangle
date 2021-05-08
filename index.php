<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Rectangle</title>
    <style>
        select {
            width: 250px;
            padding: 10px;
            text-align: center;
        }
        option {
            text-align: center;
        }
    </style>
</head>
<body>
<form method="post">
    <select name="choose">
        <option value="1">Print the Rectangle</option>
        <option value="2" name="squ">Print the square triangle</option>
        <option value="3" name="iso">Print isosceles triangle</option>
        <option id="5" selected>-------------------Choose----------------------</option>
    </select>
    <input type="submit" value="Draw">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $check = $_POST['choose'];

    if ($check == "1") {
        for ($i = 1; $i < 6; $i++) {
            echo " <br> ";
            for ($j = 1; $j <= 5; $j++) {
                echo " * ";
            }
            for ($a = 5; $a < 0; $a--) {
                echo "-";
            }

        }
    }
    if ($check == "2") {
        for ($i = 1; $i <= 8; $i++) {
            echo " <br> ";
            for ($j = 1; $j < $i; $j++) {
                echo " * ";
            }
        }
    }
    if ($check == "3") {
        for ($i = 7; $i >= 1; $i--) {
            echo " <br> ";
            for ($j = 1; $j <= $i; $j++) {
                echo " * ";
            }
        }
    }
}
?>
</body>
</html>

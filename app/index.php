<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

<?php
require_once "./calculatorContorller.php";
?>

<form method="post">
<input type="text" name="num1">

<select name="operation" id="operation">
<option value=""> Select </option>
    <option value="add"> Add </option>
    <option value="minus"> Minus </option>
    <option value="devide"> Devide </option>
    <option value="multiply"> Multiply </option>
</select>
<input type="text" name="num2">
<input type="submit" name="submit">

</form>
    
</body>
</html>
<html>

<head>
    <title>Returning Values</title>
</head>

<body>

<?php
function addFunction($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum;
}
$return_value = addFunction(7, 25);

echo "Returned value from the function : $return_value";
?>

</body>
</html>
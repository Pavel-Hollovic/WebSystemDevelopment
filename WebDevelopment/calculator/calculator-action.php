<?php

$value1 = $_GET["value1"];
$value2 = $_GET["value2"];
$operation = $_GET["operator"];
$result = 0;

echo $value1 . $operation . $value2;

if ($operation == "plus"){
    $result = $value1 + $value2;
}
elseif ($operation == "minus"){
    $result = $value1 - $value2;
}
elseif ($operation == "multi"){
    $result = $value1 * $value2;
}
elseif ($operation == "div"){
    $result = $value1 / $value2;
}
else{
    echo "error with data";
}
    
 echo "<h1>Your result is: " . $result . "</h1>";
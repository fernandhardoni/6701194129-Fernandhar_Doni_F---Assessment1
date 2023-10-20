<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operand1 = $_POST["operand1"];
    $operand2 = $_POST["operand2"];
    $operator = $_POST["operator"];
    
    if ($operator == "+") {
        $result = $operand1 + $operand2;
    } else {
        // error
    }
    
    echo "Hasil: " . $result;
}
?>
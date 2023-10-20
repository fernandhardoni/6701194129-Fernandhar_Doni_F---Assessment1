<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operand1 = $_POST["operand1"];
    $operand2 = $_POST["operand2"];
    $operator = $_POST["operator"];
    
    switch ($operator) {
        case "+":
            $result = $operand1 + $operand2;
            break;
        default:
            // Handle other operators here
    }
    
    echo "Hasil: " . $result;
}
?>
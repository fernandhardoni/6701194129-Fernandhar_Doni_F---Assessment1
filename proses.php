<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operand1 = $_POST["operand1"];
    $operand2 = $_POST["operand2"];
    $operator = $_POST["operator"];
    
<<<<<<< HEAD
    if ($operator == "+") {
        $result = $operand1 + $operand2;
    } else {
        // error
=======
    switch ($operator) {
        case "+":
            $result = $operand1 + $operand2;
            break;
        default:
            // Handle other operators here
>>>>>>> branch-6701194129
    }
    
    echo "Hasil: " . $result;
}
?>
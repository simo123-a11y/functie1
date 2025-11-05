<?php

function getNumber($prompt) {
    return (float)readline($prompt);
}

function getOperation() {
    $operation = readline("Enter operation (+, -, *, /): ");
    return $operation;
}

function calculate($num1, $num2, $operation) {
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return $num2 != 0 ? $num1 / $num2 : "Error: Division by zero!";
        default:
            return "Invalid operation!";
    }
}

while (true) {
    echo "\n=== Simple Calculator ===\n";
    
    $num1 = getNumber("Enter first number: ");
    $operation = getOperation();
    $num2 = getNumber("Enter second number: ");

    $result = calculate($num1, $num2, $operation);
    echo "Result: $result\n";

    $again = readline("Do you want to calculate again? (y/n): ");
    if (strtolower($again) !== 'y') {
        echo "Goodbye!\n";
        break;
    }
}
?>

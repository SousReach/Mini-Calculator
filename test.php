<?php
function getInput($prompt) {
    echo $prompt;
    return trim(fgets(STDIN));
}
$num1 = getInput("Enter the first number: ");
$operator = getInput("Enter operator (+, -, *, /): ");
$num2 = getInput("Enter the second number: ");
if (!is_numeric($num1) || !is_numeric($num2)) {
    echo "Error: Please enter valid numbers.\n";
    exit(1);
}
switch ($operator) {
    case "+":
        $result = $num1 + $num2;
        break;
    case "-":
        $result = $num1 - $num2;
        break;
    case "*":
        $result = $num1 * $num2;
        break;
    case "/":
        if ($num2 == 0) {
            echo "Error: Cannot divide by zero.\n";
            exit(1);
        }
        $result = $num1 / $num2;
        break;
    default:
        echo "Error: Invalid operator. Use +, -, *, or /.\n";
        exit(1);
}
echo "Result: $num1 $operator $num2 = $result\n";

?>


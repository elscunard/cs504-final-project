<?php
// Calculate the factorial of a given number
function factorial($n) {
    if ($n <= 1) {
        return 1;
    }
    else {
        return $n * factorial($n-1);
    }
}

// Test the function with different inputs
echo "Factorial of 5: ", factorial(5), "\n";
echo "Factorial of 7: ", factorial(7), "\n";
echo "Factorial of 10: ", factorial(10), "\n";
?>

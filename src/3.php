<?php
// Generate a random integer between 1 and 10
$randomNumber = rand(1, 10);

// Check if the number is odd or even
if ($randomNumber % 2 == 0) {
    echo "The number $randomNumber is even.";
} else {
    echo "The number $randomNumber is odd.";
}
?>
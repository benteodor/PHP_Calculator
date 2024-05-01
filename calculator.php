<?php

class Calculator {
    public function add($num1, $num2) {
        return $num1 + $num2;
    }

    public function subtract($num1, $num2) {
        return $num1 - $num2;
    }

    public function multiply($num1, $num2) {
        return $num1 * $num2;
    }

    public function divide($num1, $num2) {
        if ($num2 == 0) {
            return "Error: Division by zero";
        }
        return $num1 / $num2;
    }
}

// Function to sanitize input
function sanitizeInput($input) {
    $input = trim($input); // Remove whitespace from the beginning and end
    $input = stripslashes($input); // Remove backslashes (\)
    $input = htmlspecialchars($input); // Convert special characters to HTML entities
    return $input;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create an instance of the Calculator class
    $calculator = new Calculator();

    // Get the values from the form and sanitize them
    $num1 = isset($_POST["num1"]) ? sanitizeInput($_POST["num1"]) : "";
    $num2 = isset($_POST["num2"]) ? sanitizeInput($_POST["num2"]) : "";

    // Validate inputs
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "<p>Error: Please enter valid numeric values for numbers.</p>";
    } else {
        // Check which button was clicked and perform the corresponding operation
        if (isset($_POST["add"])) {
            $result = $calculator->add($num1, $num2);
        } elseif (isset($_POST["subtract"])) {
            $result = $calculator->subtract($num1, $num2);
        } elseif (isset($_POST["multiply"])) {
            $result = $calculator->multiply($num1, $num2);
        } elseif (isset($_POST["divide"])) {
            if ($num2 == 0) {
                $result = "Error: Division by zero";
            } else {
                $result = $calculator->divide($num1, $num2);
            }
        }

        // Display the result
        echo "<p>Result: $result</p>";
    }
}
?>

    
    
        
    
<?php
/**
 * PHP Basics Guide
 * 
 * A comprehensive cheat sheet covering core language fundamentals.
 * File Name: php_basics.php
 * Usage: Run via CLI using `php php_basics.php` or execute in a local server environment.
 */

// ==========================================
// 1. BASIC SYNTAX & OUTPUT
// ==========================================

// This is a single-line comment

# This is also a single-line comment

/*
   This is a multi-line comment.
   Use it for long descriptions.
*/

// Printing to the screen (echo is faster, print returns a value of 1)
echo "Hello, World!\n"; 
print "Printing with print statement.\n";


// ==========================================
// 2. VARIABLES & DATA TYPES
// ==========================================

// Variables start with a '$' and are case-sensitive
$stringVar = "GitHub Developer"; // String
$intVar    = 2026;               // Integer
$floatVar  = 99.99;              // Float / Double
$boolVar   = true;               // Boolean
$nullVar   = null;               // NULL

// Constant definition (global, cannot be changed)
define("SITE_URL", "https://github.com");
const APP_VERSION = "1.0.0";


// ==========================================
// 3. ARRAYS
// ==========================================

// Indexed Array
$programmingLanguages = ["PHP", "JavaScript", "Python"];
echo "First item: " . $programmingLanguages[0] . "\n";

// Associative Array (Key-Value Pairs)
$userProfile = [
    "username" => "dev_johndoe",
    "role"     => "Contributor",
    "repo_count" => 14
];
echo "Username: " . $userProfile["username"] . "\n";


// ==========================================
// 4. STRINGS & CONCATENATION
// ==========================================

// Single quotes treat strings literally
echo 'Version: $intVar \n'; // Outputs: Version: $intVar \n

// Double quotes parse variables and escape sequences
echo "Version: $intVar \n"; // Outputs: Version: 2026

// String Concatenation uses the dot (.) operator
echo "Welcome to " . SITE_URL . "\n";


// ==========================================
// 5. CONTROL STRUCTURES & CONDITIONALS
// ==========================================

$score = 85;

if ($score >= 90) {
    echo "Grade: A\n";
} elseif ($score >= 80) {
    echo "Grade: B\n";
} else {
    echo "Grade: C\n";
}

// Ternary Operator shorthand
$status = ($boolVar) ? "Active" : "Inactive";


// ==========================================
// 6. LOOPS
// ==========================================

// While Loop
$count = 1;
while ($count <= 3) {
    echo "Count: $count\n";
    $count++;
}

// For Loop
for ($i = 0; $i < 3; $i++) {
    echo "Index: $i\n";
}

// Foreach Loop (Best for iterating arrays)
foreach ($programmingLanguages as $language) {
    echo "Language: $language\n";
}

// Foreach Loop with Key-Value pairs
foreach ($userProfile as $key => $value) {
    echo "$key: $value\n";
}


// ==========================================
// 7. FUNCTIONS
// ==========================================

/**
 * Calculates the sum of two numbers.
 *
 * @param int|float $num1
 * @param int|float $num2
 * @return int|float
 */
function calculateSum($num1, $num2) {
    return $num1 + $num2;
}

$result = calculateSum(15, 25);
echo "Sum Result: $result\n";


// ==========================================
// 8. SUPERGLOBALS (Built-in Variables)
// ==========================================

// Superglobals are accessible everywhere in your script.
// Examples include: $_GET, $_POST, $_SERVER, $_SESSION, $_COOKIE.

echo "Running Script: " . $_SERVER['PHP_SELF'] . "\n";


// ==========================================
// 9. OBJECT-ORIENTED PROGRAMMING (OOP) BASICS
// ==========================================

class Repository {
    // Properties
    public $name;
    private $isPrivate;

    // Constructor
    public function __construct($name, $isPrivate = false) {
        $this->name = $name;
        $this->isPrivate = $isPrivate;
    }

    // Method
    public function getDetails() {
        $privacy = $this->isPrivate ? "Private" : "Public";
        return "Repository: {$this->name} ($privacy)\n";
    }
}

// Instantiate an Object
$myRepo = new Repository("php-basics-cheat-sheet", false);
echo $myRepo->getDetails();

?>
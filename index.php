<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!--Act1-->
<?php
$count = 2;
while ($count <= 20) {
    echo $count . " ";
    $count += 2;
}
?>

<!--Act2-->
<?php
$password = "";
do {
    echo "Please enter the password: ";
    $password = trim(fgets(STDIN));
    
    if ($password !== "password123") {
        echo "Incorrect password.\n";
    }
} while ($password !== "password123");

echo "Access Granted.";
?>

<!--Act3-->
<?php
for ($i = 1; $i <= 10; $i++) {
    echo "7 x $i = " . (7 * $i) . "\n";
}
?>

<!--Act4-->
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // Skip number 5
    }
    if ($i == 8) {
        break; // Stop loop at number 8
    }
    echo $i . " ";
}
?>

<!--Act5-->
<?php
$sum = 0;
$count = 1;

while ($count <= 100) {
    $sum += $count;
    $count++;
}

echo "The sum of numbers from 1 to 100 is: $sum";
?>

<!--Act6-->
<?php
$movies = [
    "The Shawshank Redemption",
    "Inception",
    "The Dark Knight",
    "Interstellar",
    "Parasite"
];

foreach ($movies as $index => $movie) {
    echo ($index + 1) . ". " . $movie . "\n";
}
?>

<!--Act7-->
<?php
$student = [
    "Name" => "Alice",
    "Age" => 20,
    "Grade" => "A",
    "City" => "Baguio"
];

foreach ($student as $key => $value) {
    echo "$key: $value\n";
}
?>

<!--Act8-->
<?php
$number = 5; // Change this value for different inputs
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

echo "Factorial of $number is: $factorial";
?>

<!--Act9-->
<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo "$i ";
    }
}
?>
<!--Act10-->
<?php
$number = intval(readline("Enter a number: "));
$isPrime = true;

if ($number < 2) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>

<!--Act11-->
<?php
$fib1 = 0;
$fib2 = 1;

echo "$fib1 $fib2 ";

$count = 2;
while ($count < 10) {
    $nextFib = $fib1 + $fib2;
    echo "$nextFib ";
    
    // Update for next iteration
    $fib1 = $fib2;
    $fib2 = $nextFib;
    
    $count++;
}
?>

<!--Act12-->
<?php
$string = "Hello"; // Change this string for different inputs
$reversedString = "";

for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $reversedString .= $string[$i];
}

echo "Output: \"$reversedString\"";
?>
    
</body>
</html>
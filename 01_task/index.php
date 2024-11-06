<?php
// 1. Given a name S. Print "Hello, (name)" without parentheses.
print "Hello, Omar" . "<br>";

// 2.Given two numbers X and Y. Print the summation and multiplication and 
$X = 5;
$Y = 10;

print "Summation: $X + $Y = " . ($X + $Y) . "<br>";
print "Multiplication: $X * $Y = " . ($X * $Y) . "<br>";
print "subtraction: $X * $Y = " . ($X - $Y) . "<br>";

// 3. Given four numbers A, B, C and D. Print the result of the following
$A = 1;
$B = 2;
$C = 3;
$D = 4;

$S = ($A * $B) - ($C * $D);
print $S . "<br>";

// 4. Given two numbers N and M. Print the summation of their last digits
$q = 12;
$p = 13;
$w = 10;
$Q = 12 - $w;
$P = 13 - $w;

print $Q + $P . "<br>";

// 5. Given a number X. Print "EVEN" if the first digit of X is even number. Otherwise
// print "ODD"
$O = 10000;
if ($O % 2 == 0) {
    print "EVEN" . "<br>";
} else {
    print "ODD" . "<br>";
}

// 6. Memo and Momo are playing a game. Memo will choose a positive number a, and
// Momo will choose a positive number b
$v = 10;
$j = 3;
$k = 20;

if ($k % $j == 0 && $k % $v == 0) {
    print "Both" . "<br>";
} else if ($k % $j == 0 && $k % $v != 0) {
    print "Memo" . "<br>";
} else if ($k % $v == 0 && $k % $j != 0) {
    print "Momo" . "<br>";
} else {
    print "No One" . "<br>";
}

// 7. A number of two digits is lucky if one of its digits is divisible by the other.
// For example, 39, 82, and 55 are lucky, while 79 and 43 are not.
$p = 5;
$i = 5;
$h = $p . $i;
print $p . $i . "<br>";
if ($p % $i == 0  &&  ($h >= 10 && $h <= 100)  ) {
    print "Yes" . "<br>";
} else {
    print "No" . "<br>";
}

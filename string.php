<?php

// Problem 1: Statement(String)

$strings = ["Bangladesh", "Laravel", "PHP", "Assignment"];

foreach ($strings as $original) {    
    preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $original, $matches);
    $consonantCount = count($matches[0]);   
    $uppercase = strtoupper($original);   
    echo "Original String: {$original}, Consonant Count: {$consonantCount}, Uppercase String: {$uppercase}" . PHP_EOL;
}

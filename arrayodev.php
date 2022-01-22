<?php

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

echo "<pre>";
print_r($planets);


echo "<br>"; 
// Defining a callback function
function myFilter($var){
    return ($var !== NULL && $var !== FALSE && $var !== "");
}

// Filtering the array
$result = array_filter($planets, "myFilter");     
print_r($result);
?>
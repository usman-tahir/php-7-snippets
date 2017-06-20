<?php

// Fetch the value of $_GET['user] and returns 'not passed' if username is not passed
$username = $_GET['username'] ?? 'not passed';
print($username . "<br>");

// The equivalent code using a ternary operator
$username = isset($_GET['username']) ? $_GET['username'] : 'not passed';
print($username . "<br>");

// Chaining ?? operation
$username = $_GET['username'] ?? $_POST['username'] ?? 'not passed';
print($username . "<br>");

?>
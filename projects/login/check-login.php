<?php

// Configured based on the database used
$host = '';
$username = '';
$password = '';
$database = '';
$table = ''; // Using only one table for this mini-application

// Connect to the server and select the database
mysql_connect("$host", "$username", "$password")or die("<h3>Cannot connect to the database.</h3>");
mysql_select_db("$database")or die("<h3>Cannot select this database: $database</h3>");

// Gather the credentials from the form
$formUsername = mysql_real_escape_string(stripslashes($_POST['username']));
$formPassword = mysql_real_escape_string(stripslashes($_POST['password']));

// Create the query
$query = "SELECT * FROM $table WHERE username='$formUsername' AND password='$formPassword'";
$result = mysql_query($query);

// Count the number of rows returned (ideally 1)
$count = mysql_num_rows($result);

if ($count == 1) {
    session_register("formUsername");
    session_register("formPassword");
    header("location:login-success.php");
} else {
    echo "Incorrect username/password combination.";
}

?>
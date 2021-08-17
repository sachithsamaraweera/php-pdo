<?php
//read.php
include_once 'connect.php';

$fname = mysql_fix_string($conn, $_POST['fname']);
$password = mysql_fix_string($conn, $_POST['pass']);

$sql = "SELECT * FROM users WHERE fname=$fname AND pass=$password";


function mysql_fix_string($conn, $string)
{
    if (get_magic_quotes_gpc()) {
        $string = stripslashes($string);
    }
    return $conn->quote($string);
}

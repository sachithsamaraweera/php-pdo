<?php
//insert.php
include_once 'connect.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['pass'];


try {
    $sql = "INSERT INTO users(first,last,email,password)
    VALUES('$fname','$lname','$email','$password')";
    $conn->exec($sql);
} catch (PDOException $e) {
    echo $sql . "<br>";
    echo $e->getMessage();
}

header('location:register.php');

<?php

//read.php

require_once("connect.php");
$query = "SELECT * FROM users";
$result = $conn->query($query);
$row = $result->fetch();


<?php
include "../classes/User.php";

$user = new User;
$user->login($_POST);  //$_POST holds the data from the form in Login


?>
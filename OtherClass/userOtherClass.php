<?php
include_once "../MyClass/User.php";
use \MyProject\User;

$user2 = new User("Джон", 33);
$user2->getInfo();
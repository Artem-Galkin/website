<?php
// sessions()

session_start();
$_SESSION['username'] = "Artem";
$_SESSION['password'] = "coding";
$_SESSION['email'] = "coding@gmail.com";
echo "Session data is saved";

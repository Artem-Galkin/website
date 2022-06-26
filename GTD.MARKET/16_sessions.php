<?php
//sessions()
session_start();
$_SESSION['username'] = "Artem";
$_SESSION['password'] = "coding";
$_SESSION['email'] = "artem.galkin2020@mail.ru";
echo "Session data is saved";

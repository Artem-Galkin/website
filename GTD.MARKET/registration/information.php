<?php
session_start();
if (isset($_SESSION['username'])) {
  echo "Welcom " . $_SESSION['username'];
  echo "br";
  echo "And your password is " . $_SESSION['password'];
  echo "br";
  echo "And your password is " . $_SESSION['email'];
} else {
  echo "Please logi again to continbue";
}

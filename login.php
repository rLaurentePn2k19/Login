<?php
$username = $_POST['username'];
$password = $_POST['password'];

$userData = array(
  'username' => $username,
  'password' => $password
);

echo json_encode($userData);
?>
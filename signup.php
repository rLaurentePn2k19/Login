<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['uname'];
$password = $_POST['pword'];
$email = $_POST['email'];
$confirmpassword = $_POST['confirmpassword'];


$userInfo = array(
  'uname' => $username,
  'pword' => $password,
  'firstname' => $firstname,
  'lastname' => $lastname,
  'email' => $email,
  'confirmpassword' => $confirmpassword
);

echo json_encode($userInfo);
?>
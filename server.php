<?php
include_once 'lib/User.php';

$type = $_GET['type'];
$id = $_GET['id'];
$pw = $_GET['password'];
$email = $_GET['email'];
$userCode = $_GET['user_code'];
$key = $_GET['key'];

switch ($type) {
case 'get':
    User::getData($userCode, $key);
    break;
case 'login':
    User::login($id, $pw);
    break;
case 'sign_up':
    User::signUp($id, $pw, $email);
    break;
}
?>
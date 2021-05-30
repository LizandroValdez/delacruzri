<?php
$password = 'delacruz';
$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
echo $hashedpassword;
?>
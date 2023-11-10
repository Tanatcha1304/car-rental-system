<?php
// Start the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Delete the session cookie
setcookie('login_username', '', time() - 3600, "/");
setcookie('login_role', '', time() - 3600, "/");
setcookie('login_userID', '', time() - 3600, "/");

// Redirect to the login page or any other desired page
header("Location: /test/");
exit();
?>

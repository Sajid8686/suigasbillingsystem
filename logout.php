<?php
// Start or resume a session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or any other desired page
header("Location: adminForm.php");
exit();
?>

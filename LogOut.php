<?php
require_once("includes/Functions.php");
require_once("includes/Sessions.php");

session_destroy();
$_SESSION["UserID"] = null;
$_SESSION["UserName"] = null;

Redirect_to("LoginUser.php");
?>
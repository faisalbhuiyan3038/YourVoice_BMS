<?php
require_once("includes/DB.php");
require_once("includes/Functions.php");
require_once("includes/Sessions.php");
$SearchQueryParameter = $_GET['id'];

global $ConnectingDB;
$sql = "DELETE FROM users WHERE id='$SearchQueryParameter'";
$Execute=$ConnectingDB->query($sql);

if($Execute){
    $_SESSION["SuccessMessage"] = "User Deleted Successfully";
    Redirect_to("ManageUsers.php");
    }
else{
    $_SESSION["ErrorMessage"] = "Something went wrong, Try again!";
    Redirect_to("ManageUsers.php");
    }
?>
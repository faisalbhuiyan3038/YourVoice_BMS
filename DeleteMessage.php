<?php
require_once("includes/DB.php");
require_once("includes/Functions.php");
require_once("includes/Sessions.php");
$SearchQueryParameter = $_GET['id'];

global $ConnectingDB;
$sql = "DELETE FROM contactus WHERE id='$SearchQueryParameter'";
$Execute=$ConnectingDB->query($sql);

if($Execute){
    $_SESSION["SuccessMessage"] = "Message Deleted Successfully";
    Redirect_to("ContactMessages.php");
    }
else{
    $_SESSION["ErrorMessage"] = "Something went wrong, Try again!";
    Redirect_to("ContactMessages.php");
    }
?>
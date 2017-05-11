<?php

/**
 * @author 
 * @copyright 2017
 */

$msg = $_POST['message'];
$name = $_POST['name'];
$email = $_POST['email'];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70); 

// send email
mail("jbhatia.corp@zoho.com","Message from $name [$email]",$msg);

?>
<?php
// the message
$msg = $_GET["message"];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("thomaskarlatkins@gmail.com",$_GET["name"]+":"+$_GET["subject"],$msg);
?>
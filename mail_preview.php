<?php session_start();
if(isset($_SESSION['mail_preview']))
{
	echo $_SESSION['mail_preview'];
}
?>
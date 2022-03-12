<?php
	setcookie('flag', true, time()-3600, '/');
	header('location: ../view/LogIn.html');
?>
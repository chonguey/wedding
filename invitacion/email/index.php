<?php
	require '/home/content/c/h/o/chonguey/html/mercedes-solari/lib/dbCredentials.php';
	require '/home/content/c/h/o/chonguey/html/mercedes-solari/lib/dbLibrary.php';		
	setcookie("lang", 'es', time()+$expires, '/');
	$guestEmail = 	(isset($_GET['guest_email']) ? $_GET['guest_email'] : '');
	if ($guestEmail){
		$guestID = _db_GuestIDFromEmail($db, $guestEmail);		
		_db_SetEmailStatus($db, $guestID, 'Viewed');
		setcookie("guest_id", $guestID, time()+$expires, '/');
		echo $guestID;
	}
	else{
		$guestID = 	(isset($_GET['guest_id']) ? $_GET['guest_id'] : '');    	
    	_db_SetEmailStatus($db, $guestID, 'Viewed');    	
    	setcookie("guest_id", $guestID, time()+$expires, '/');    	
    	header('Location:http://landon-shumway.net/mercedes-solari/invitacion/');
    }
?>
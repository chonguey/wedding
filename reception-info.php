<?php 
	require_once '/home/content/c/h/o/chonguey/html/mercedes-solari/lib/dbCredentials.php';
	require_once '/home/content/c/h/o/chonguey/html/mercedes-solari/lib/dbLibrary.php';	
	
	if (!isset($guestID) && isset($_REQUEST['guest_id'])){
		$guestID = $_REQUEST['guest_id'];
	}
	
	if (!isset($guestID)){
		echo "Fatal Error";
		exit;	
	}	
	
	$guestInfoSQL = _db_GetGuestInfoFromID($db, $guestID);
	$guestInfo = mysqli_fetch_array($guestInfoSQL);
	$guestName = $guestInfo['first'].' '.$guestInfo['last'];
	$language 	= (isset($language) ? $language : (isset($_REQUEST['lang']) ? $_REQUEST['lang'] : 'en'));
	include ($language == 'es' ? '/home/content/c/h/o/chonguey/html/mercedes-solari/reception-info-es.php' : '/home/content/c/h/o/chonguey/html/mercedes-solari/reception-info-en.php'); 
	include '/home/content/c/h/o/chonguey/html/mercedes-solari/attendance-form.php';  
?>
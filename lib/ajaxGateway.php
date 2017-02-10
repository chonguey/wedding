<?php
require '/home/content/c/h/o/chonguey/html/mercedes-solari/lib/dbCredentials.php';
require '/home/content/c/h/o/chonguey/html/mercedes-solari/lib/dbLibrary.php';
srand();

$secureMode = false;
$invalid = "Error!";

## Input Variables
$language =		(isset($language) ? $language : (isset($_REQUEST['lang']) ? $_REQUEST['lang'] : 'en'));
$action = 		(isset($_REQUEST['action']) ? $_REQUEST['action'] : '');
$guestEmail = 	(isset($_REQUEST['guest_email']) ? $_REQUEST['guest_email'] : '');
$guestID = 		(isset($_REQUEST['guest_id']) && preg_match('/^\d+$/', $_REQUEST['guest_id']) ? $_REQUEST['guest_id'] : 0);
$status = 		(isset($_REQUEST['status']) && preg_match('/^Yes$|^No$|^Maybe$/', $_REQUEST['status']) ? $_REQUEST['status'] : 'No');
$attending = 	(isset($_REQUEST['attending']) && preg_match('/^\d+$/', $_REQUEST['attending'] && $status != 'No') ? $_REQUEST['attending'] : 0 );
$successMeh = 	( $language == 'es' ? 'Esperamos que puedan venir' : 'Hope you can make it!');
$success = ( $language == 'es' ? 
	array(
		'Eespectacular!',
		'S&iacute;!',
		'Felicidad!',
		'Okay! :-)'
	) : 
	array(
		'Got it!',
		'Great!',
		'Woot!',
		'Okay! :-)'
	)
);

$successSad = ( $language == 'es' ?
	array(
		'Awwwwwww :-(',
		'Nooooooo!',
		'Tristeza!',
		'Que Lastima!'
	) : 
	array(
		'Awwwwwww :-(',
		'Sorry to hear that!',
		'Darn!',
		'Bummer'
	)
);

$randomIndex = 	rand(0, count($success) - 1);

if ($action == 'update-guest-info'){  
 	if ($secureMode){
		$guestID = _db_VerifyIDFromEmail($db, $guestID, $guestEmail);
	}	
	
	if ($guestID >= 1){ # guest authentication pass		
		_db_SetAttendanceStatus($db, $guestID, $status);		
		_db_SetAttendanceCount($db, $guestID, $attending);				
		
		$message = 
			($status == 'No' 	? '<span class="sad">'.$successSad[$randomIndex].'</span>' : 
			($status == 'Maybe' ? '<span class="meh">'.$successMeh.'</span>' : 
			'<span class="happy">'.$success[$randomIndex].'</span>'
		));
		
		echo $message;
		exit;
	}
}

echo '<span class="sad">'.$invalid.'</span>';	
exit; 


?>
<?php	

$selected = "selected='selected'";
$checked = "checked='checked'";
$expires = 60 * 60 * 24 * 5;
$doorsOpen = "6:00";
$ceremonyStart = "7:00";
$receptionStart = "8:00";
$sendOff = "10:00";
$announcementOnly = (isset($announcementOnly) ? $announcementOnly : false);


######################################################## Count Functions ##########################################################
########################################
function _db_AttendanceCount($db){
	$query = "SELECT sum(attending) FROM guests WHERE status = 'Yes'";	
	return mysqli_query($db, $query);
}



########################################
function _db_MaxAttendanceCount($db){
	$query = "SELECT sum(attending) FROM guests WHERE (status = 'Yes' || status = 'Maybe')";	
	return mysqli_query($db, $query);
}


########################################
function _db_InviteCount($db){
	$query = "SELECT sum(expected) FROM guests";	
	return mysqli_query($db, $query);
}


######################################################## Stat Functions ##########################################################
function _db_GetAttendanceData($db){	
	$query = "SELECT guest_id, first, last, status, email_status, expected, attending FROM guests";
	return mysqli_query($db, $query);	
}

######################################################## User Functions ##########################################################

########################################
function _db_GuestIDFromEmail($db, $email){
	$email = strtolower(trim($email));
	$query = "SELECT guest_id FROM guests WHERE (lower(email) = '$email' OR lower(email2) = '$email') LIMIT 1";
	$result = mysqli_query($db, $query);	
	
	while($data = mysqli_fetch_array($result)){	
		if ($data['guest_id'] && $data['guest_id'] >= 1){
			return $data['guest_id'];	
		}
	}
	
	return 0;
}

########################################
function _db_GetAllEmail($db){	
	$query = "SELECT email, email2 FROM guests";
	$result = mysqli_query($db, $query);	
	$emailList = array();	
	
	while($data = mysqli_fetch_array($result)){	
		array_push($emailList, $data['email']);
		if (isset($data['email2']) && $data['email2'] != ''){
			array_push($emailList, $data['email2']);
		}
	}
	$allEmails = implode(";  ", $emailList);	
	
	return $allEmails;
}


########################################
function _db_VerifyIDFromEmail($db, $id, $email){
	$email = strtolower(trim($email));
	$query = "SELECT guest_id FROM guests WHERE (lower(email) = '$email' OR lower(email2) = '$email') AND guest_id='$id' LIMIT 1";
	$verifiedID = mysqli_query($db, $query);	
	
	if ($verifiedID == $id){
		return $verifiedID;
	}
	
	return 0;	
}

########################################
function _db_GetGuestInfoFromID($db, $id){	
	$query = "SELECT * FROM guests WHERE guest_id = $id LIMIT 1";
	$result = mysqli_query($db, $query);	
	return $result;
}

########################################
function _db_SetEmailStatus($db, $id, $status){
	if ($id == 0){
		return 0;
	}
	$query = "UPDATE guests SET email_status = '$status' WHERE guest_id = $id";
	return mysqli_query($db, $query);	
}

########################################
function _db_SetAttendanceStatus($db, $id, $status){
	$query = "UPDATE guests SET status = '$status' WHERE guest_id = $id";
	return mysqli_query($db, $query);	
}


########################################
function _db_SetAttendanceCount($db, $id, $count){
	$query = "UPDATE guests SET attending = '$count' WHERE guest_id = $id";
	return mysqli_query($db, $query);	
}


########################################
function _db_SetNotes($db, $id, $notes){
	$query = "UPDATE guests SET notes = '$notes' WHERE guest_id = $id";
	return mysqli_query($db, $query);	
}		

?>
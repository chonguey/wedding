<?php
	require_once '/home/content/c/h/o/chonguey/html/mercedes-solari/lib/dbCredentials.php';
	require_once '/home/content/c/h/o/chonguey/html/mercedes-solari/lib/dbLibrary.php';

	$attendanceData = _db_GetAttendanceData($db);
	$segments = Array();
	$inviteTotal = 0;
	$attendanceTotal = 0;

	while($data = mysqli_fetch_array($attendanceData)){
		$name = $data['first'].' '.$data['last'];
		$status = $data['status'];
		if ($data['email_status'] == 'Unsent'){
			$status = 'Unsent';
		}

		if ($status == 'Unanswered' || $status == 'Unsent'){
			$emailOpened = ($data['email_status'] == 'Viewed' ? '<span>Viewed</span>' : '');
			$segments[$status].= '<div><b>'.$name.'</b><i>'.$data['expected'].'</i>'.$emailOpened.'</div>';
		}
		else{
			$segments[$status].= '<div><b>'.$name.'</b><i>'.$data['attending'].'</i></div>';
		}

		$inviteTotal += $data['expected'];
		if ($status == 'Yes'){
			$attendanceTotal+= $data['attending'];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wedding Stats</title>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" sizes="152x152" href="/mercedes-solari/save-the-date/images/drawing/big_heart.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/mercedes-solari/save-the-date/images/drawing/big_heart.png">
	<link href='http://fonts.googleapis.com/css?family=Montserrat|Cookie|Courgette|Handlee|Great+Vibes' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/mercedes-solari/styles/style.css.php"/>
</head>
<body>
	<div id="wrapper">
		<div id="content">
			<div class="paper">
				<div id="slides" style>
					<div class="slide" id="save-the-date" style="display: block; overflow-y: scroll !important;">
						<TABLE id="stats">
							<TR>
								<TD class="fluff"><h1>Wedding Invitation Stats</h1></td>
								<TD class="invited"><h3>Total People on Guest List</h3><?php echo $inviteTotal ?></td>
								<TD class="attending"><h3>Total Attending</h3><?php echo $attendanceTotal ?></td>
							</TR>
						</TABLE>
						<TABLE id="stats">
							<TR>
								<TD class="yes"><h3>Yes</h3><?php echo $segments['Yes'] ?></TD>
								<TD class="maybe"><h3>Maybe</h3><?php echo $segments['Maybe'] ?></TD>
								<TD class="no"><h3>No</h3><?php echo $segments['No'] ?></TD>
							</TR>
						</TABLE>
						<TABLE id="stats">
							<TR>
								<TD class="waiting">
									<h3>Awaiting Reply</h3>
									<?php echo $segments['Unanswered'] ?>
								</TD>
							</TR>
							<TR>
								<TD class="waiting">
									<h3>Invitation Not Sent Yet</h3>
									<?php echo $segments['Unsent'] ?>
								</TD>
							</TR>
						</TABLE>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="isMobile"></div>
	<div id="isPhone"></div>
	<script type="text/javascript" src="/mercedes-solari/scripts/jquery.min.js"></script>
	<script type="text/javascript" src="/mercedes-solari/scripts/site.jquery.php"></script>
	<script type="text/javascript">setLanguage('en');</script>
</body>
</html>
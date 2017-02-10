<?php
	require_once '/home/content/c/h/o/chonguey/html/mercedes-solari/lib/dbCredentials.php';
	require_once '/home/content/c/h/o/chonguey/html/mercedes-solari/lib/dbLibrary.php';
	$language 	= 	(isset($language) ? $language : (isset($_REQUEST['lang']) ? $_REQUEST['lang'] : 'en'));
	$guestID 	= 	(isset($_GET['guest_id']) ? $_GET['guest_id'] : (isset($_REQUEST['guest_id']) ? $_REQUEST['guest_id'] : 0));
	if ($guestID == 0){
		setcookie("guest_id", '', time() - 3600, '/');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mercedes & Landon</title>
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
				<?php include '/home/content/c/h/o/chonguey/html/mercedes-solari/navigation.php'; ?>
				<div id="slides">
					<div class="slide" id="save-the-date"><iframe src="/mercedes-solari/save-the-date/"></iframe></div>
					<div class="slide" id="photos"><?php include '/home/content/c/h/o/chonguey/html/mercedes-solari/photos.php'; ?></div>
					<div class="slide" id="reception"><?php include ($guestID == 0  ? '/home/content/c/h/o/chonguey/html/mercedes-solari/reception-login.php' : '/home/content/c/h/o/chonguey/html/mercedes-solari/reception-info.php'); ?></div>
					<div class="slide" id="gifts"><?php include '/home/content/c/h/o/chonguey/html/mercedes-solari/gifts.php'; ?></div>
					<div class="slide" id="acknowledgements"><?php include ($language == 'es'  ? '/home/content/c/h/o/chonguey/html/mercedes-solari/acknowledge-es.php' : '/home/content/c/h/o/chonguey/html/mercedes-solari/acknowledge-en.php'); ?></div>
				</div>
			</div>
		</div>
	</div>
	<div id="isMobile"></div>
	<div id="isPhone"></div>	
	<script type="text/javascript" src="/mercedes-solari/scripts/jquery.min.js"></script>
	<script type="text/javascript" src="/mercedes-solari/scripts/site.jquery.php"></script>
	<script type="text/javascript">setLanguage('<?php echo $language ?>');</script>
</body>
</html>

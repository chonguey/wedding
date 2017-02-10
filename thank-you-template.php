<?php
	$galleryDirectory = '../images/gallery';
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
	<link rel="stylesheet" type="text/css" href="/mercedes-solari/styles/thank-you-style.css.php"/>
</head>
<body>
	<div id="wrapper">
		<div id="content">
			<div class="paper">				
				<div id="ThankYou">Thank You!</div>
				<div class="thank-you-msg">					
					<div class="courgette">To our family and friends:</div>
					<div class="handlee">It meant the world to us to have you all together.</div>
					<div class="courgette">Thanks to all of you for the support, encouragement,</div>
					<div class="handlee"><b>Love & Laughter</b></div>
					<div class="courgette">you have contributed to our lives.</div>
					<div class="handlee">We hope you enjoyed our celebration and all the</div>
					<div class="courgette">celebrations we'll share for many years to come.</div>												
				</div>
				<div class="flourish"></div>
				<div class="signature">Mercedes & Landon</div>				
				<div class="gallery-messsge handlee">Scroll down for photos of our wedding day!</div>
				<BR clear="all" />
				<div id="gallery">
					<?php
						$images = glob($galleryDirectory.'/*.jpg');
						sort($images);
						foreach($images as $file) {
    					print '<IMG src="../images/trans.png" data-src="'.$file.'" />'; 
						}					
					?>
				</div>
				<div id="footer">
					<img src="../save-the-date/images/drawing/pines.png" class="pines" />					
					<img src="../save-the-date/images/drawing/cabin.png" class="cabin" />					
					<img src="../save-the-date/images/drawing/pine.png" class="pine" />					
					<img src="../save-the-date/images/drawing/who-shadow.png" class="us" />					
					
			</div>
		</div>
	</div>
	<div id="isMobile"></div>
	<div id="isPhone"></div>	
	<script type="text/javascript" src="/mercedes-solari/scripts/jquery.min.js"></script>		
	<script type="text/javascript" src="/mercedes-solari/scripts/jquery.unveil.js"></script>		
	<script>		
		$(document).ready(function() {
  			$("#gallery IMG").unveil(200, function(){
  				$(this).load(function() {
    				this.style.opacity = 1;
  				});	
  			});
		});	
	</script>
</body>
</html>

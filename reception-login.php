<?php
	$language 	= (isset($language) ? $language : (isset($_REQUEST['lang']) ? $_REQUEST['lang'] : 'en'));
	$message 	= ($language == 'es' ? 'Por favor escriba su direcci&oacute;n de correo electr&oacute;nico para verificar su lugar en la lista de invitados.' : 'Please enter your email address to verify your place on the guest list.');
	$buttonText = ($language == 'es' ? 'OK' : 'Submit');
	$placeHolder= ($language == 'es' ? 'Su direcci&oacute;n de correo electr&oacute;nico' : 'Your email address');
?>

<div id="reception-login">
	<img src="/mercedes-solari/save-the-date/images/drawing/cabin.png" class="login-hero" />	
	<FORM action="./email/" method="post">
		<span id='login-message'><?php echo $message ?></span>
		<INPUT type="text" name="guest_email" placeholder="<?php echo $placeHolder ?>" /> 
		<INPUT type="submit" value="<?php echo $buttonText ?>" />
	</FORM>
</div>						

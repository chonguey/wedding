<?php
	$language 		= (isset($language) ? $language : (isset($_REQUEST['lang']) ? $_REQUEST['lang'] : 'en'));
	$attendanceBit	= ($language == 'es' && $guestInfo['expected'] == 1 ? ', Viene?' : ($language == 'es' ? ', Vienen?' : ', Will You Be Attending?'));
	$yes			= ($language == 'es' ? 'S&iacute;' 	: 'Yes');
	$maybe			= ($language == 'es' ? 'Tal Vez' 	: 'Maybe');
	$countWord		= ($language == 'es' ? 'Personas' : 'Attending');
	$sizeWarning	= ($language == 'es' ? 'Debido al espacio limitado y los c&oacute;digos de incendios, por favor no invitar a personas adicionales.' : 'Due to the limited space and fire code regulations, please do not invite additional guests or children. This is an 18 &amp; older event.');
?>

<div id="attendance">
	<h3><?php echo $guestName.$attendanceBit ?></h3>
	<form id='attendance-form' method="GET" action="#" >
		<input type="hidden" 	name="lang" value="<?php echo $language ?>" />
		<input type="hidden" 	name="guest_email" value="<?php echo $guestInfo['email'] ?>" />
		<input type="hidden"  	name="guest_id" value="<?php echo $guestInfo['id'] ?>" />
		<input type="hidden"  	name="action" value="update-guest-info" />
		<label><input type="radio" value='Yes' 		name='status'	class="attendance-input" <?php if ($guestInfo['status'] == 'Yes') echo $checked ?> /> <?php echo $yes ?> </label>
		<label><input type="radio" value='No' 		name='status'	class="attendance-input" <?php if ($guestInfo['status'] == 'No') echo $checked ?> /> No </label>
		<label><input type="radio" value='Maybe' 	name='status'	class="attendance-input" <?php if ($guestInfo['status'] == 'Maybe') echo $checked ?> /> <?php echo $maybe ?> </label>
		<label>
			<SELECT name="attending" class="attendance-input">
				<?php
					for ($i = 1; $i <= $guestInfo['expected']; $i++){
					 	$selectedBit =
					 		($guestInfo['attending'] >= 0 && $guestInfo['attending'] == $i ? $selected :
					 		($guestInfo['attending'] == 0 && $guestInfo['expected'] == $i ? $selected :
					 		''
					 	));
					 	echo "<OPTION $selectedBit>$i</OPTION>";
					}
				?>
			</SELECT>
			<?php echo $countWord ?>
		</label>
		<label id='form-response'></label>
	</form>
	<ol>
		<li><?php echo $sizeWarning ?></li>
	</ol>
</div>
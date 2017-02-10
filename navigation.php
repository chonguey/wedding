<?php 
	$language 			= (isset($language) ? $language : (isset($_REQUEST['lang']) ? $_REQUEST['lang'] : 'en'));							
	$saveTheDate 		= ($language == 'es' ? 'Save The Date' : 'Save The Date');
	$photos 			= ($language == 'es' ? 'Fotos' : 'Photos');
	$reception 			= ($language == 'es' ? 'Ceremonia y recepci&oacute;n' : 'Ceremony &amp; Reception');
	$gifts 				= ($language == 'es' ? 'Regalos' : 'Gifts');
	$acknowlegements 	= ($language == 'es' ? 'Agradecimientos' : 'Acknowledgments');
	$navClass					= ($announcementOnly == true ? 'announcement' : '');
?>
<div id="mobile-nav">Menu</div>
<ul id="nav" class="<?php echo $navClass ?>">
	<li class="link default-link" data-target='save-the-date'><?php echo $saveTheDate ?></li>
	<li class="spacer"></li>
	<li class="link" data-target='photos'><?php echo $photos ?></li>
	<?php
		if ($announcementOnly == false){?>
				<li class="spacer"></li>
				<li class="link" data-target='reception'><?php echo $reception ?></li>
		<?php }
	?>
	<li class="spacer"></li>
	<li class="link" data-target='gifts'><?php echo $gifts ?></li>
	<li class="spacer"></li>
	<li class="link" data-target='acknowledgements'><?php echo $acknowlegements ?></li>
</ul>
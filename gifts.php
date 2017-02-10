<?php
	$language = (isset($language) ? $language : (isset($_REQUEST['lang']) ? $_REQUEST['lang'] : 'en'));
?>
<h2><?php echo ($language == 'es' ? 'Regalos' : 'Gifts') ?></h2>
<img src="/mercedes-solari/save-the-date/images/drawing/pines.png" class="slide-hero" />
<p>
	<br />
	<?php
		if ($language == 'es' && $announcementOnly == true){	?>
			<br /><br />			
			Nosotros estariamos muy agradecidos y aceptamos como regalo cualquier<br />contribucion monetaria que nos ayudaria hacia nuestra futura vida juntos.<br />
			<br /><br /><br /><br />			
			<A target="_blank" class="paypal-donate" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=chonguey%40gmail%2ecom&lc=US&item_name=Boda%20de%20Mercedes%20y%20Landon&item_number=chonguey%40gmail%2ecom&no_note=0&currency_code=USD&bn=PP%2dDonationsBF%3apaypal%2dlogo%2epng%3aNonHostedGuest">
				<img src="/mercedes-solari/images/site/paypal-logo-es.png" />
			</A>			
			Un porcentaje de los fondos recaudados<BR /> ser&aacute; donado a las siguientes organizaciones ben&eacute;ficas:<br /><br />
		<?php
		}
		else if ($language == 'es' && $announcementOnly == false){	?>
			<br /><br />			
			Nosotros estariamos muy agradecidos y aceptamos como regalo cualquier<br />contribucion monetaria que nos ayudaria hacia nuestra futura vida juntos.<br />
			<br /><br /><br /><br />
			Un porcentaje de los fondos recaudados<BR /> ser&aacute; donado a las siguientes organizaciones ben&eacute;ficas:<br /><br />
		<?php
		}
		else if ($language == 'en' && $announcementOnly == true) { ?>			
			<br />
			We would be very grateful to accept whatever monetary contribution<br />that can help us develop our future life together.<br /><br /><br />
			<A target="_blank" class="paypal-donate" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=chonguey%40gmail%2ecom&lc=US&item_name=Landon%20%26%20Mercedes%20Wedding&item_number=chonguey%40gmail%2ecom&currency_code=USD&bn=PP%2dDonationsBF%3apaypal%2dlogo%2epng%3aNonHostedr">
				<img src="/mercedes-solari/images/site/paypal-logo.png" />
			</A>
			<br />
			A percentage of collected funds will<BR /> be donated to the following foundations:
		<?php }
		else{ ?>
			Due to limited space and the established nature of the couple,<br /> we ask that no gifts be brought to the wedding.
			<br /><br /><br /><br />
			We would be very grateful to accept whatever monetary contribution<br />that can help us develop our future life together.
			<br /><br /><br /><br />
			A percentage of collected funds will<BR /> be donated to the following foundations:
		<?php }
	?>	
	<br /><br />
	<a href="http://www.globaldownsyndrome.org/" class="charity-link"><img src="/mercedes-solari/images/site/down-syndrome-logo.png" /></a>
	<a href="http://www.nationalforests.org/" class="charity-link"><img src="/mercedes-solari/images/site/natl-forest-logo.png" /></a>
</p>
<img src="/mercedes-solari/save-the-date/images/drawing/flowerclump-crop.png" alt="flower" class="slide-hero2" />
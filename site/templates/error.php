<?php
	$currentURL = "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
	$currentURL = rawurlencode($currentURL);
	
	$mailTo = "&#109;&#97;&#105;&#108;&#116;&#111;&#58;";	// mailto:
	$username = "%74%65%61%6D4%77%65%62";					// team4web
	$domain = "%68%74-%6C%61.%6F%72%67";					// ht-la.org
	$emailAddress = $mailTo.$username."@".$domain;		// Wait a second...doesn't/shouldn't team4element.com have email?
	
	$subject = "I've reached a 404 page";
	$body = "The page I was looking for was supposed to be here:";
	$footer = "Thank you!";
	
	$subject = rawurlencode($subject);
	$body = rawurlencode($body);
	$footer = rawurlencode($footer);
	
	$newLine = "%0D%0A";
	
	$contactUsLink = $emailAddress."?subject=".$subject."&body=".$body.$newLine.$currentURL.$newLine.$newLine.$footer;
?>
<?php snippet('header') ?>
<?php snippet('menu') ?>
<!-- <?php snippet('submenu') ?> -->
	<section>
		<div class="post">
			<p>Oops! What you're looking for simply doesn't exist.</p>
			<p>If you feel you've reached this page by error, please <a href="<?php echo $contactUsLink; ?>">let us know</a>.</p>
		</div>
	</section>
<?php snippet('footer') ?>
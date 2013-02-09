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
<!DOCTYPE html>
<html>
<head>
	<title><?php echo html($site->title()) ?> | <?php echo html($page->title()) ?></title>
	<meta charset="utf-8" />
	<meta name="description" content="<?php echo html($site->description()) ?>" />
	<meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
	<meta name="robots" content="index, follow" />
	<link rel="icon" type="image/png" href="/favicon.png">
<!-- 	<?php echo css('/assets/stylesheets/styles.css') ?> -->
	<link rel="stylesheet" type="text/css" href="/assets/stylesheets/style.css" />
	<link rel="stylesheet" type="text/css" href="/assets/stylesheets/style.mobile.css" media="all and (max-device-width: 480px)" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
	<!--[if IE]>
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="/assets/stylesheets/style.ie.css" />
		<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
	<header>
		<div>
<!-- I'll just leave this here... -->
<!-- <?php echo url() ?> -->
			<a href="<?php echo url() ?>"><div id="fourOHfour"></div></a>
			<div id="phoenix" class="noMobile"></div>
			<div id="schoolInfo">
				<a href="http://www.ht-la.org/" target="_blank">High Tech Los Angeles</a>
				<br />
				<a class="small" href="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=High+Tech+Los+Angeles+(HTLA)&amp;aq=0&amp;oq=17111+Victory+Blvd.+Van+Nuys,+CA+91406&amp;sll=34.294871,-118.558905&amp;sspn=0.012905,0.022724&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=17111+Victory+Blvd,+Van+Nuys,+California+91406&amp;vpsrc=0&amp;z=17&amp;iwloc=A&amp;cid=8505098983125735360" target="_blank">17111 Victory Blvd. Van Nuys, CA 91406</a>
			</div>
		</div>
	</header>
<?php snippet('menu') ?>
<!-- <?php snippet('submenu') ?> -->
	<section>
		<div class="post">
			<p>Oops! What you're looking for simply doesn't exist.</p>
			<p>If you feel you've reached this page by error, please <a href="<?php echo $contactUsLink; ?>">let us know</a>.</p>
		</div>
	</section>
<?php snippet('footer') ?>
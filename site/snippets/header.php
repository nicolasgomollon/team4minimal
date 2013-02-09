<!DOCTYPE html>
<html>
<head>
	<title><?php echo html($site->title()) ?> | <?php echo html($page->title()) ?></title>
	<meta charset="utf-8" />
	<meta name="description" content="<?php echo html($site->description()) ?>" />
	<meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
	<meta name="robots" content="index, follow" />
	<link rel="icon" type="image/png" href="favicon.png" />
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
			<a href="<?php echo url() ?>"><div id="teamFourElement"></div></a>
			<div id="phoenix" class="noMobile"></div>
			<div id="schoolInfo">
				<a href="http://www.ht-la.org/" target="_blank">High Tech Los Angeles</a>
				<br />
				<a class="small" href="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=High+Tech+Los+Angeles+(HTLA)&amp;aq=0&amp;oq=17111+Victory+Blvd.+Van+Nuys,+CA+91406&amp;sll=34.294871,-118.558905&amp;sspn=0.012905,0.022724&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=17111+Victory+Blvd,+Van+Nuys,+California+91406&amp;vpsrc=0&amp;z=17&amp;iwloc=A&amp;cid=8505098983125735360" target="_blank">17111 Victory Blvd. Van Nuys, CA 91406</a>
			</div>
		</div>
	</header>
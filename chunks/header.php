	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="cleartype" content="on">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

	<link rel="icon" href="http://midoribrowser.org/favicon.ico">
	<link rel="shortcut icon" href="http://midoribrowser.org/favicon.ico">

	<link rel="stylesheet" media="all" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Sans+Mono|Raleway:400,200,300">
	<link rel="stylesheet" media="all" href="http://www.eustasy.org/css/col.min.css">
	<link rel="stylesheet" media="all" href="http://midoribrowser.org/chunks/style.css">

	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-28932148-9']);
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>

</head>

<body>

<div id="skiptomain"><a href="#maincontent">skip to main content</a></div>

<div id="wrapper">

<div id="headcontainer">
	<header>



		<div class="title">
			<a href="http://midoribrowser.org/" title="Midori, a lightweight, fast, and free web browser.">
				<h1>Midori</h1>
				<div class="tag">a lightweight, fast, and free web browser</div>
			</a>
		</div>



		<div class="col span_1_of_5 donate">

			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">

				<input type="hidden" name="cmd" value="_xclick">
				<input type="hidden" name="lc" value="US">
				<input type="hidden" name="currency_code" value="USD">
				<input type="hidden" name="button_subtype" value="services">
				<input type="hidden" name="no_shipping" value="1">
				<input type="hidden" name="rm" value="1">

				<input type="hidden" name="no_note" value="0">
				<input type="hidden" name="cn" value="Add a note.">

				<input type="hidden" name="business" value="christian@twotoasts.de">
				<input type="hidden" name="item_name" value="Midori Browser Donation">
				<input type="hidden" name="return" value="http://midoribrowser.org/thanks">
				<input type="hidden" name="cancel_return" value="http://midoribrowser.org/ohwell">

				<input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynowCC_LG.gif:NonHosted">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">

				<input class="amount" name="amount" type="text"  maxlength="5" value="5.00">

				<input class="submit" name="submit" type="submit"  value="Donate">

			</form>

			<p><a href="http://midoribrowser.org/donate">Donate in another Currency</a></p>

		</div>


		<?php
		$unsafe_requested = str_replace("'", "", $_SERVER['REQUEST_URI']);
		$location = str_replace('"', "", $unsafe_requested);
		?>
		<div class="section group nav">
			<div class="col span_1_of_5">
				<a href="http://midoribrowser.org/features/" title="Features of Midori"<?php if ( $location == "/features/" ) { echo 'class="current"'; } ?>>Features</a>
			</div>
			<div class="col span_1_of_5">
				<a href="http://midoribrowser.org/reviews/" title="Reviews of Midori"<?php if ( $location == "/reviews/" ) { echo 'class="current"'; } ?>>Reviews</a>
			</div>
			<div class="col span_1_of_5">
				<a href="http://midoribrowser.org/contribute/" title="Contribute to Midori"<?php if ( $location == "/contribute/" ) { echo 'class="current"'; } ?>>Contribute</a>
			</div>
			<div class="col span_1_of_5">
				<a href="http://midoribrowser.org/faqs/" title="Questions Frequently Asked about DeVeDe."<?php if ( $location == "/faqs/" ) { echo 'class="current"'; } ?>>FAQs</a>
			</div>
			<div class="col span_1_of_5">
				<a href="http://midoribrowser.org/download/" title="Download Midori" class="<?php if ( $location == "/download/" ) { echo 'current '; } ?>down">Download</a>
			</div>
		</div>



	</header>
</div>

<div id="maincontentcontainer">
	<div class="maincontent">

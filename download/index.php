<?php require '../chunks/doctype.php'; ?>

	<title>Download Midori &nbsp;&middot;&nbsp; A lightweight, fast, and free web browser.</title>

	<?php require '../chunks/header.php'; ?>







<?php

require '../chunks/detect-two.php';

if ($ua) { if ($windows) { // Windows ?>

<!-- Windows -->
<h2>Download for Windows</h2>
<h3 style="color:#999999;">Select your Version</h3>
<div class="section group" id="downloads">
	<div class="col span_1_of_2">
<?php

include 'process.php';

foreach ($xml->download as $download) {
	if ($download->extension == '.exe') {
		$package = ltrim($download->extension, '.');
		$size = $download->size/1048576;
		echo '
		<a href="' . $download->location . '" title="Download Midori for Windows.">
			<div class="bubble system windows">
				<h2>Windows</h2>';
		echo '
				<h6 class="right">' . $package . ' &nbsp;&middot;&nbsp; ' . $download->version . ' &nbsp;&middot;&nbsp; ' . round($size, 1) . ' MB</h6>';
		echo '
			</div>
		</a>';
	}
}

?>
	</div>
	<div class="col span_1_of_2">
		<a href="http://midoribrowser.org/download/portable/" title="Download Portable Midori.">
			<div class="bubble system portable">
				<h2>Portable</h2>
<?php

echo '<h6 class="right">';

foreach ($xml->download as $download) {
	if ($download->extension == '.7z') {
		$package = ltrim($download->extension, '.');
		echo $package;
	}
}

echo ' or ';

foreach ($xml->download as $download) {
	if ($download->extension == '.zip') {
		$package = ltrim($download->extension, '.');
		echo $package;
	}
}

echo ' &nbsp;&middot;&nbsp; ';

foreach ($xml->download as $download) {

	if ($download->extension == '.7z') {
		echo $download->version;
	}

}

echo ' &nbsp;&middot;&nbsp; ';

foreach ($xml->download as $download) {
	if ($download->extension == '.7z') {
		$size = $download->size/1048576;
		echo round($size, 1);
	}
}

echo ' or ';

foreach ($xml->download as $download) {
	if ($download->extension == '.zip') {
		$size = $download->size/1048576;
		echo round($size, 1);
	}
}

echo ' MB</h6>';

?>
			</div>
		</a>
	</div>
</div>
<p class="center"><a href="http://midoribrowser.org/download/choose/" title="Other ways to get Midori / Get Midori for Other Systems.">Other ways to get Midori and Midori for Other Systems.</a></p>



<?php } elseif ($linux) { // Linux ?>

<!-- Linux -->
<h2>Download for Linux</h2>
<h3 style="color:#999999;">Select your Distribution</h3>
<div class="section group" id="downloads">
	<div class="col span_1_of_2">
		<a href="http://midoribrowser.org/download/elementary/" title="Download Midori for elementary os.">
			<div class="bubble system elementary">
				<h2>elementary</h2>
			</div>
		</a>
	</div>
	<div class="col span_1_of_2">
		<a href="http://midoribrowser.org/download/ubuntu/" title="Download Midori for Ubuntu.">
			<div class="bubble system ubuntu">
				<h2>Ubuntu</h2>
			</div>
		</a>
	</div>
</div>
<div class="section group" id="second">
	<div class="col span_1_of_3">
		<a href="http://midoribrowser.org/download/fedora/" title="Download Midori for Fedora.">
			<div class="bubble system fedora">
				<h3>Fedora</h3>
			</div>
		</a>
	</div>
	<div class="col span_1_of_3">
		<a href="http://midoribrowser.org/download/debian/" title="Download Midori for Debian.">
			<div class="bubble system debian">
				<h3>Debian</h3>
			</div>
		</a>
	</div>
	<div class="col span_1_of_3">
		<a href="http://midoribrowser.org/download/mint/" title="Download Midori for Mint.">
			<div class="bubble system mint">
				<h3>Mint</h3>
			</div>
		</a>
	</div>
</div>
<div class="section group" id="third">
	<div class="col span_1_of_4">
		<a href="http://midoribrowser.org/download/mageia/" title="Download Midori for Mageia.">
			<div class="bubble system mageia">
				<h3>Mageia</h3>
			</div>
		</a>
	</div>
	<div class="col span_1_of_4">
		<a href="http://midoribrowser.org/download/arch/" title="Download Midori for Arch.">
			<div class="bubble system arch">
				<h3>Arch</h3>
			</div>
		</a>
	</div>
	<div class="col span_1_of_4">
		<a href="http://midoribrowser.org/download/snow/" title="Download Midori for Snow.">
			<div class="bubble system snow">
				<h3>Snow</h3>
			</div>
		</a>
	</div>
	<div class="col span_1_of_4">
		<a href="http://midoribrowser.org/download/opensuse/" title="Download Midori for openSuse.">
			<div class="bubble system opensuse">
				<h3>Suse</h3>
			</div>
		</a>
	</div>
</div>
<p class="center"><a href="http://midoribrowser.org/download/choose/" title="Other ways to get Midori / Get Midori for Other Systems.">Other ways to get Midori and Midori for Other Systems.</a></p>




<?php } elseif ($osx) { // OS X ?>

<div class="section group">
	<div class="col span_2_of_4">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>You appear to be using Mac OS X, and this application is not compatible with that system.</p>
			<p class="right">Continue at your peril.</p>
		</div>
	</div>
<?php require 'fallback.php' ?>



<? } else { ?>

<!-- Unable to Detect Operating System -->
<div class="section group">
	<div class="col span_2_of_4">
		<div class="bubble warning">
			<h2>Warning!</h2>
			<p>We couldn't detect your Operating System, and as such cannot guarantee this applications compatibility.</p>
			<p class="right">Continue at your peril.</p>
		</div>
	</div>
<?php require 'fallback.php';

} } ?>



<?php require '../chunks/footer.php'; ?>

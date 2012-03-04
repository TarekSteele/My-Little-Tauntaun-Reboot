<?

	include 'php/functions.php';
	include 'php/settings.php';
	include 'php/user.php';

	// Find stylesheets and jscripts

	$root = $settings -> getRoot();
	$url = $settings -> getURL(false);

	$stylesheets = '';
	$files = getFiles($root . '/stylesheets/');
	foreach ($files as $file)
		$stylesheets .= '<link type="text/css" rel="stylesheet" href="' . $url . 'stylesheets/' . $file . '">' . PHP_EOL;

	// HTML BEGIN //////////////////////////////////////////////////////////////////////////////////////
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="content-script-type" content="text/javascript"/>
		<meta http-equiv="content-style-type" content="text/css"/>
		<meta name="Language" content="de"/>
		<meta name="keywords" content="my little tauntaun, mlt, swtor, sw:tor, star wars, the old republic, raiding, raid, gilde, guild, stammgruppe, stamm, t3m4, t3-m4"/>
		<meta name="Description" content="My Little Tauntaun: Der SWTOR Raid auf dem Server T3-M4."/>
		<meta name="robots" content="index,follow"/>
		<link rel="icon" type="image/png" href="images/favi.png">
		<title>My Little Tauntaun</title>
        <script type="text/javascript" src="http://my-little-tauntaun.de/reboot/jscript/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="http://my-little-tauntaun.de/reboot/jscript/global.js"></script>
        <script type="text/javascript" src="http://my-little-tauntaun.de/reboot/jscript/jquery.color.js"></script>
		<?=$stylesheets;?>
	</head>
	<body>
		<iframe id="target" name="target"></iframe>
		<div id="wrapper">
			<?
				// Insert the header
				include 'php/modules/header/header.php';
			?>
			<?
				// Insert the main module
				//include 'php/whatever.php';
			?>
			<?
				// Insert the footer
				//include 'php/footer.php';
			?>
		</div>
	</body>
</html>

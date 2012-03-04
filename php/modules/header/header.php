<?

	/////////////////////////////////////////////////////////////////////
	// Variables

    $url = $settings -> getURL();
	$menuItems = '';

	/////////////////////////////////////////////////////////////////////
	// Functions

	// Adds a new menu item to the nav menu
	function addMenuItem($size, $id, $label, $url) {
		global $settings, $menuItems;

		$menuItems .= '<div class="entry ' . $size . '" id="' . $id . '">
                           <a href="' . $url . '"> <div class="spacer"></div> &nbsp; ' . $label . ' </a>
                       </div>';
	}

	/////////////////////////////////////////////////////////////////////
	// Setup

	// Add menu items
	
	addMenuItem('b', 'menuStart', 'START', $url);
	addMenuItem('b', 'menuForums', 'FORUM', $url . '?mod=forums');
	addMenuItem('b', 'menuMembers', 'MITGLIEDER', $url . '?mod=members');
	addMenuItem('m', 'menuRaids', 'RAIDS', $url . '?mod=raids');
	addMenuItem('m', 'menuLoot', 'LOOT', $url . '?mod=loot');
	addMenuItem('s', 'menuRSS', 'RSS', $url . '?mod=rss');
	addMenuItem('s', 'menuYT', 'YT', '');

	// HTML BEGIN //////////////////////////////////////////////////////////////////////////////////////
?>
<div id="header" class="sep">
	<div id="logo">
		<a href="<?=$url;?>"><img src="images/logo.png" /></a>
	</div>
	<div id="multibar">
		<div class="entry"></div>
		<div id="search"></div>
	</div>
	<div id="menu">
		<?=$menuItems;?>
	</div>
</div>

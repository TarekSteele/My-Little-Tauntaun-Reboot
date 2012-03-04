<?
	$settings = new Settings();

	/**
	 *   Stores and initially loads global settingsy stuff.
	 */
	class Settings {

		/////////////////////////////////////////////////////////////////////
		// Fields

		private $root;
		private $url;

		/////////////////////////////////////////////////////////////////////
		// Constructors

		public function __construct() {
			////// Root directory
			$root = dirname(dirname(__FILE__));
			$this -> root = $root;
			//

			////// URL
			$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

			// Remove query string
			$pos = strpos($url, '?');
			if ($pos !== false)
				$url = substr($url, 0, $pos);

			// Add the index.php if not already there.
			if (substr($url, -1) == '/')
				$url .= 'index.php';

			$this -> url = $url;
			//
		}

		/////////////////////////////////////////////////////////////////////
		// Methods

		public function getRoot() {
			return $this -> root;
		}

		public function getURL($page = true) {
			$url = $this -> url;

			if (!$page) {
				$pos = strpos($url, 'index.php');
				if ($pos !== false)
					$url = substr($url, 0, $pos);
			}

			return $url;
		}

	}
?>
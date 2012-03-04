<?
	/**
	 *   Gets all files in the given directory. If the second parameter is true this will be done recursively for all subdirectories.
	 */
	function getFiles($dir, $recursive = false) {
		$arr = array();

		if ($handle = opendir($dir))
			while (false !== ($entry = readdir($handle))) {
				if (!is_dir($entry))
					array_push($arr, $entry);
				else if ($recursive)
					array_push($arr, get_files($dir . $entry, true));
			}

		return $arr;
	}
?>
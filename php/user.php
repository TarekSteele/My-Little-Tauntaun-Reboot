<?
    $user = new User();

	/**
	 *   Handles information about the current user.
	 */
	class User {

		/////////////////////////////////////////////////////////////////////
		// Fields

		private $loggedIn;

		/////////////////////////////////////////////////////////////////////
		// Constructors

		public function __construct() {
			$this -> loggedIn = false;
		}

		/////////////////////////////////////////////////////////////////////
		// Methods

		public function output() {
			return '';
		}

		// Get methods

		public function isLoggedIn() {
			return $this -> loggedIn;
		}

	}
?>
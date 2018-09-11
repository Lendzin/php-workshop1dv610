<?php
namespace Workshop ;


session_start();

class Storage {
	private static $SESSION_KEY = __NAMESPACE__ . __CLASS__ .  "input";
	public function loadInput() {
		if (isset($_SESSION[self::$SESSION_KEY])) {
			return $_SESSION[self::$SESSION_KEY];
		} else {
			return new UserInput();
		}
	}
	public function saveInput(UserInput $toBeSaved) {
		$_SESSION[self::$SESSION_KEY] = $toBeSaved;
    }
  }

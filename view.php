<?php
namespace Workshop;


class TranslatorView {
    
	private static $TEXT_FIELD_ID = "name";
    private $translation;
    

	public function __construct(\Workshop\UserInput $toBeViewed) {
		$this->translation = $toBeViewed;
    }
    

	public function userWantsToTranslate() : bool {
		return isset($_GET[self::$TEXT_FIELD_ID]);
    }
    

	public function getInput() : string {
		return $_GET[self::$TEXT_FIELD_ID];	
    }
    
	public function show() : string {
		$ret = "";
		if ($this->translation->userInputExist()) {
			$translation = $this->translation->getTranslation();
			$ret .= "<h1>Your translation:</h1> <p>$translation</p>";
        }
			return $ret . "<form method='get'>
			<input  type='text' name='" . self::$TEXT_FIELD_ID . "'></input>
						<input type='submit'>
					</form>";
		
	}
}

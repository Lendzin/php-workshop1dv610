<?php

namespace Workshop;

class UserInput {

	private $userInput = null;
    
    public function setUserInput(string $userInput)  { 
		$this->userInput = $userInput;
	}
    
    public function getTranslation() {
		return $this->userInput;
    }
    
    public function userInputExist() : bool {
		return $this->userInput != null;
	}
}

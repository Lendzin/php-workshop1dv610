<?php

namespace Workshop;

class Translate {

	private $view;
    private $input;
    
	public function __construct(\Workshop\UserInput $input) {
		$this->input = $input;
		$this->view = new \Workshop\TranslatorView($this->input);
		
	}

	public function doTranslate() : string {
		if ($this->view->userWantsToTranslate()) {
			$originalText = $this->view->getInput();
			$reversedText = "Your translated text is: ";

			if(strlen($originalText) == 0) {
  			$reversedText = "No text enterered!";
		}

		for ($i = 1; $i <= strlen($originalText); $i++) {
  			$reversedText .= $originalText[strlen($originalText) - $i];
		}

		
		$this->input->setUserInput($reversedText);
			$reversedText = "Your translated text is: ";

			if(strlen($originalText) == 0) {
  			$reversedText = "No text enterered!";
		}

		for ($i = 1; $i <= strlen($originalText); $i++) {
  			$reversedText .= $originalText[strlen($originalText) - $i];
		}

		
		$this->input->setUserInput($reversedText);
		}
		return $this->view->show();
	}
}
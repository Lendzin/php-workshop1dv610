<?php
class Hangman {

private $library = array("lastbil", "flaggstångknoppsmålare", "cykel", "problem", "ödla", "smink", "glasögon");

$wordSelected = $library[rand(0, count($library))];


private $letter = "";

public function __construct(string $input) {
    if (is_numeric($input)) {
        throw new \Exception("The input is not a letter");
    }

    $this->letter = $input;        
}


public function getLibrary() {
  
return $this->library;

}

public function compareLetter($letter, $wordSelected) {

    if(isset($_POST['submit'])) {

        $chosenLetter = $_POST['lettersguessed'];
        if($chosenLetter) {
            echo "this maybe works";
        }
    }
}

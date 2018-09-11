function printPage($image, $guesstemplate, $which, $guessed, $wrong) {
  echo <<<ENDPAGE
<!DOCTYPE html>
<html>
  <head>
	<title>Hangman</title>
  </head>
</html>
<body>
  <h1>Hangman Game</h1>
  <br />
  <pre>$image</pre>
  <br />
  <p><strong>Word to guess: $guesstemplate</strong></p>
  <p>Letters used in guesses so far: $guessed</p>
  <form method="post" action="$script">
	<input type="hidden" name="wrong" value="$wrong" />
	<input type="hidden" name="lettersguessed" value="$guessed" />
	<input type="hidden" name="word" value="$which" />
	<fieldset>
	  <legend>Your next guess</legend>
	  <input type="text" name="letter" autofocus />
	  <input type="submit" value="Guess" />
	</fieldset>
  </form>
</body>
ENDPAGE;
}
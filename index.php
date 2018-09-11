<?php
require_once("controller.php");
require_once("view.php");
require_once("model.php");
require_once("storage.php");

$storage = new \Workshop\Storage();
$userInput = $storage->loadInput();
$c = new \Workshop\Translate($userInput);
$storage->saveInput($userInput);
echo $c->doTranslate();

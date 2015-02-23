<?php
include 'quotemarks.php';
$text = "some text with \"double quotes\", 'single quotes' and tags <a href='github.com'>github</a>\"more quotes\" and more tags <p class=\"whatever\">";
$lang = array('sv', 'fr', 'en', 'de', 'en', 'es');
$newText = new quotes($text);
echo "XX: $text\n";
foreach ($lang as $language) {
	$newText->setLanguage($language);
	echo "$language: $newText\n";
}

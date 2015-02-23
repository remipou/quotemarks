<?php
class quotes {
	public function __construct($text, $languageCode = NULL) {
		$this->text = $text;
		$this->defaultLanguage = 'sv';
		$this::setLanguage($languageCode);
	}
	
	public function __tostring() {
		$chunks = preg_split("/<.*?>/", $this->text, -1, PREG_SPLIT_NO_EMPTY);
		$newChunks = array();
		foreach ($chunks as $key => $chunk) {
			$newChunks[$key] = preg_replace($this->search, $this->replace, $chunk);
		}
		return str_replace($chunks, $newChunks, $this->text);
	}
	
	public function setLanguage($languageCode) {
		$language2pattern = array(
		  'sv' => array(
				'search' => array('/“|"/', '/\'/'),
				'replace' => array('”', '’'),
			),
		);
		$pattern = isset($language2pattern[strtolower($languageCode)]) ? $language2pattern[strtolower($languageCode)] : $language2pattern[$this->defaultLanguage];
		$this->search = $pattern['search'];
		$this->replace = $pattern['replace'];
	}





}

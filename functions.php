<?php

	
	function getCSVwords($path) {

			$file = fopen($path,"r");
			$allwords = array();

		while(!feof($file)) {
			array_push($allwords,fgetcsv($file)[0]);
		}
		fclose($file);
		return $allwords ;
	}
	
	
	function getRandomWords($allwords) {			

		$selectedwords = array();
		for($i=0;$i<NO_OF_WORDS;$i++) {

			$index = rand(MIN_WORDS,MAX_WORDS);
			$value = $allwords[$index];
			array_push($selectedwords,$allwords[$index]);
	
		}
		return $selectedwords;
	}


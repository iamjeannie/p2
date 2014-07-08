<?php

	
	function getCSVwords($path) {
		/*
		objective : to read csv from a file
		parameter : 
			$path : name of the csv e.i "./words.csv"
		return 	: 
			$allwords : array of words
		*/
			$file = fopen($path,"r");
			$allwords = array();

		while(!feof($file)) {
			array_push($allwords,fgetcsv($file)[0]);
		}
		fclose($file);
		return $allwords ;
	}
	
	
	function getRandomWords($allwords) {			
		/*
		objective : to read csv from a file
		parameter : 
			$allwords : array of words
		constant : 
			NO_OF_WORDS : number of words want to select
		return :
			$selectedwords : 
		*/
		$selectedwords = array();
		for($i=0;$i<NO_OF_WORDS;$i++) {

			$index = rand(MIN_WORDS,MAX_WORDS);
			$value = $allwords[$index];
			array_push($selectedwords,$allwords[$index]);
	
		}
		return $selectedwords;
	}


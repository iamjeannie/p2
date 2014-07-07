<?php

	if($_POST["no_of_words"]) {
		define(NO_OF_WORDS,$_POST["no_of_words"]);		
	} else {
		define(NO_OF_WORDS,5);
	}

	define(MIN_WORDS,3);
	define(MAX_WORDS,787);
	define(CSV_LOCATION, "./words.csv");


	if($_POST["check_number"]) {
		define(CHECK_NUMBER,$_POST["check_number"]);		
	} else {
		define(CHECK_NUMBER,"No");
	}

	if($_POST["clear"]) {
		define(CLEAR,$_POST["clear"]);		
	} else {
		define(CLEAR,"No");
	}

	if($_POST["check_firstletter"]) {
		define(CHECK_FIRSTLETTER,$_POST["check_firstletter"]);		
	} else {
		define(CHECK_FIRSTLETTER,"No");
	}

	if($_POST["inlineRadioOptions"]) {
		define(RADIO_SYMBOL,$_POST["inlineRadioOptions"]);		
	} else {
		define(RADIO_SYMBOL,"?");
	}

	define(RANDNUMBER,rand(1,99));

	// by creating these names we make our code more readabAle
	define(RANDOM,0);
	define(CSV,1);
	// this determines whether our file will use the random method of generating grades
	// or, that of the csv file 
	define(METHOD,0);
	// determines the limit which determines whether the average will appear in blue or red
	define(PASS_THRESHOLD,70);
?>


<?php session_start(); ?>
<?php require './constants.php' ;?>
<?php require './functions.php' ;?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>xkcd Password Generator</title>
  <!-- Bootstrap core CSS -->
  <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<div class="container-fluid">
<h1>Let's create xkcd Password</h1>
	<form role="form" method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
		  <div class="form-group">
		    <label for="exampleInputEmail1">How many words do you want in your password ? </label>
		    <input type="text" class="form-control" name="no_of_words" placeholder="Please enter a number here">
		  </div>
		  <div class="checkbox0">
		  	<label><input type="checkbox" name="check_number" value = "Yes"> Append some random number between 1 - 99</label>
		  </div>
		  <div class="checkbox1">
		    <label><input type="checkbox" name="check_firstletter" value = "Yes"> UpperCase first letter on every word</label>
		  </div>
		  <div class="radio">
		  <label class="radio-inline" >
		  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="-" checked> -
		</label>
		<label class="radio-inline">
		  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="@"> @
		</label>
		<label class="radio-inline">
		  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="#"> #
		</label>
		<label class="radio-inline">
		  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="/"> /
		</label>
				<label class="radio-inline">
		  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="?"> ?
		</label>
				<label class="radio-inline">
		  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="+"> +
		</label>
				<label class="radio-inline">
		  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="%"> %
		</label>
				<label class="radio-inline">
		  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="^"> ^
		</label>
				<label class="radio-inline">
		  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="!"> !
		</label>
		  </div>
		  <br><br/>
		  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
		  <button type="submit" class="btn btn-default btn-lg" name="clear" value="Yes">Clear</button>
		  <br><br/>
	</form>



<div>



Your xkcd password result from  <?php echo NO_OF_WORDS; ?>  selected words  is : 
<br><br/>

<p><?php 
	$allwords = array();
	if(CLEAR == "Yes"){
		$allwords = array();
	}
	else{
		$allwords = getCSVwords(CSV_LOCATION);
	}
	$allwords = array_map('strtolower', $allwords);
	if(CHECK_FIRSTLETTER == "Yes"){
		$allwords = array_map('ucfirst', $allwords);
	}

	$selected = getRandomWords($allwords); 
	?>
	<div class = "result">

	<?php
	echo "<mark>".$selected[0]."</mark>";
	for ($col = 1; $col <  NO_OF_WORDS; $col++) {
    	echo  "<mark>".RADIO_SYMBOL." ".$selected[$col]." </mark>";
   }
   if(CHECK_NUMBER == "Yes"){
   	echo "<mark>".RANDNUMBER."</mark>";
   }
   
	?>

	</div>
 </p>
  <br><br/>



  <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
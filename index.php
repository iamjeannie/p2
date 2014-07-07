

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
		    <input type="text" class="form-control" name="no_of_words" placeholder="Please enter number maximum number of <?php echo NO_OF_WORDS ?>">
		  </div>
		  <div class="checkbox0">
		  	<label><input type="checkbox"> Include number </label>
		  </div>
		  <div class="checkbox1">
		  	<label><input type="checkbox"> Special symbol</label>
		  </div>
		  <div class="checkbox2">
		    <label><input type="checkbox"> UpperCase first letter</label>
		  </div>
		  <br><br/>
		  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
		  <button type="submit" class="btn btn-default btn-lg">Clear</button>
		  <br><br/>
<!-- 		  <button type="button" class="btn btn-primary btn-lg btn-block">Submit</button><br/>
		  <button type="button" class="btn btn-default btn-lg btn-block">Clear</button> -->
	</form>



<div>

<p><?php echo NO_OF_WORDS; ?></p>

<p><?php 	$file = fopen(CSV_LOCATION,"r");
			$allwords = [];

		while(!feof($file)) {
			array_push($allwords,fgetcsv($file)[0]);
		}
		print_r($allwords);
		fclose($file);
	?>
</p>

<p><?php echo CONSTANT_NAME; ?></p>
<p><?php echo $_SERVER["PHP_SELF"] ?></p>
<form method="POST" action="/index.php">>
	<input type="submit" test submit>
</form>
<p> below is from session </p>

<p>view this by using the $_GET method, passing value from URL by clicking <a href="/get.php">Here</a>.</p>

  <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
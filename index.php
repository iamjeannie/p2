<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>xkcd Password Generator</title>
  <!-- Bootstrap core CSS -->
  <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<div class="container-fluid">
<h1>Let's create xkcd Password</h1>
	<form role="form">
		  <div class="form-group">
		    <label for="exampleInputEmail1">How many words do you want in your password ? </label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Please enter number Max 9">
		  </div>
		  <div class="checkbox0">
		  	<label><input type="checkbox"> Include number </label>
		  </div>
		  <div class="checkbox1">
		  	<label><input type="checkbox"> Special symbol</label>
		  </div>
		  <div class="checkbox2">
		    <label><input type="checkbox"> Uppercase first letter</label>
		  </div>
		  <br><br/>
		  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
		  <button type="submit" class="btn btn-default btn-lg">Clear</button>
		  <br><br/>
<!-- 		  <button type="button" class="btn btn-primary btn-lg btn-block">Submit</button><br/>
		  <button type="button" class="btn btn-default btn-lg btn-block">Clear</button> -->
	</form>

<div>
  <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
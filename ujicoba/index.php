<!DOCTYPE html>
<html>
<head>
	<title>Input</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>
	<div class="container-fluid">
		<div class="col-md-12">
			<h1>Header</h1>
		</div>
		<div class="col-md-12">
			<form method='post' action="array.php">
			<div class="form-group">
					<textarea class="form-control" id="textarea" name="txtarea"></textarea>
					
			</div>
			<div class="form-group">
				<button class='btn btn-default' id="btsubmit">Submit</button>
			</div>
			</form>
		</div>
	</div>
	
	
	
<div class="content">
	<div class="col-md-12" id="tampildata"></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>
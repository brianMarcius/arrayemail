<?php 
$str=$_POST['txtarea'];

$arr=explode(PHP_EOL,$str);

?>
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
		<div class="col-md-6 table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Email</th>
					</tr>
				</thead>
				<?php
					$no=1;
					foreach ($arr as $k) {
						$email = explode(" | ", $k);
						echo "<tr>
								<td>$no</td>
								<td>".$email[0]."</td>
								</tr>";
						$no++;
					}
?>
			</table>
		</div>
		<div class="col-md-2">
			<form method="post" action="export.php">
				<input type="hidden" name="str" value="<?php echo $str;?>">
				<button class="btn btn-default">export</button>
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

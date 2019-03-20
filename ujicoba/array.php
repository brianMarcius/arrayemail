<?php 
$str=$_POST['txtarea'];
$sprt=$_POST['separator'];

if (empty($str)&&empty($sprt)) {
	header("Location: index.php?msg=Data dan Separator belum terisi");
	exit();
}elseif (empty($str)) {
	header("Location: index.php?msg=Data belum terisi");
	exit();
}elseif (empty($sprt)) {
	header("Location: index.php?msg=Separator belum terisi");
	exit();
}

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
						$email = explode($sprt, $k);
						echo "<tr>
								<td>$no</td>
								<td>".$email[0]."</td>
								</tr>";
						$no++;
					}
?>
			</table>
		</div>
		<div class="col-md-1">
			<form method="post" action="export.php">
				<input type="hidden" name="str" value="<?php echo $str;?>">
				<input type="hidden" name="sprt" value="<?php echo $sprt;?>">
				<button class="btn btn-default btn-block">Export</button>
			</form>
			<br>
			<button class="btn btn-default btn-block" onclick="window.location.assign('index.php');">Back</button>
		</div>
	</div>
	
	
	
<div class="content">
	<div class="col-md-12" id="tampildata"></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>

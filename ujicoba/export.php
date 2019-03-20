<?php
$str=$_POST['str'];
$namaFile = "emailspotify.txt";

$separator = "\r\n";
header("Content-type: text/plain");
header("Content-Disposition: attachment; filename=".$namaFile);

$arr=explode(PHP_EOL,$str);

foreach ($arr as $k) {
						$email = explode(" | ", $k);
						echo $email[0].$separator;
					}




 ?>
<?php
$str=$_POST['str'];
$sprt=$_POST['sprt'];
$namaFile = "emailspotify.txt";

$separator = "\r\n";
header("Content-type: text/plain");
header("Content-Disposition: attachment; filename=".$namaFile);

$arr=explode(PHP_EOL,$str);

foreach ($arr as $k) {
						$email = explode($sprt, $k);
						echo $email[0].$separator;
					}




 ?>
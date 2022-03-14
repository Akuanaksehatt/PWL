<?php
	$gaji = 1000000;
	$pajak = 0.1;
	$awal = $gaji*$pajak;
	$thp = $gaji - $awal;
	$a = "Gaji sebelum pajak = Rp. $gaji";
	$b = "Gaji yang dibawa pulang = Rp. $thp";
	echo $a;
	echo "<br>";
	echo $b;
?>
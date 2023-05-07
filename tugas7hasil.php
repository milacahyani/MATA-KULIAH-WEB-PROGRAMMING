<!DOCTYPE html>
<html>
<head>
	<title>Hasil Hitung Rumus</title>
	<style>
		body {
			background-color: #F5FFFA;
			font-family: Arial, sans-serif;
		}
		.container {
			margin: 50px auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
			max-width: 500px;
			border-radius: 5px;
			text-align: center;
		}
		h1 {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Hasil Hitung Rumus</h1>
		<?php  
		echo "Nilai a adalah = " . $_POST["nilai1"]. "<br>";
		echo "Nilai b adalah = " . $_POST["nilai2"]. "<br>";
		echo "Rumus Dipilih = " . $_POST["rumus"]. "<br>";

		$nilai1 = $_POST["nilai1"];
		$nilai2 = $_POST["nilai2"];
		$rumus = $_POST["rumus"];
		if ($rumus == "segitiga") {
			$hasil = (0.5 * $nilai1 * $nilai2);
			echo "<div class='result'>Hasil Perhitungan Rumus = " . $hasil . "</div>";
		}elseif ($rumus == "persegi panajang") {
			$hasil = ($nilai1 * $nilai2);
			echo "<div class='result'>Hasil Perhitungan Rumus = " . $hasil . "</div>";
		}else{
			$hasil = ($nilai1 * $nilai2);
			echo "<div class='result'>Hasil Perhitungan Rumus = " . $hasil . "</div>";
		}
		?>
	</div>
</body>
</html>


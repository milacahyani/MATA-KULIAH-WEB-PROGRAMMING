<!DOCTYPE html>
<html>
<head>
	<title>Rumus - Rumus</title>
	<!-- Memanggil file CSS Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Memanggil file JS Bootstrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
		.container {
			background-color: #F5FFFA;
			border: 2px solid #ccc;
			padding: 20px;
		}
	</style>
</head>
<body>
	<div class="container mt-5">
		<h1 class="text-center mb-5">Rumus - Rumus</h1>
		<form action="tugas7hasil.php" method="POST">
			<div class="form-group border p-3 mb-3">
				<label for="nilai1">Nilai 1:</label>
				<input type="text" class="form-control" id="nilai1" name="nilai1">
				<label for="nilai2" class="mt-3">Nilai 2:</label>
				<input type="text" class="form-control" id="nilai2" name="nilai2">
			</div>
			<div class="form-group border p-3 mb-3">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="rumus" id="Segitiga" value="Segitiga">
					<label class="form-check-label" for="Segitiga">
						Segitiga
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="rumus" id="Persegi Panjang" value="Persegi Panjang">
					<label class="form-check-label" for="Persegi Panjang">
						Persegi Panjang
					</label>
				</div>
			</div>
			<button type="submit" class="btn btn-primary mr-2">Hitung</button>
			<button type="reset" class="btn btn-danger">Batal</button>
		</form>
	</div>
</body>
</html>

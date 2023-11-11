<?php 
	include 'config/config.php'
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Buat Data</title>

		<link rel="stylesheet" href="./public/css/style.css" />
	</head>
	<body>
		
		<form action="?action=store" class="form" method="post">
            <h2>Buat Data</h2>
			<a class="button-36" style="margin-bottom: 24px;" href="<?= $base_url ?>/">Kembali</a>

			<p class="field required">
				<label class="label required" for="nama">Nama Lengkap</label>
				<input class="text-input" id="nama" name="nama" required type="text" autocomplete="off"/>
			</p>
			<p class="field required half">
				<label class="label" for="nim">NIM</label>
				<input class="text-input" id="nim" name="nim" required type="text" />
			</p>
			<p class="field required half">
				<label class="label" for="email">E-mail</label>
				<input class="text-input" id="email" name="email" required type="email" />
			</p>
			<p class="field required">
				<label class="label required" for="alamat">Alamat</label>
				<textarea class="text-input" id="alamat" name="alamat" required ></textarea>
			</p>
			<p class="field half">
				<input class="button" type="submit" value="Send" />
			</p>
		</form>
	</body>
</html>
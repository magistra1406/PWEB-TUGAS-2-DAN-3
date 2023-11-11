<?php 
	include 'config/config.php'
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Detail Data - <?= $user['nama'] ?></title>

		<link rel="stylesheet" href="./public/css/style.css" />
	</head>
	<body>
    <div class="form">
		<form action="?action=update&id=<?= $user['id']; ?>" class="form" method="post">
            <h2>Edit Data - <?= $user['nama'] ?></h2>
			<a class="button-36" style="margin-bottom: 24px;" href="<?= $base_url ?>/">Kembali</a>

			<p class="field required">
				<label class="label required" for="nama">Nama Lengkap</label>
				<input class="text-input" id="nama" name="nama"  type="text" value="<?= $user['nama']; ?>" readonly/>
			</p>
			<p class="field required half">
				<label class="label" for="nim">NIM</label>
				<input class="text-input" id="nim" name="nim" type="text" value="<?= $user['nim']; ?>" readonly/>
			</p>
			<p class="field required half">
				<label class="label" for="email">E-mail</label>
				<input class="text-input" id="email" name="email" type="email" value="<?= $user['email']; ?>" readonly/>
			</p>
			<p class="field required">
				<label class="label required" for="alamat">Alamat</label>
				<textarea class="text-input" id="alamat" name="alamat" readonly><?= $user['alamat']; ?></textarea>
			</p>
		</form>
</div>
	</body>
</html>

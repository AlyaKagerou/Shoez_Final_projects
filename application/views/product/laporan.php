<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<link href="<?= base_url('sb-admin') ?>/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
	<div class="row">
		<div class="col text-center">
			<h3 class="h3 text-dark"><?= $title ?></h3>
		</div>
	</div>
	<hr>
	<div class="row">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<td>No</td>
					<td>Kode Kasir</td>
					<td>Nama Kasir</td>
					<td>Username</td>
					<td>Password</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($produk as $p): ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $p['kode_barang']; ?></td>
						<td><?= $p['nama_barang']; ?></td>
						<td><?= $p['harga_beli'] ?></td>
						<td><?= $p['harga_jual'] ?></td>
						<td><?= $p['stok']; ?></td>
						<td><?= $p['satuan']; ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</body>
</html>

<!DOCTYPE html>

<html>

<head>

	<title></title>

	<style>
		table {

			border-collapse: collapse;

			width: 100%;

		}



		th,
		td {

			text-align: left;

			padding: 8px;

		}



		tr:nth-child(even) {
			background-color: #f2f2f2
		}



		th {

			background-color: teal;

			color: white;

		}
	</style>

</head>

<body style="padding: 10px;width: 800px;margin: auto;">

	<table style="margin-bottom: -20px;">

		<tr>

			<td><img src="<?= base_url() ?>assets/img/logo-damkar.png" width="120px;"></td>

			<td>

				<p style="font-size: 24px;font-weight: bold;margin-bottom: -10px;">LAPORAN SURAT KELUAR</p>

				<p style="margin-bottom: -10px;font-weight: bold;font-size: 16px;">Pemadam Kebakaran Kabupaten Bantul
				</p>

				<p style="font-size: 12px;line-height: 20px;">Jl. KH. Wachid Hasyim, Sumuran, Palbapang, Bantul,
					D.I.Yogyakarta 55714 | Telp. (0274) 368 222 Fax. (0274) 646 2100 | E-mail: bpbd@bantulkab.go.id </p>

			</td>

		</tr>

	</table>

	<hr style="font-weight: bold;">

	<b style="font-size: 12px;">Tanggal cetak : <?php echo date('d-m-Y H:i:s') ?> </b>

	<table border="1" width="100%" style="font-size: 12px;">

		<tr>

			<th>NO</th>

			<th>NOMOR SURAT</th>

			<th>PERIHAL</th>

			<th>DARI</th>

		</tr>

		<?php $no = 0 ; foreach($sk->result() as $d) { $no++;?>
		<tr>
			<td><?php echo $no; ?></td>

			<td>
				<?php echo $d->nomor_surat_keluar; ?>
			</td>

			<td><?php echo $d->perihal_surat_keluar; ?></td>
			<td><?php echo $d->kontak; ?></td>

		</tr>

		<?php } ?>

	</table>
	<script>
		window.print();
	</script>
</body>

</html>
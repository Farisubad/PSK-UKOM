<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Laporan Data Mahasiswa</title>

</head><body>
<h1>LAPORAN DATA MAHASISWA</h1>
<table>
	
<table border="1" style="width: 100%">
        <tr>
            <th width="1%">NO</th>
            <th>NISN</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>TANGGAL LAHIR</th>
                <th>AGAMA</th>
                <th>NO TELP</th>
                <th>ASAL SEKOLAH</th>
                <th>ALAMAT SISWA</th>

        </tr>
		
		
		<?php $no= 1; foreach ($mahasiswa as $row): ?>
	<tr >
		<td><?php echo $no++ ?></td>
		<td><?php echo $row ->nisn?></td>
                <td><?php echo $row ->nama?></td>
                <td><?php echo $row ->jenis_kelamin?></td>
                <td><?php echo $row ->tanggal_lahir?></td>
                <td><?php echo $row ->agama?></td>
                <td><?php echo $row ->no_telpon?></td>
                <td><?php echo $row ->asal_sekolah?></td>
                <td><?php echo $row ->alamat?></td>


	</tr>

<?php endforeach ; ?>
</table>


</body></html>
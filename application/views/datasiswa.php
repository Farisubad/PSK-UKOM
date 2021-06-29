<div class="content-wrapper">
    <section class="content-header">
      <h1>
      Data Calon Siswa
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Calon Siswa</li>
      </ol>
    </section>

    <section class="content">
        <a href="data_siswa/tambah"><button class="btn btn-primary" ><i class="fa fa-plus"></i> Tambah Data</button></a>
        <a href="data_siswa/pdf"><button class="btn btn-primary"" ><i class="fa fa-print"></i> Print Data</button></a>

        <table class="table">
            <tr>
            <th>NO</th>
            <th>NISN</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>TANGGAL LAHIR</th>
                <th>AGAMA</th>
                <th>NO TELP</th>
                <th>ASAL SEKOLAH</th>
                <th>ALAMAT SISWA</th>
                <th>STATUS</th>
                <th>NILAI MATEMATIKA</th>
                <th>NILAI BAHSA INGGRIS</th>
               
          
          <th colspan="2">AKSI</th>
            </tr>
    <?php
  $count = 0;
  foreach ($mahasiswa as $row) {
      $count = $count +1;
    ?>
              <tr>
                <td><?php echo $count?></td>
                <td><?php echo $row ->nisn?></td>
                <td><?php echo $row ->nama?></td>
                <td><?php echo $row ->jenis_kelamin?></td>
                <td><?php echo $row ->tanggal_lahir?></td>
                <td><?php echo $row ->agama?></td>
                <td><?php echo $row ->no_telpon?></td>
                <td><?php echo $row ->asal_sekolah?></td>
                <td><?php echo $row ->alamat?></td>
                <td><?php echo $row ->status?></td>
                <td><?php echo $row ->matematika?></td>
                <td><?php echo $row ->b_inggris?></td>
               
            <td><?php echo anchor('data_siswa/edit/'.$row->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>
            </tr>
        <?php } ?>
        </table>

    </section>

</div>
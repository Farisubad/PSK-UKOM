<div class="content-wrapper">
    <section class="content-header">
      <h1>
       Edit Data Calon Siswa
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Calon Siswa</a></li>
        <li class="active">Edit Data Calon Siswa</li>
      </ol>
    </section>
    <section class="content">
        <?php foreach ($mahasiswa as $row) {?>

        <form action="<?php echo base_url().'index.php/data_siswa/update';?>" method="post">
            <div class="form-group">
                <label>NISN</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $row->id ?>">
                <input type="text" name="nisn" class="form-control" value="<?php echo $row->nisn ?>">
            </div>
            <div class="form-group">
                <label>NAMA</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $row->nama ?>">
            </div>
                        <div class="form-group">
                <label>JENIS KELAMIN</label>
                <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $row->jenis_kelamin ?>">
            </div>
                        <div class="form-group">
                <label>TANGGAL LAHIR</label>
                <input type="text" name="tanggal_lahir" class="form-control" value="<?php echo $row->tanggal_lahir ?>">
            </div>
                        <div class="form-group">
                <label>AGAMA</label>
                <input type="text" name="agama" class="form-control" value="<?php echo $row->agama ?>">
            </div>
                        <div class="form-group">
                <label>NO TELPON</label>
                <input type="text" name="no_telpon" class="form-control" value="<?php echo $row->no_telpon ?>">
            </div>
                        <div class="form-group">
                <label>ASAL SEKOLAH</label>
                <input type="text" name="asal_sekolah" class="form-control" value="<?php echo $row->asal_sekolah ?>">
            </div>
                        <div class="form-group">
                <label>ALAMAT</label>
                <input type="text" name="alamat" class="form-control" value="<?php echo $row->alamat ?>">
            </div>
            <div class="form-group">
                <label>NILAI MATEMATIKA</label>
                <input type="text" name="matematika" class="form-control" value="<?php echo $row->matematika ?>">
            </div>
            <div class="form-group">
                <label>NILAI BAHASA INDONESIA</label>
                <input type="text" name="b_inggris" class="form-control" value="<?php echo $row->b_inggris ?>">
            </div>

            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>
    <?php } ?>

    </section>
</div>
<div class="content-wrapper">
    <section class="content-header">
      <h1>
       Tambah Data Siswa
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Calon Siswa</a></li>
        <li class="active">Tambah Data Siswa</li>
      </ol>
    </section>
    <section class="content">

        <form action="<?php echo base_url().'index.php/data_siswa/fungsitambah';?>" method="post">
            <div class="form-group">
                <label>NISN</label>
                <input type="hidden" name="id" class="form-control">
                <input type="text" name="nisn" class="form-control">
            </div>
            <div class="form-group">
                <label>NAMA</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label>JENIS KELAMIN</label>
                <input type="text" name="jenis_kelamin" class="form-control">
            </div>
            <div class="form-group">
                <label>TANGGAL LAHIR</label>
                <input type="text" name="tanggal_lahir" class="form-control">
            </div>                
            <div class="form-group">
                <label>AGAMA</label>
                <input type="text" name="agama" class="form-control">
            </div>
            <div class="form-group">
                <label>NO TELPON</label>
                <input type="text" name="no_telpon" class="form-control">
            </div>
            <div class="form-group">
                <label>ASAL SEKOLAH</label>
                <input type="text" name="asal_sekolah" class="form-control">
            </div>
            <div class="form-group">
                <label>ALAMAT</label>
                <input type="text" name="alamat" class="form-control" >
            </div>
            <div class="form-group">
                <label>NILAI MATEMATIKA</label>
                <input type="text" name="matematika" class="form-control" >
            </div>
            <div class="form-group">
                <label>NILAI BAHASA INGGRIS</label>
                <input type="text" name="b_inggris" class="form-control" >
            </div>
            <div class="form-group">
            <label>STATUS</label>
            <select name='status'>
            <option value='Selesai Pemberkasan' class='form-control'>Selesai Pemberkasan</option>
            <option value='Belum Selesai' class='form-control'>Belum Selesai</option>
            </select>
            </div>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>


    </section>
</div>
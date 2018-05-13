  <div class="card card-default" style="border-radius: 0px; margin: 20px 0;">
    <div class="card-header">Tambah Data Siswa</div>
    <div class="card-body">
      <?php echo anchor('siswa','kembali','class="btn btn-secondary" style="margin:0 5px; margin-bottom:5px;"');?>
      <hr/>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <form action="<?php echo base_url(). 'index.php/siswa/tambah_aksi'; ?>" method="post">
            <div class="form-group">
              <label>NISN</label>
              <input type="text" name="siswa_nisn" class="form-control" placeholder="...">
              <small class="form-text text-muted">Isikan NISN sesuai data dari website : http://nisn.kemendikbud.go.id</small>
            </div>

            <div class="form-group">
              <label>NIS</label>
              <input type="text" name="siswa_nis" class="form-control" placeholder="...">
            </div>

            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" name="siswa_nama_lengkap" class="form-control" placeholder="...">
            </div>

            <div class="form-group">
              <label>Jenis Kelamin</label>
              <br/>
              <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="siswa_jk" value"L">
                <label class="form-check-label">Laki-laki</label>
              </div>
              <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="siswa_jk" value"P">
                <label class="form-check-label">Perempuan</label>
              </div>

              <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="siswa_tempat_lahir" class="form-control" placeholder="...">
              </div>

              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="siswa_tanggal_lahir" class="form-control" placeholder="...">
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <textarea type="text" class="form-control" name="siswa_alamat" placeholder="..." style="height: 100px;"></textarea>
              </div>

              <div class="form-group">
                <label>Jurusan</label>
                <?php
                $option = array(
                  ""=>"- Pilih Jurusan -",
                  "DG"=>"Desain Grafika",
                  "TPM"=>"Teknik Pemesinan",
                  "TBSM"=>"Teknik Bisnin Sepeda Motor",
                  "RPL"=>"Rekayasa Perangkat Lunak",
                  "TKJ"=>"Teknik Komputer Jaringan",
                  "OTKP"=>"Otomatisasi Tata Kelola Perkantoran",
                  "BDP"=>"Bisnis Daring dan Pemasaran",
                  "AKL"=>"Akuntansi Keuangan Lembaga",
                );
                echo form_dropdown('siswa_jurusan',$option,'','class="form-control"');
                ?>
              </div>
              <button type="submit" class="btn btn-primarymb-2">Simpan</button>
            </form>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </div>

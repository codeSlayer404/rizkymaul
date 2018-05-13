<div class="card card-default" style="border-radius: 0px;margin: 20px 0;">
     <div class="card-header">Kelola Data Siswa</div>
     <div class="card-body">
       <?php
       echo anchor('siswa/tambah','Tambah Siswa','class="btn btn-primary" style="margin:0 5px; margin-bottom:15px;"'); 
       echo anchor('siswa/laporan','Cetak Laporan','class="btn btn-secondary" style="margin:0 5px; margin-bottom:15px;"');
       ?>
          <table class="table table-striped">
               <thead>
                    <tr>
                         <th scope="col">NO</th>
                         <th scope="col">NIS</th>
                         <th scope="col">NAMA LENGKAP</th>
                         <th scope="col">TANGGAL LAHIR</th>
                         <th scope="col">JURUSAN</th>
                         <th scope="col">AKSI</th>
                    </tr>
               </thead>
               <tbody>
                    <?php
                         if ($query->num_rows() > 0) {
                              $no = 0;
                              foreach ($query->result() as $row) {
                                   $no++;
                                   echo '
                                        <tr>
                                             <td>'.$no.'</td>
                                             <td>'.$row->nis.'</td>
                                             <td>'.$row->nama_lengkap.'</td>
                                             <td>'.$row->tanggal_lahir.'</td>
                                             <td>'.$row->jurusan.'</td>
                                             <td>
                                                  '.anchor('siswa/edit/'.$row->siswa_id, 'Edit', 'class="btn btn-xs btn-success"').'
                                                  '.anchor('siswa/hapus/'.$row->siswa_id, 'Hapus', 'class="btn btn-xs btn-danger"').'
                                             </td>
                                        </tr>
                                   ';
                              }
                         }else{
                              echo '
                                   <tr>
                                        <td colspan="6" class="text-center">Data masih kosong !</td>
                                   </tr>
                              ';
                         }
                    ?>
               </tbody>
          </table>
     </div>
</div>

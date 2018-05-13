<div class="card card-default" style="border-radius: 0px;margin: 20px 0;">
     <div class="card-header">Data Siswa</div>
     <div class="card-body">
          <table class="table table-striped">
               <thead>
                    <tr>
                         <th scope="col">#</th>
                         <th scope="col">NIS</th>
                         <th scope="col">NAMA_LENGKAP</th>
                         <th scope="col">TANGGAL_LAHIR</th>
                         <th scope="col">JURUSAN</th>
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
<script type="text/javascript">
     window.print();
</script>
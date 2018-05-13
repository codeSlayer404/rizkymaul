<?php
     class Siswa extends CI_Controller{
          function _construct(){
               parent:: _construct();
               $this->load->model('m_data');
          }

          function index(){
               $siswa = $this->db->get("siswa");

               $data["query"] = $siswa;
               $data["content"] = "pages/siswa_index";
               $this->load->view("template", $data);
          }

          function tambah(){
               $siswa = $this->db->get("siswa");

               $data["query"] = $siswa;
               $data["content"] = "pages/siswa_form";
               $this->load->view("template", $data);
          }
          function tambah_aksi(){
            $siswa = $this->db->get("siswa");
            $siswa_nisn = $this->input->post('siswa_nisn');
            $siswa_nis = $this->input->post('siswa_nis');
            $siswa_nama_lengkap = $this->input->post('siswa_nama_lengkap');
            $siswa_jk = $this->input->post('siswa_jk');
            $siswa_tempat_lahir = $this->input->post('siswa_tempat_lahir');
            $siswa_tanggal_lahir = $this->input->post('siswa_tanggal_lahir');
            $siswa_alamat = $this->input->post('siswa_alamat');
            $siswa_jurusan = $this->input->post('siswa_jurusan');

            $data = array(
              'nisn' => $siswa_nisn,
              'nis' => $siswa_nis,
              'nama_lengkap' => $siswa_nama_lengkap,
              'jk' => $siswa_jk,
              'tempat_lahir' => $siswa_tempat_lahir,
              'tanggal_lahir' => $siswa_tanggal_lahir,
              'alamat' => $siswa_alamat,
              'jurusan' => $siswa_jurusan
            );
            $this->db->insert('siswa',$data);
            redirect(base_url('index.php/siswa'));

          }


          function edit(){
               $siswa = $this->db->get("siswa");

               $data["query"] = $siswa;
               $data["content"] = "pages/v_edit";
               $this->load->view("template", $data);
          }
          function update(){
            $siswa = $this->db->get("siswa");
            $siswa_nisn = $this->input->post('siswa_nisn');
            $siswa_nis = $this->input->post('siswa_nis');
            $siswa_nama_lengkap = $this->input->post('siswa_nama_lengkap');
            $siswa_jk = $this->input->post('siswa_jk');
            $siswa_tempat_lahir = $this->input->post('siswa_tempat_lahir');
            $siswa_tanggal_lahir = $this->input->post('siswa_tanggal_lahir');
            $siswa_alamat = $this->input->post('siswa_alamat');
            $siswa_jurusan = $this->input->post('siswa_jurusan');

            $data = array(
              'nisn' => $siswa_nisn,
              'nis' => $siswa_nis,
              'nama_lengkap' => $siswa_nama_lengkap,
              'jk' => $siswa_jk,
              'tempat_lahir' => $siswa_tempat_lahir,
              'tanggal_lahir' => $siswa_tanggal_lahir,
              'alamat' => $siswa_alamat,
              'jurusan' => $siswa_jurusan
            );
            $this->db->update('siswa',$data);
            redirect(base_url('index.php/siswa'));

          }


          function hapus($siswa_id){
                $this->db->where('siswa_id',$siswa_id);
            		$this->db->delete('siswa');
            		redirect(base_url('index.php/siswa'));
            	}

          function laporan(){
             $siswa = $this->db->get("siswa");

               $data["query"] = $siswa;
               $data["content"] = "pages/cetak";
               $this->load->view("template", $data);
          }
      }
?>

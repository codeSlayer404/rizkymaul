<?php
     class Tentang extends CI_Controller{
          function __construct(){
               parent:: __construct();
               $data = array();
          }

          function index(){
               $data["content"] = "pages/tentang_index";
               $this->load->view("template", $data);
          }
     }
?>

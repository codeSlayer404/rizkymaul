<?php
     class Beranda extends CI_Controller{
          function __construct(){
               parent:: __construct();
               $data = array();
          }

          function index(){
               $data["content"] = "pages/beranda_index";
               $this->load->view("template", $data);
          }
     }
?>

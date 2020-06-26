<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_akun extends CI_Model{

       function daftar($data)
       {
            $this->db->insert('tb_user',$data);
       }
  }
<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class cetak_model extends CI_Model {
    
        public function view()
        {
            $this->db->select('nama, email, jurusan');
            $query=$this->db->get('praktikum_ci');
            return $query->result();
        }
        public function view_siswa()
        {
            $this->db->select('nim, nama, alamat');
            $query=$this->db->get('siswa');
            return $query->result();
        }
    
    }
    
    /* End of file cetak_model.php */
    

?>
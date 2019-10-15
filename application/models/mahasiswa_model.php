<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class mahasiswa_model extends CI_Model {
 
     public function getData()
     {
         return $this->db->get('praktikum_ci');
     }
     public function tambahData()
     {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'nim' => $this->input->post('nim', true),
            'email' => $this->input->post('email', true),
            'jurusan' => $this->input->post('jurusan', true)
        );
    
        $this->db->insert('praktikum_ci', $data);
     }
     public function hapus($id)
     {
        $this->db->where('id', $id);
        $this->db->delete('praktikum_ci');
     }
     public function getbyid($id)
     {
         return $this->db->get_where('praktikum_ci', array('id' => $id))->row_array();
     }
     public function ubahData($id)
     {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'nim' => $this->input->post('nim', true),
            'email' => $this->input->post('email', true),
            'jurusan' => $this->input->post('jurusan', true)
        );
        $this->db->where('id', $id);
        $this->db->update('praktikum_ci', $data);
     }
     public function cariData($keyword)
     {
         $this->db->like('nama',$keyword);
         $this->db->or_like('jurusan',$keyword);
         return $this->db->get('praktikum_ci')->result();
     }
     public function datatables()
     {
        $query = $this->db->order_by('id', 'DESC')->get('praktikum_ci');
        return $query->result();
     }
 }
 
 /* End of file mahasiswa_model.php */
 

?>
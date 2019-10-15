<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class m_siswa extends CI_Model {
 
     public function getData()
     {
         return $this->db->get('siswa');
     }
     public function addData()
     {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'nim' => $this->input->post('nim', true),
            'alamat' => $this->input->post('alamat', true)
        );
    
        $this->db->insert('siswa', $data);
     }
     public function hapus($id)
     {
        $this->db->where('id', $id);
        $this->db->delete('siswa');
     }
     public function getbyid($id)
     {
         return $this->db->get_where('siswa', array('id' => $id))->row_array();
     }
     public function ubahData($id)
     {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'nim' => $this->input->post('nim', true),
            'alamat' => $this->input->post('alamat', true)
        );
        $this->db->where('id', $id);
        $this->db->update('siswa', $data);
     }
     public function cariData($keyword)
     {
         $this->db->like('nama',$keyword);
         $this->db->or_like('alamat',$keyword);
         $this->db->or_like('nim',$keyword);
         return $this->db->get('siswa')->result();
     }
     public function datatables()
     {
        $query = $this->db->order_by('id', 'DESC')->get('siswa');
        return $query->result();
     }
 }
 
 /* End of file mahasiswa_model.php */
 

?>
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->database();
        if ($this->session->userdata('level')!="admin") {
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $data['title']="List Mahasiswa";
        $data['mahasiswa']=$this->mahasiswa_model->getData()->result();
        if ($this->input->post('key')) {
            $keyword=$this->input->post('key');
            $data['mahasiswa']=$this->mahasiswa_model->cariData($keyword);
        }
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('template/footer');
    }
    public function Tambah()
    {
        $data['title']="Tambah data mahasiswa Mahasiswa";
        $data['jurusan']=['Teknik Informatika','Teknik Kimia', 'Teknik Mesin', 'Teknik industri'];
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('mahasiswa/tambah');
        }else{
            $this->mahasiswa_model->tambahData();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('mahasiswa','refresh');
        }
        $this->load->view('template/footer');
    }
    public function hapus($id)
    {
        $this->mahasiswa_model->hapus($id);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('mahasiswa','refresh');
    }
    public function detail($id)
    {
        $data['title']="Tambah data Mahasiswa";
        $data['mahasiswa']=$this->mahasiswa_model->getbyid($id);
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('template/footer');
    }
    public function edit($id)
    {
        $data['title']="Edit data Mahasiswa";
        $data['mahasiswa']=$this->mahasiswa_model->getbyid($id);
        $data['jurusan']=['Teknik Informatika','Teknik Kimia', 'Teknik Mesin', 'Teknik industri'];
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('mahasiswa/edit');
        }else{
            $this->mahasiswa_model->ubahData($id    );
            $this->session->set_flashdata('flash_data','diedit');
            redirect('mahasiswa','refresh');
        }
        $this->load->view('template/footer');        
    }
}

/* End of file mahasiswa.php */

?>
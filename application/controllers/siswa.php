<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class siswa extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->model('m_siswa');
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->load->database();
            if ($this->session->userdata('level')!="admin") {
                redirect('login','refresh');
            }
        }

        public function index()
        {
            $data['title']= "List Siswa";
            $data['siswa']=$this->m_siswa->getdata()->result();
            if ($this->input->post('key')) {
                $keyword=$this->input->post('key');
                $data['siswa']=$this->m_siswa->cariData($keyword);
            }
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar');
            $this->load->view('siswa/index', $data);
            $this->load->view('template/footer');
        }
        public function add()
        {
            $data['title']= "List Siswa";
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar');
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('siswa/tambah');
            }else{
                $this->m_siswa->addData();
                redirect('siswa','refresh');
            }
            $this->load->view('template/footer');
        }
        public function hapus($id)
        {
            $this->m_siswa->hapus($id);
            $this->session->set_flashdata('flash-data-sukses', 'dihapus');
            redirect('siswa','refresh');
        }
        public function detail($id)
        {
            $data['title']="Detail Data siswa";
            $data['siswa']=$this->m_siswa->getbyid($id);
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar');
            $this->load->view('siswa/detail', $data);
            $this->load->view('template/footer');
        }
        public function edit($id)
        {
            $data['title']="Edit data Mahasiswa";
            $data['siswa']=$this->m_siswa->getbyid($id);
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar');
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('siswa/edit');
            }else{
                $this->m_siswa->ubahData($id);
                $this->session->set_flashdata('flash_data','diedit');
                redirect('siswa','refresh');
            }
            $this->load->view('template/footer');        
        }
    }
    
    /* End of file siswa.php */
    
?>
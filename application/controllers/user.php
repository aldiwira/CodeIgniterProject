<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class user extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->model('login_model');
            $this->load->model('mahasiswa_model');
            $this->load->model('m_siswa');
            $this->load->model('cetak_model');
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->library('pdf');
            $this->load->library('session');
            if ($this->session->userdata('level')!="mahasiswa" && $this->session->userdata('level')!="siswa"){
                redirect('login','refresh');
            }
        }

        public function index()
        {
            
            if ($this->session->userdata('level')=="mahasiswa") {
                
                $data['title']="Data Mahasiswa";
                $data['mahasiswa']=$this->mahasiswa_model->datatables();
                $this->load->view('template/header_datatables_user', $data);
                $this->load->view('template/navbar');
                $this->load->view('mahasiswa/user', $data);
            } elseif($this->session->userdata('level')=="siswa"){
                
                $data['title']="Data Siswa";
                $data['mahasiswa']=$this->m_siswa->datatables();
                $this->load->view('template/header_datatables_user', $data);
                $this->load->view('template/navbar');
                $this->load->view('siswa/user', $data);
            }
            $this->load->view('template/footer_datatables_user', $data);   
        }
        // public function coba()
        // {
        //     $data['siswa']=$this->cetak_model->view_siswa();

        //     $this->load->view('siswa/laporan', $data); 
        // }
        public function laporan_pdf(){
            if ($this->session->userdata('level')=="mahasiswa") {
                $data['mahasiswa']=$this->cetak_model->view();
                $this->pdf->setPaper('A4', 'potrait');
                $this->pdf->filename = "laporan mahasiswa.pdf";
                $this->pdf->load_view('mahasiswa/laporan', $data);
            } elseif($this->session->userdata('level')=="siswa"){
                $data['siswa']=$this->cetak_model->view_siswa();
                $this->pdf->setPaper('A4', 'potrait');
                $this->pdf->filename = "laporan siswa.pdf";
                $this->pdf->load_view('siswa/laporan', $data);
            }
        }
    }
    
    /* End of file user.php */
    
?>
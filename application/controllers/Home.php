<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index($name = ""){
        // echo "Selamat datang";
        $data['title'] = "Home";
        $data["name"] = $name;
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('home/index', $data);
        $this->load->view('template/footer');
        if ($this->session->userdata('level')!="admin") {
            redirect('login','refresh');
        }
    }

    public function belajar(){
        $data['title'] = "Home";
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('home/belajar');
        $this->load->view('template/footer');
    }

    public function belajar_kedua(){
        $data['title'] = "Home";
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('home/belajardua');
        $this->load->view('template/footer');
    }

}

/* End of file Controllername.php */

?>
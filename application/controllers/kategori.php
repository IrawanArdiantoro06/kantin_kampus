<?php

class Kategori extends CI_Controller{
    public function makanan(){
        $data['makanan'] = $this->model_kategori->data_makanan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('makanan',$data);
        $this->load->view('templates/footer');
    }
}
<?php

class Data_makanan extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role_id') !='1'){
            $this->session->set_flashdata('pesan',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>');
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['makanan'] = $this->model_makanan->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_makanan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_mkn       = $this->input->post('nama_mkn');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok');
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar =''){}else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar Gagal di Upload";
            }else{
                $gambar=$this->upload->data('file_name');
            }
        }

        $data = array (
            'nama_mkn'      => $nama_mkn,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok,
            'gambar'        => $gambar,

        );

        $this->model_makanan->tambah_makanan($data, 'tb_mkn');
        redirect('admin/data_makanan/index');
    }

    public function edit($id)
    {
        $where = array('id_mkn' =>$id);
        $data['makanan'] = $this->model_makanan->edit_makanan($where, 'tb_mkn')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_makanan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update(){
        $id             = $this->input->post('id_mkn');
        $nama_mkn       = $this->input->post('nama_mkn');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok');

        $data = array(
            'nama_mkn'      => $nama_mkn,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok
        );

        $where  = array(
            'id_mkn' => $id
        );

        $this->model_makanan->update_data($where,$data, 'tb_mkn');
        redirect ('admin/data_makanan/index');
    }

    public function hapus ($id)
    {
        $where = array(
            'id_mkn' => $id
        );
        $this->model_makanan->hapus_data($where, 'tb_mkn');
        redirect ('admin/data_makanan/index');
    }
}

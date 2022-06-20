<?php

class Model_kategori extends CI_Model{
    public function data_food(){
        return $this->db->get_where("tb_mkn",array('kategori' => 'makanan'));
    }
}
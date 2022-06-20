<?php

class Model_makanan extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tb_mkn');
    }

    public function tambah_makanan($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_makanan($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find ($id){
        $result = $this->db->where('id_mkn', $id)
                           ->limit(1)
                           ->get('tb_mkn');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function detail_mkn($id_mkn){
        $result = $this->db->where('id_mkn', $id_mkn)->get('tb_mkn');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }
}
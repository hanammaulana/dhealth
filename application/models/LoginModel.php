<?php

class LoginModel extends CI_Model
{

    function validate($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('users', 1);
        return $result;
    }
    function getobatm(){
        $query = $this->db->query('SELECT obatalkes_kode,obatalkes_nama,stok,created_date FROM `obatalkes_m`;');
        return $query->result();
    }
    function tambahob(){
        
    }
}
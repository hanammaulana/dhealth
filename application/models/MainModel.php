<?php

class MainModel extends CI_Model{

    function getobatm()
    {
        $query = $this->db->query('SELECT * FROM `obatalkes_m` WHERE stok>0;');
        return $query->result_array();
    }
    function getsigna()
    {
        return $this->db->get('signa_m')->result_array();
    }
    function addobatnr($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function addobatr($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function addobat($data,$table)
    {
        $this->db->insert($data, $table);
    }
    function getobatnr()
    {
        $query = $this->db->query('SELECT obat_non_racik.obat_id,obat_non_racik.nama_obat,obat_non_racik.jumlah, signa_m.signa_nama,obatalkes_m.obatalkes_nama FROM signa_m JOIN obat_non_racik ON obat_non_racik.signa_id=signa_m.signa_id JOIN obatalkes_m ON obat_non_racik.bahan_1=obatalkes_m.obatalkes_id WHERE obat_non_racik.jumlah >0;');
        return $query->result_array();
    }
    function getobatr()
    {
        $query = $this->db->query('SELECT obat_racik.obatnr_id,obat_racik.nama_obat,obat_racik.jumlah, signa_m.signa_nama,obat_racik.bahan_1,obat_racik.bahan_2,obat_racik.bahan_3 FROM signa_m JOIN obat_racik ON obat_racik.signa_id=signa_m.signa_id WHERE obat_racik.jumlah >0');
        return $query->result_array();
    }
    function beliobnr($data, $id)
    {
        $this->db->where('obat_id', $id);
        $this->db->update('obat_non_racik', $data);
    }
    function beliobr($data, $id)
    {
        $this->db->where('obatnr_id', $id);
        $this->db->update('obat_racik', $data);
    }
    function getstok($data)
    {
        $query = $this->db->query("SELECT `stok` FROM `obatalkes_m` WHERE obatalkes_id =$data");
        return $query->result_array();
    }
    function updatestok($id)
    {
        $query = $this->db->query("UPDATE `obatalkes_m` SET `stok` = 'stok-0.1' WHERE `obatalkes_id` =$id");
        return $query();
    }
}

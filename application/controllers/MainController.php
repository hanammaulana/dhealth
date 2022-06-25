<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {
    function __construct()
	{
	  parent::__construct();
	  $this->load->model('MainModel');
	}
    
    public function index(){
        $this->load->view('head');
        $this->load->view('main');
        $this->load->view('footer');
    }
    public function askes(){
        $data['obat'] = $this->MainModel->getobatm();
		$this->load->view('head');
		$this->load->view('lsaskes',$data);
        $this->load->view('footer');
    }
    public function tambahobat(){
        $data['signa']=$this->MainModel->getsigna();
        $data['bahan']=$this->MainModel->getobatm();
        $this->load->view('head');
        $this->load->view('tambahobat',$data);
        $this->load->view('footer');
    }
    public function tambahobatr(){
        $data['signa']=$this->MainModel->getsigna();
        $data['bahan']=$this->MainModel->getobatm();
        $this->load->view('head');
        $this->load->view('tambahobatr',$data);
        $this->load->view('footer');
    }
    public function addobatnr(){
        $data=array(
			'nama_obat'=> $this->input->get("obat"),
			'jumlah'=> $this->input->get("jumlah"),
			'signa_id'=> $this->input->get("signa"),
			'bahan_1'=> $this->input->get("bahan_1")
		);
		$this->MainModel->addobatnr($data,'obat_non_racik');
		redirect("MainController/tambahobat");
    }
    public function addobatr(){
        $data=array(
			'nama_obat'=> $this->input->get("obat"),
			'jumlah'=> $this->input->get("jumlah"),
			'signa_id'=> $this->input->get("signa"),
			'bahan_1'=> $this->input->get("bahan_1"),
            'bahan_2'=> $this->input->get("bahan_2"),
			'bahan_3'=> $this->input->get("bahan_3")
		);
		$this->MainModel->addobatr($data,'obat_racik');
		redirect("MainController/tambahobatr");
    }
    public function lsobatnr(){
        $data['obatnr']=$this->MainModel->getobatnr();
        $data['obatnrs']=$this->MainModel->getobatnr();
        $this->load->view('head');
        $this->load->view('lsobatnr',$data);
        $this->load->view('footer');
    }
    public function lsobatr(){
        $data['obatr']=$this->MainModel->getobatr();
        $this->load->view('head');

        $this->load->view('lsobatr',$data);
        $this->load->view('footer');
    }
    public function editobatnr(){
        $stok = $this->input->get('stok');
        $beli = $this->input->get('jumlah');
        $id = $this->input->get('obat_id');
        $total = 0;
        $total = $stok-$beli;
        $data=array(
            'jumlah'=> $total
        );
        $this->MainModel->beliobnr($data,$id);
        redirect("MainController/lsobatnr");
    }
    public function tambahobatnr(){
        $stok = $this->input->get('stok');
        $tambah = $this->input->get('jumlah');
        $id = $this->input->get('obat_id');
        $total = 0;
        $total = $stok+$tambah;
        $data=array(
            'jumlah'=> $total
        );
        $this->MainModel->beliobnr($data,$id);
        redirect("MainController/lsobatnr");
    }
    public function editobatr(){
        $stok = $this->input->get('stok');
        $beli = $this->input->get('jumlah');
        $id = $this->input->get('obatnr_id');
        $total = 0;
        $total = $stok-$beli;
        $data=array(
            'jumlah'=> $total
        );
        $this->MainModel->beliobr($data,$id);
        redirect("MainController/lsobatr");
    }
    public function tambahobatracik(){
        $stok = $this->input->get('stok');
        $tambah = $this->input->get('jumlah');
        $id = $this->input->get('obatnr_id');
        $total = 0;
        $total = $stok+$tambah;
        $data=array(
            'jumlah'=> $total
        );
        $this->MainModel->beliobr($data,$id);
        redirect("MainController/lsobatr");
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
    }
	
	public function index()
	{
		if ($this->session->userdata('login') == 1) {
            redirect('Welcome/index');
        }
        $this->load->view('head');
		$this->load->view('login');
	}
	function cek_login(){
        $username = $this->input->post('username', TRUE);
        $password = ($this->input->post('password', TRUE));
        $validate = $this->LoginModel->validate($username, $password);
        if ($validate->num_rows() > 0) {
            $data  = $validate->row_array();
            $id = $data['username'];
            $name  = $data['nama'];
            $level = $data['level'];
            $sesdata = array(
                'username' => $id,
                'nama'  => $name,
                'level'     => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            if ($level === '1') {
                redirect('MainController/index');
            } else {
                redirect('LoginController/index');
            }
        }
    
	}
    public function Logout()
    {
        $this->session->sess_destroy();
        redirect('LoginController/index');
    }
}

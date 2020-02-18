<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('M_barang');
		$this->load->helper('url');
	}
	function index(){
		$data['barang'] = $this->M_barang->tampil_data();
		$this->load->view('input_barang');
	}
	function input(){
		$this->load->view('input_barang');
	}
	function inputbarang(){
		$kodebrg = $this->input->post('kdbarang');
		$nmbrg = $this->input->post('nmbarang');
		$jmlbrg = $this->input->post('jmlbarang');
		$hrgbrg = $this->input->post('hrgbarang');

		$data = array(
			'kdbarang' =>$kodebrg,
			'nmbarang' =>$nmbrg,
			'jmlbarang' =>$jmlbrg,
			'hrgbarang' =>$hrgbrg
				
		);
		$this->proses_barang->input_data($data,'barang');
		redirect('welcome/index');

			
	}

}

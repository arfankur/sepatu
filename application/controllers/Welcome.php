<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Sepatu');
		$this->load->helper('url');
		$this->load->helper('file');
		$this->load->library('form_validation');
		
	}
	public function index()
	{
		$data['sepatu'] = $this->Sepatu->getAllSepatu();
		$this->load->view('sepatu',$data);
		
	}
	public function pesan(){
		// if (count($_POST) === 0) {
		// 	redirect(base_url('welcome/'));
		// }
		$this->form_validation->set_rules($this->Sepatu->sepatuRule());
		
		if ($this->form_validation->run() == false) {
			$this->load->view('sepatu', [
				'sepatu' => $this->Sepatu->getAllSepatu(),
			]);
		} else {
			$this->load->view('pesanan',[
				'pesanan' => $this->input->post(),
				'total_harga' => $this->input->post('jumlah_beli') * (int) explode('-',$this->input->post('sepatu'))[1]
			]);
		}
		
		
	}
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kalkulator extends CI_Controller
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
	public function index()
	{
		$data['title'] = "Kalkulator Zakat";

		$this->load->view('kalkulator', $data);
	}

	public function maal()
	{
		$data['title'] = "Zakat Maal";

		$this->load->view('zakat_maal', $data);
	}

	public function penghasilan()
	{
		$data['title'] = "Zakat Penghasilan";

		$this->load->view('zakat_penghasilan', $data);
	}

	public function contoh()
	{
		$data['title'] = "Contoh";

		$this->load->view('contoh', $data);
	}
}

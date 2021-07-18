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
	
	 public function index()
	{
		$this->load->view('home');
	}

	public function wisrek()
	{
		$this->load->view('wisata/wisata_rekreasi');
	}

	public function wiskul()
	{
		$this->load->view('wisata/wisata_kuliner');
	}
	
	public function detail1()
	{
		$this->load->view('wisata/detail_wisrek1');
	}

	public function detail2()
	{
		$this->load->view('wisata/detail_wisrek2');
	}

	public function detail3()
	{
		$this->load->view('wisata/detail_wisrek3');
	}

	public function jelas1()
	{
		$this->load->view('wisata/detail_wiskul1');
	}

	public function jelas2()
	{
		$this->load->view('wisata/detail_wiskul2');
	}

	public function jelas3()
	{
		$this->load->view('wisata/detail_wiskul3');
	}

	public function registrasi()
	{
		$this->load->view('wisata/registrasi');
	}




}

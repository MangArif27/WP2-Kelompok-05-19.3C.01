<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Page extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_datawbp');
		$this->load->model('m_layanan');
		$this->load->model('m_about');
	}
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
	public function DataPengguna()
	{
		//$this->load->view('welcome_message');
		$data['user'] = $this->m_user->tmpl_user()->result();
		view('page._data_pengguna', $data);
	}
	public function DataWBP()
	{
		//$this->load->view('welcome_message');
		$data['datawbp'] = $this->m_datawbp->tmpl_datawbp()->result();
		view('page._data_wbp', $data);
	}
	public function HistoriPendafataran()
	{
		//$this->load->view('welcome_message');
		$data['layanan'] = $this->m_layanan->tmpl_datapendaftaran()->result();
		view('page._data_pendaftaran_layanan', $data);
	}
	public function CetakTiket()
	{
		//$this->load->view('welcome_message');
		view('page._cetak_ticket');
	}
	public function LayananPendaftaran()
	{
		//$this->load->view('welcome_message');
		$data['layanan'] = $this->m_layanan->tmpl_datapendaftaran()->result();
		view('page._layanan_pendaftaran',$data);
	}
	public function  Profile()
	{
		//$this->load->view('welcome_message');
		$data['user'] = $this->m_user->tmpl_user()->result();
		view('page._profile',$data);
	}
	public function About()
	{
		$data['about'] = $this->m_about->search_about()->result();
		view('page._tentang_aplikasi', $data);
	}
}

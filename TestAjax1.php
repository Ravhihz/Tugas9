<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class TestAjax1 extends CI_Controller{
	function __construct ()
	{
		parent:: __construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('testajax1_view');
	}
	public function ambilData()
	{
		echo "<p style='color:red'>ini data baru via AJAX</p>";
	}
}
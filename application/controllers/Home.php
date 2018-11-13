<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }
	
	public function index(){
		$this->load->view('element/header');
		$this->load->view('index');
		$this->load->view('element/footer');
	}
}

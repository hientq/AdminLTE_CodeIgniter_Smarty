<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Home extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
		}
		
		public function index(){
			echo "hello";
		}
		public function show(){
			echo "show";
		}
		public function user(){
			$data['author'] = "HienTQ";
			$this->load->view('home_template', $data);
		}
		
	}
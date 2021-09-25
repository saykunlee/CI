<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instructor extends CI_Controller {
	
	public function list()
	{
		$this->load->library('session');
		$this->load->model('instructor_model');
		$view = array();
		$data['instructor'] = $this->instructor_model->get_all();
		$view['data'] = $data;
		$this->load->view('instructor_list',$view);
	}
}

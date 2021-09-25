<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Instructor_model extends CI_Model {
    
    public $_table = 'instructor'; // 테이블 명
	public $primary_key = 'instructor_no'; // 사용되는 테이블의 프라이머리키

    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }
	public function get_all()
	{
		$query = $this->db->get($this->_table);
        $result = $query->result();
		return $result;
	}

}



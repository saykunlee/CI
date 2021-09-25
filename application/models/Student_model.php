<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Student_model extends CI_Model {

    public $_table = 'student'; // 테이블 명
	public $primary_key = 'student_no'; // 사용되는 테이블의 프라이머리키
    
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
	public function get_by_email($email)
	{
		$this->db->where('student_email',$email);
        $query = $this->db->get($this->_table);
        $result = $query->row();
		return $result;
	}

}


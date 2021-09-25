<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Enrollment_model extends CI_Model {
    
    public $_table = 'enrollment'; // 테이블 명
	public $primary_key = 'enrollment_no'; // 사용되는 테이블의 프라이머리키

    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }
	public function get_by_no($student_no)
	{
        $this->db->join('course', 'enrollment.course_no = course.course_no');
        $this->db->join('instructor', 'course.instructor_no = instructor.instructor_no');
        $this->db->where('student_no',$student_no);
        $query = $this->db->get($this->_table);
        $result = $query->result();
		return $result;
	}

    function insert($insertdata) {
        $id = $this->db->insert($this->_table,$insertdata);
        return $id;
    }
    function delete($enrollment_no) {
        $this->db->where('enrollment_no', $enrollment_no);
        $id = $this->db->delete($this->_table);
        return $id;
    }

}


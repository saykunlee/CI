<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		//data helper 로딩
		$this->load->helper('date', 'url');
		$this->load->library('session');
	}
	public function list()
	{
		$this->load->model('course_model');
		$view = array();
		$data['course'] = $this->course_model->get_all();
		$view['data'] = $data;
		$this->load->view('course_list', $view);
	}
	public function enrollment()
	{
		$this->load->model('enrollment_model');
		$view = array();
		$data['enrollment'] = $this->enrollment_model->get_by_no($_SESSION['student_no']);
		$view['data'] = $data;
		$this->load->view('enrollment_list', $view);
	}
	public function add_enrollment($course_no)
	{
		$this->load->model('enrollment_model');

		$insertdata = array();
		$insertdata['course_no'] = $course_no;
		$insertdata['student_no'] = $_SESSION['student_no']; 
		$insertdata['enrollment_date'] = date("Y-m-d h:i:sa");
		$enrollment_no = $this->enrollment_model->insert($insertdata);

		if ($enrollment_no) {
			//정상적으로 등록시 수강신청 목록으로 이동한다.
			echo '<meta http-equiv="content-type" content="text/html; charset=euc-kr">';
			echo '<script type="text/javascript">alert("정상적으로 등록되었습니다.");';
			echo 'document.location.href="/course/enrollment/"';
			echo '</script>';
		} else {
			//정상적으로 등록시 강의 목록으로 돌아간다.
			echo '<meta http-equiv="content-type" content="text/html; charset=euc-kr">';
			echo '<script type="text/javascript">alert("오류가 발생하여 등록하지 못했습니다.");';
			echo 'history.go(-1);';
			echo '</script>';
			
		}
	}
	public function del_enrollment($enrollment_no)
	{
		$this->load->model('enrollment_model');
		$result = $this->enrollment_model->delete($enrollment_no);
		if ($result) {
			//정상적으로 삭제 수강신청 목록을 다시 가져온다.
			echo '<meta http-equiv="content-type" content="text/html; charset=euc-kr">';
			echo '<script type="text/javascript">alert("정상적으로 삭제되었습니다.");';
			echo 'document.location.href="/course/enrollment/"';
			echo '</script>';
		} else {
			//정상적으로 등록시 에러 메시지 출력한다. 
			echo '<meta http-equiv="content-type" content="text/html; charset=euc-kr">';
			echo '<script type="text/javascript">alert("오류가 발생하여 삭제하지 못했습니다.");';
			echo 'history.go(-1);';
			echo '</script>';
			
		}
	}
}

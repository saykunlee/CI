<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$this->load->library('session');
		$view = array();
		$view['data']['error_msg'] = '';
		$this->load->view('login', $view);
	}
	public function dologin()
	{
		$this->load->library('session');
		$view = array();
		// 전송된 이메일 유효성 검사
		$this->load->library('form_validation');
		$this->form_validation->set_rules('login_email', '이메일', 'required');

		if ($this->form_validation->run()) {
			//전송받은 이메일로 학생 모델을 통해 학생정보 조회
			$email = $this->input->post('login_email');
			$this->load->model('Student_model');
			$student_info = $this->Student_model->get_by_email($email);

			if ($student_info) {
				//정상적으로 이메일이 확인되면 세션에 학생 값을 설정
				$session_data = array(
					'student_no' => $student_info->student_no,
					'student_name' => $student_info->student_name,
					'student_major' => $student_info->student_major,
					'student_email' => $student_info->student_email
				);
				$this->session->set_userdata($session_data);
				//강의 리스트 화면으로 이동
				header('Location:/course/list/');
			} else {
				//정상적인 이메일이 아닐경우 에러 메시지와 함께 로그인 페이지로 이동한다.
				$view['data']['error_msg'] =  '등록된 이메일이 아닙니다.';
				$this->load->view('login', $view);
			}
		} else {
			//입력데이터 유효성검사 실패시 로그인 페이지로 이동한다. 
			$view['data']['error_msg'] =  '이메일을 입력해 주세요';
			$this->load->view('login', $view);
		}
	}
	public function dologout()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		$view = array();
		$view['data']['error_msg'] = '로그아웃 되었습니다.';
		$this->load->view('login', $view);
	}
}

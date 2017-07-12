<?php

class Form extends CI_Controller {

	function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|alpha_numeric|callback_password_check');

		$this->form_validation->set_error_delimiters('<span class="error1">', '</span>');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('header/header');
			$this->load->view('register');
			$this->load->view('footer/footer');
		}
		else
		{

		$db = new dbqueries();

		$db->fname = $this->input->post('fname');
		$db->lname = $this->input->post('lname');
		$db->email = $this->input->post('email');
		$db->password = $this->input->post('password');
		$db->status = 1;
   
		$db->add_user();
   
		$this->load->view('formsuccess');
		redirect('db_process/viewusers_admin','refresh');

		}
			
		
	}
	function password_check($str)
	{
		if (preg_match('#[0-9]#', $str) && preg_match('#[a-zA-Z]#', $str)) {
			return TRUE;
		}
		return FALSE;
	}
	
}
?>
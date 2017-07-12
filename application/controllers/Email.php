<?php

class Email extends CI_Controller {
	
	function index(){
		
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 587,
			'smtp_user' => 'styleguru141@gmail.com',
			'smtp_pass' => 'styleguru141test',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		
		$this->email->from('styleguru141@gmail.com', 'StyleGuru');
		$this->email->to('tjmasion@gmail.com'); 
		$this->email->cc(''); 
		$this->email->bcc(''); 

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');	

		$this->email->send();
	
		
	}
	
}
?>
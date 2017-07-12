<?php

class Page extends CI_Controller {

	public function index()
	{
		$this->load->view('header/header');
		$this->load->view('index');
		$this->load->view('footer/footer');
	}
	public function index_user()
	{
		$this->load->view('header/header');
		$this->load->view('index_user');
		$this->load->view('footer/footer');
	}
	public function index_admin()
	{
		$this->load->view('header/header');
		$this->load->view('index_admin');
		$this->load->view('footer/footer');
	}
	public function products()
	{
		$this->load->view('header/header');
		$this->load->view('products');
		$this->load->view('footer/footer');
	}
	public function products_user()
	{
		$this->load->view('header/header');
		$this->load->view('products_user');
		$this->load->view('footer/footer');
	}
	public function products_admin()
	{
		$this->load->view('header/header');
		$this->load->view('products_admin');
		$this->load->view('footer/footer');
	}
	public function about()
	{
		$this->load->view('header/header');
		$this->load->view('about');
		$this->load->view('footer/footer');
	}
	public function about_user()
	{
		$this->load->view('header/header');
		$this->load->view('about_user');
		$this->load->view('footer/footer');
	}
	public function about_admin()
	{
		$this->load->view('header/header');
		$this->load->view('about_admin');
		$this->load->view('footer/footer');
	}
	
	public function login()
	{
		$this->load->view('header/header');
		$this->load->view('login');
		$this->load->view('footer/footer');
	}
	public function logout()
	{
		$user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
    $this->session->sess_destroy();
    redirect('page/index','refresh');
	}
	
	
	public function add_user()
	{
		$this->load->view('header/header');
		$this->load->view('add_user');
		$this->load->view('footer/footer');
	}
	public function add_user_admin()
	{
		$this->load->view('header/header');
		$this->load->view('add_user_admin');
		$this->load->view('footer/footer');
	}
	public function add_product()
	{
		$this->load->view('header/header');
		$this->load->view('add_product');
		$this->load->view('footer/footer');
	}
	public function add_product_admin()
	{
		$this->load->view('header/header');
		$this->load->view('add_product_admin');
		$this->load->view('footer/footer');
	}
	public function user()
	{	
		$this->load->view('header/header');
		$this->load->view('user_page');
		$this->load->view('footer/footer');
		
	}
}
?>
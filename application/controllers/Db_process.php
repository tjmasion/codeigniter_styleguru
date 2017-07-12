<?php
class Db_process extends CI_Controller{

  public function add_product(){

   $db = new dbqueries2();

   $db->p_name = $this->input->post('pname');
   $db->p_brand= $this->input->post('pbrand');
   $db->p_category = $this->input->post('pcat');
   $db->p_stock = $this->input->post('pstock');
   
   $db->add_product();
   
   $this->load->view('formsuccess');
   redirect('db_process/viewproducts','refresh');

  }
   public function add_product_admin(){

   $db = new dbqueries2();

   $db->p_name = $this->input->post('pname');
   $db->p_brand= $this->input->post('pbrand');
   $db->p_category = $this->input->post('pcat');
   $db->p_stock = $this->input->post('pstock');
   
   $db->add_product();
   
   $this->load->view('formsuccess');
   redirect('db_process/viewproducts_admin','refresh');

  }
  
	public function check_user($email = ''){
		$chk = 0;
		$this->load->model('dbqueries');
		$where = array('email' => $email); 
		$data['email'] = $this->dbqueries->get_user('user',$where);
		
		foreach($data['email'] as $data_item){
			if($data_item->status == 1){
				$chk = 1;
			}
			elseif($data_item->status == 2){
				$chk = 2;
			}
		}
		return $chk;
	}
  
	function userlogin(){
		$db = new dbqueries();
	    
		$u_email = $this->input->post('email');
		$db->email = $u_email;
		$db->password = $this->input->post('password');
		
		$stat = $this->check_user($u_email);
		
		$data['logged'] = $db->login();
		if($data['logged']){
			if($stat == 1){
				unset($_SESSION['error_message']);
				
				$this->load->view('header/header');
				$this->load->view('index_user');
				$this->load->view('footer/footer');
				
			}
			elseif($stat == 2){
				unset($_SESSION['error_message']);
				
				$this->load->view('header/header');
				$this->load->view('index_admin');
				$this->load->view('footer/footer');
				
			}
			elseif($stat == 0){
				$_SESSION['error_message'] = "User Account Deactivated";
				redirect('page/login','refresh');
			}
		}
		else{
		$_SESSION['error_message'] = "Invalid Username or Password";
		redirect('page/login','refresh');
		}
	}
	function viewproducts(){
    $db = new dbqueries2();
	
	
    $data['products'] = $db->view_product();

		$this->load->view('header/header');
		$this->load->view('view_products',$data);
		$this->load->view('footer/footer');
	}
	function viewproducts_admin(){
    $db = new dbqueries2();
	
	
    $data['products'] = $db->view_product();

		$this->load->view('header/header');
		$this->load->view('view_products_admin',$data);
		$this->load->view('footer/footer');
	}
	function viewusers(){
    $db = new dbqueries();
	
	
    $data['users'] = $db->view_user();

		$this->load->view('header/header');
		$this->load->view('view_users',$data);
		$this->load->view('footer/footer');
	}
	function viewusers_admin(){
    $db = new dbqueries();
	
	
    $data['users'] = $db->view_user();

		$this->load->view('header/header');
		$this->load->view('view_users_admin',$data);
		$this->load->view('footer/footer');
	}
	public function delete_user($user_id = '') {
		$this->load->model('dbqueries');
		$where = array('user_id' => $user_id); 
		$this->dbqueries->delete_user('user',$where);
		redirect('db_process/viewusers','refresh');
	}
	public function delete_user_admin($user_id = '') {
		$this->load->model('dbqueries');
		$where = array('user_id' => $user_id); 
		$this->dbqueries->delete_user('user',$where);
		redirect('db_process/viewusers_admin','refresh');
	}
	public function delete_product($p_id = '') {
		$this->load->model('dbqueries2');
		$where = array('p_id' => $p_id); 
		$this->dbqueries2->delete_product('product',$where);
		redirect('db_process/viewproducts','refresh');
	}
	public function delete_product_admin($p_id = '') {
		$this->load->model('dbqueries2');
		$where = array('p_id' => $p_id); 
		$this->dbqueries2->delete_product('product',$where);
		redirect('db_process/viewproducts_admin','refresh');
	}
	public function get_user_row($user_id = '') {
		$this->load->model('dbqueries');
		$where = array('user_id' => $user_id); 
		$data['users'] = $this->dbqueries->get_user('user',$where);
		
		$this->load->view('header/header');
		$this->load->view('update_user',$data);
		$this->load->view('footer/footer');
	}
	public function get_user_row_admin($user_id = '') {
		$this->load->model('dbqueries');
		$where = array('user_id' => $user_id); 
		$data['users'] = $this->dbqueries->get_user('user',$where);
		
		$this->load->view('header/header');
		$this->load->view('update_user_admin',$data);
		$this->load->view('footer/footer');
	}
	public function update_user($user_id = '') {
		$db = new dbqueries();
		$where = array('user_id' => $user_id); 
		
		$data = array(
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'status' => $this->input->post('status')
		);
		
		$db->update_u('user', $where, $data);
   
		$this->load->view('formsuccess');
		redirect('db_process/viewusers_admin','refresh');
	}
	public function get_product_row($p_id = '') {
		$this->load->model('dbqueries2');
		$where = array('p_id' => $p_id); 
		$data['products'] = $this->dbqueries2->get_product('product',$where);
		
		$this->load->view('header/header');
		$this->load->view('update_product',$data);
		$this->load->view('footer/footer');
	}
	public function get_product_row_admin($p_id = '') {
		$this->load->model('dbqueries2');
		$where = array('p_id' => $p_id); 
		$data['products'] = $this->dbqueries2->get_product('product',$where);
		
		$this->load->view('header/header');
		$this->load->view('update_product_admin',$data);
		$this->load->view('footer/footer');
	}
	public function update_product($p_id = '') {
		$db = new dbqueries2();
		$where = array('p_id' => $p_id); 
		
		$data = array(
			'p_name' => $this->input->post('p_name'),
			'p_brand' => $this->input->post('p_brand'),
			'p_category' => $this->input->post('p_category'),
			'p_stock' => $this->input->post('p_stock'),
		);
		
		$db->update_p('product', $where, $data);
   
		$this->load->view('formsuccess');
		redirect('db_process/viewproducts','refresh');
	}
	public function update_product_admin($p_id = '') {
		$db = new dbqueries2();
		$where = array('p_id' => $p_id); 
		
		$data = array(
			'p_name' => $this->input->post('p_name'),
			'p_brand' => $this->input->post('p_brand'),
			'p_category' => $this->input->post('p_category'),
			'p_stock' => $this->input->post('p_stock'),
		);
		
		$db->update_p('product', $where, $data);
   
		$this->load->view('formsuccess');
		redirect('db_process/viewproducts_admin','refresh');
	}
	
}
 ?>

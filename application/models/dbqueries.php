<?php
class Dbqueries extends CI_Model{

  const DB_TABLE = 'user';
  const DB_TABLE_PK = 'user_id';
  public $fname;
  public $lname;
  public $email;
  public $password;
  public $status;
  
  public function add_user(){
    $this->db->insert($this::DB_TABLE, $this);
  }

  
  public function login(){
	$status = 0;
	$query = $this->db->get_where('user', array('email' => $this->email, 'password' => $this->password));
	
	
	if ( $query->num_rows() == 1 )
		{
			$status = 1;
	}
	return $status;
  }
  public function view_user(){
    $query = $this->db->get('user');
    return $query->result();
  }
	public function delete_user($table, $where = array()) {
		$this->db->where($where);
		$res = $this->db->delete($table); 
		if($res)
			return TRUE;
		else
			return FALSE;
	}
	public function get_user($table, $where = array()) {
		$query = $this->db->get_where($table, $where);
		return $query->result();
		
	}
	public function update_u($table, $where = array(), $data) {
		$this->db->where($where);
		$this->db->update($table ,$data);
		return true;
	}
}

 ?>

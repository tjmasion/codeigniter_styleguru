<?php
class Dbqueries2 extends CI_Model{
  
  const DB_TABLE = 'product';
  const DB_TABLE_PK = 'p_id';
  public $p_name;
  public $p_brand;
  public $p_category;
  public $p_stock;


  public function add_product(){
    $this->db->insert($this::DB_TABLE, $this);
  }
  public function view_product(){
    $query = $this->db->get('product');
    return $query->result();
  }
	public function delete_product($table, $where = array()) {
		$this->db->where($where);
		$res = $this->db->delete($table); 
		if($res)
			return TRUE;
		else
			return FALSE;
	}
	public function get_product($table, $where = array()) {
		$query = $this->db->get_where($table, $where);
		return $query->result();
		
	}
	public function update_p($table, $where = array(), $data) {
		$this->db->where($where);
		$this->db->update($table ,$data);
		return true;
	}
}

 ?>

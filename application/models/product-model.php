<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer_model extends CI_Model {
	public function getAll(){
	$sql = "SELECT * FROM products ";
    $result = $this->db->query($sql)->result();
    return $result;
		}
	
	public function getAllv2(){
	$sql = $this->db->get('products')->result();
    return $result;
		}
	

	public function getBycodel($cd)
	{
	$sql = "SELECT * FROM products WHERE code='$code'";
    $result = $this->db->query($sql)->result();
    return $result;
		}
	
	public function getBycodelv2($cd)
	{
	$this->db->where('code', $cd);
	$result = $this->db->get('products')->result();
	return $result;
		}

	public function removeBycodel($cd){
	$sql = "DELETE * FROM products WHERE code='$cd'";
    $this->db->query($sql);
		}
}

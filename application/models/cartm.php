<?php


 class cartm extends CI_model{


public function addprod(){

$upload = $this->input->post('upload');
$image =$_FILES["userfile"]["name"];
$data = array(
	'pname'=>$this->input->post('pname'),
	'pprice'=>$this->input->post('pprice'),
	'pquantity'=>$this->input->post('pquantity'),
	'pimage' =>$image 
	);

if(isset($upload)){

 $this->db->insert('addproducts',$data);
}

}

public function getproducts(){
//get products from db and show on home
$query = $this->db->get('addproducts');
return $query->result();

}

public function send_to_cart(){

$btn = $this->input->post('carto');
//$pquantity =$this->input->post('pquantity');
//echo print_r($btn);
if(isset($btn)){
$id =$this->input->post('my_id');
//echo print_r($id);
$pquantity =$this->input->post('quantity');
//$q ="SELECT * FROM `addproducts` WHERE `pid`=$id;";
$query = $this->db->query("SELECT * FROM `addproducts` WHERE `pid`=$id;");
// $this->db->select('*');
// $this->db->from('addproducts');
// $this->db->where('pid', $id);
// $query = $this->db->get();

foreach ($query->result_array() as $value) {
	$name = $value['pname'];
	$price = $value['pprice'];
	$quantity = $value['pquantity'];
	$image = $value['pimage'];


$data=array('name'=>$name,
	'price'=>$price,
	'quantity'=>$pquantity,
	'image'=>$image,
	'pid'=>$id);
$this->db->insert('cart',$data);
}


}


}


public function get_cart(){

$this->db->select('*');
$this->db->from('cart');
$query =$this->db->get();
return $query->result_array();
}



public function reg(){
$save = $this->input->post('save');

$data = array(
	'firstname'=>$this->input->post('fname'),
	'lastname'=>$this->input->post('lname'),
	'email'=>$this->input->post('email'),
	'password'=>$this->input->post('pass')
	);

if (isset($save)){

 $this->db->insert('register',$data);
 redirect('http://[::1]/ci_sc/index.php/carts/signin');
}


}


public function del($id){
$this->db->where('cid', $id);
$this->db->delete('cart');

}





}








?>
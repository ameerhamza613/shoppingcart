<?php


 class carts extends CI_controller{

public function get_products(){
	//take data from database and send to views


$result['data'] =$this->cartm->getproducts();
$this->load->view('cart',$result);


 $this->form_validation->set_rules('pquantity','product Quantity','required');

 if($this->form_validation->run()==false){
 // $result['data'] =$this->cartm->getproducts();
 // $this->load->view('cart',$result);
    $this->cartm->send_to_cart();
    
    //redirect('http://[::1]/ci_sc/index.php/carts/get_products','refresh');
  
 }else{

$this->cartm->send_to_cart();
 // $result['data'] =$this->cartm->getproducts();
 //    $this->load->view('cart',$result);
 }


}






public function sendto_cart(){

   //check validation
//  $this->form_validation->set_rules('pquantity','product Quantity','required');

//  if($this->form_validation->run()==false){
//  // $result['data'] =$this->cartm->getproducts();
//  // $this->load->view('cart',$result);
//     $this->cartm->send_to_cart();
    
//     redirect('http://[::1]/ci_sc/index.php/carts/get_products','refresh');
  
//  }else{

// $this->cartm->send_to_cart();
//  $result['data'] =$this->cartm->getproducts();
//     $this->load->view('cart',$result);
//  }



}

public function registers(){

$this->form_validation->set_rules('fname','First Name','required');
$this->form_validation->set_rules('lname','Last Name','required');
$this->form_validation->set_rules('email','Email','required');
$this->form_validation->set_rules('pass','Password','required');

if($this->form_validation->run()==false){
$this->load->view('register');
}
//$this->load->model('cartm');
$this->cartm->reg();
	
}

public function signin(){
	$this->load->view('signin');
}

public function addproducts(){

 
$this->form_validation->set_rules('pname','Product Name','required');
$this->form_validation->set_rules('pprice','Product Price','required');
$this->form_validation->set_rules('pquantity','Product Quantity','required');
//$this->form_validation->set_rules('pimage','Product Image','required');


if($this->form_validation->run()==false){

    $this->load->view('addproducts');
   //echo "hamza";
}
else{

                // $config['upload_path']   = '.uploads/'; 
                // $config['allowed_types'] = 'gif|jpg|png'; 
                // $this->upload->initialize();

                // if ( $this->upload->do_upload('userfile') )
                // {
                //     //print_r($this->upload->data());die;
                //     $data = array( 
                //  'pname'=> $this->input->post('pname'),
                //   'pprice'=> $this->input->post('pprice'),
                //   'pquantity'=> $this->input->post('pquantity'),
                //    'pimage'=> $this->upload->data('file_name')  
                //     );
                //     echo print_r($data);
                     $this->cartm->addprod();
                     redirect('http://[::1]/ci_sc/index.php/carts/addproducts');
               // }
                     
    }



}//end of else


public function orders_in_cart(){

$data['hamza'] =$this->cartm->get_cart();
$this->load->view('cart_order',$data);

}

public function edit(){

}

public function delete($id){
$this->cartm->del($id);
$data['hamza'] =$this->cartm->get_cart();
$this->load->view('cart_order',$data);
}






	
}







?>
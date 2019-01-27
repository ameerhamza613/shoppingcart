<?php

require(APPPATH.'views/templates/header.php');
// $g = new header();
// $g->title="CART ORDER";
// $g->display();

class b extends header
{

	public function styl(){
		?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/table.css">
		<?php
	}

public function display(){

echo "<!DOCTYPE html>\n<html>\n";
echo "<head>\n";
$this->title();
$this->Styl();
echo "</head>\n<body>";
$this->heade();
$this->navbar();
//echo "</body>\n</html>";

}


}
$c = new b();
$c->title="CART ORDER";
$c->display();

?>


<table id="customers">

      <tr>
        <th >Name</th>
        <th >Price</th>
        <th >Quantity</th>
        <th colspan="2" >Action</th>
      </tr>
<?php
foreach ($hamza as $ameer) 
{
	
?>    
    
      <tr>
        <td ><?php echo $ameer['name'] ?></td>
        <td ><?php echo $ameer['price'] ?></td>
        <td ><?php echo $ameer['quantity'] ?></td>
        <td ><a href="<?php echo site_url('carts/edit').'/'.$ameer['cid'];?> " id="btn1">Edit</a></td>
        <td ><a href="<?php echo site_url('carts/delete').'/'.$ameer['cid'];?> " id="btn2">Delete</a></td>
      </tr>

<?php
}
?>

</table>



<?php

require(APPPATH.'views/templates/footer.php');

?>
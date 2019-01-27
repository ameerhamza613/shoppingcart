<?php

require(APPPATH.'/views/templates/header.php');
$a = new header();
$a->display();

?>


<div class="container-fluid">
	

<div class="row mt-3 ml-4 mb-4" >
	<?php foreach ($data as $k) {
	$id=$k->pid;
?>
<?php echo validation_errors(); ?>
<div class="col-lg-3 col-md-3 col-sm-12">
<?php echo form_open('carts/get_products','',$id);?> 

<div class="card ml-4  mr-3 ">

<h5 class="card-title " style="font-family:verdana;padding:10px;color:white;background-color:green"><?php echo $k->pname; ?></h5>
<div class="card-body "><img src="<?php echo $k->pimage;?>" style="width:220px;height:200px"></div>
<h6 style="margin:0px 0px 3px 16px">Price: <?php echo $k->pprice;?> &#8360;</h6>
<input type="text" class="form-control" name="quantity" placeholder="Add Quantity">
<input type="hidden" name="my_id" value="<?php echo $k->pid;?>"/>
<div class="d-flex">
  <button type="submit" class="btn btn-success flex-fill" name="carto" >ADD TO CART</button>
</div>



</div>
</form>
</div>
<?php }?>
</div>


</div>

<?php

require(APPPATH.'/views/templates/footer.php');


?>
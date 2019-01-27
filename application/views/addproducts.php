<?php
require(APPPATH.'views/templates/header.php');
$b = new header();
$b->title="ADD PRODUCTS";
$b->display();
?>
<?php echo validation_errors(); ?>

<div class="frmrg">
<?php echo form_open_multipart('carts/addproducts'); ?>
<p>ADD PRODUCTS</p>
<div class="form-group">
<label >Product Name</label>
<input type="text" class="form-control" id="pname" placeholder="Product Name" name="pname">
</div>

<div class="form-group">
<label >Product Price</label>
<input type="text" class="form-control" id="ppid" placeholder="Product Price" name="pprice">
</div>

<div class="form-group">
<label >Product Quantity</label>
<input type="text" class="form-control" id="pquan" placeholder="Product Quantity" name="pquantity">
</div>

<div class="form-group">
<label >Product Image</label>
<input type="file" class="form-control;btn btn-default btn-file;"  placeholder="Product image" name="userfile">
</div>

<button type="submit" class="btn btn-primary" id="bt" name="upload">Submit</button>

</form>
</div>

<?php

require(APPPATH.'views/templates/footer.php');

?>
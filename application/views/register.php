<?php
require(APPPATH.'views/templates/header.php');
$b = new header();
$b->title="Register";
$b->display();
?>

<?php echo validation_errors(); ?>

<div class="frmrg">
<?php echo form_open('carts/registers'); ?>
<p>REGISTER HERE</p>
<div class="form-group">
<label >First Name</label>
<input type="text" class="form-control" id="fid" placeholder="First Name" name="fname">
</div>

<div class="form-group">
<label >Last Name</label>
<input type="text" class="form-control" id="lid" placeholder="Last Name" name="lname">
</div>

<div class="form-group">
<label >Email</label>
<input type="email" class="form-control" id="eid" placeholder="Email" name="email">
</div>

<div class="form-group">
<label >Password</label>
<input type="password" class="form-control" id="pid" placeholder="PASSWORD" name="pass">
</div>

<button type="submit" class="btn btn-primary" id="bt" name="save">Submit</button>

</form>
</div>

<?php

require(APPPATH.'views/templates/footer.php');

?>
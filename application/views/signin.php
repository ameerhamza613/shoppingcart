<?php
require(APPPATH.'views/templates/header.php');
$c = new header();
$c->title = "SIGN IN";
$c->display();
?>

<div class="frmlg">
<form action="" method="post">
<p>SIGNIN HERE</p>
<div class="form-group">
<label for="email">EMAIL</label>
<input type="email" name="email" placeholder="Email" class="form-control" id="eml">
</div>

<div class="form-group">
<label for="password">password</label>
<input type="password" name="password" placeholder="password" class="form-control" id="pswd">
</div>

<button type="submit" class="btn btn-primary" id="btn">LOG IN</button>
</form>
</div>



<?php

require(APPPATH.'views/templates/footer.php');

?>
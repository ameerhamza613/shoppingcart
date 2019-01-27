<?php

 class header{



public $title;




public function __set($name,$value){
	$this->$name = $value;
}

// public function __get($name){
// 	return $value;
// }

//$title='Cart';

public function display(){

echo "<!DOCTYPE html>\n<html>\n";
echo "<head>\n";
$this->title();
$this->dispStyles();
echo "</head>\n<body>";
$this->heade();
$this->navbar();
//echo "</body>\n</html>";

}

public function title(){
	echo "<title>".$this->title."</title>";
}

public function dispStyles(){
?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/cart.css">
<?php
}


public function heade(){
	?>

<div class="head">
<h2> Shopping Cart </h2>
</div>

	<?php
}


public function navbar(){

?>

<ul class="nvbar">
<li><a href="#">REGISTER</a></li>
<li><a href="#">SIGN IN</a></li>
<li><a href="#">CART</a></li>
<li><a href="#">LOGOUT</a></li>
</ul>

<?php
}


}




?>
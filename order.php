<?php 

$conn = mysqli_connect("localhost", "root", "", "orderpages");
if($conn){
//echo 'order pages';
}else{
	echo 'not connced';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/order.css">
</head>
<body>
    <h2>আমরা সারা বাংলাদেশ মাএ ৬০ টাকা  ডেলিভারি করে থাকি ।</h2>

	<form action="order.php" method="POST">
		
		<label for="name">Full Name</label>
		<input type="text" name="cat_name" placeholder="Full Name" >

		<label for="number">Mobile Number</label>
		<input type="text" name="cat_number" placeholder="Mobile Number" >

		<label for="address">Address</label>
		<input type="text" name="cat_address" placeholder="Address" ></input>
		<label for="productno">How many would you like to order?</label>
		<input type="text" name="cat_productno" placeholder="How many would you like to order?">

		<input type="submit" value="Order" name="cat_order" >

	</form>
<?php
if(isset($_POST['cat_order'])){
	$cat_name=$_POST['cat_name'];
	$cat_number=$_POST['cat_number'];
	$cat_address=$_POST['cat_address'];
	$cat_productno=$_POST['cat_productno'];

$query ="INSERT INTO order_info(c_name, c_number, c_address, c_productno) VALUES ('$cat_name','$cat_number','$cat_address','$cat_productno')";
$result=mysqli_query($conn, $query);
if($result){
header('Location:thankyou.html');
}else{
	echo 'insert failed';
}


}


?>
   
</body>
</html>
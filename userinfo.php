<?php 

$conn = mysqli_connect('localhost', 'root');

if ($conn) {
	echo "Connection Successful";
}
else{
	echo "No connection";
}

mysqli_select_db($conn,'kopdatabase');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = "insert into userinfo1 (user, email_id, mobile, comments) values ('$user', '$email', '$mobile', '$comments')";

echo '$query';

mysqli_query($conn,$query);

header('location:index.php');

 ?>

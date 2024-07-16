<?php
// if(isset($_post['submit'])){
// 	$lname = $_post['lname'];
// 	$friends = $_post['friends'];
// 	echo "Your name is: $lname <br>";
// 	echo "Your comment is: $friends";
// }

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$name = $_POST['uname'];
	$comment = $_POST['friends'];
	echo "Name: $name <br>";
	echo "Comment: $comment";
}
?>
<?php
if(isset($_post['submit'])){
	$lname = $_post['lname'];
	$friends = $_post['friends'];
	echo "Your name is: $lname <br>";
	echo "Your comment is: $friends";
}
?>
<?php 
/**
 * Processing forms
 */

//submitting form
if(isset($_POST['submit'])){

	$fname = trim($_POST['firstname']);
	$lname = trim($_POST['lastname']);
	$email = trim($_POST['email']);


	if(empty($fname) || empty($lastname) || empty($email)){

		echo "<div class='error-msg'>Please fill all fields</div>";
	}


}
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Signup Page</title>

	

<div id="container">
	<h1>Sign Up</h1>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign UP Page</title>

	

<div id="container">
	<h1> </h1>

	<?php echo form_open('main/signup_validation');  

	echo validation_errors();

	echo "<p> Email:";
	echo form_input('email', $this->input->post('email'));
	echo "</p>";

	echo "<p> Password:";
	echo form_password('password');
	echo "</p>";


	echo "<p> Confirm Password:";
	echo form_password('cpassword');
	echo "</p>";


	echo "<p>";
	echo form_submit('signup_submit', 'Sign up');
	echo "</p>";
	echo form_close(); 





	?>
		 
		



</div>

</body>
</html>


</div>

</body>
</html>
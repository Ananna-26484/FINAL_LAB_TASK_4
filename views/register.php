<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<body>

	<form action="../php/regCheck.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" id="username" name="username" onkeyup="remover()" onblur="blurmsg()"></td>
					<td id="nameMsg"> </td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" id="email" name="email" onkeyup="remover()" onblur="blurmsg()"></td>
					<td id="emailMsg"> </td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="button" name="submit" value="Submit" onclick="f1()">
						<a href="login.php" style="display: none;">login</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	<script type="text/javascript">
		function f1(){
			document.getElementsByTagName('a')[0].style.display = 'inline';
		}
		function remover(){
			document.getElementById('nameMsg').innerHTML = "";
			document.getElementById('emailMsg').innerHTML = "";
		}

		function blurmsg(){

			if(document.getElementById('email').value == ""){
				document.getElementById('emailMsg').innerHTML = "* this field is required!";
			}
			else if(document.getElementById('username').value == ""){
				document.getElementById('nameMsg').innerHTML = "* this field is required!";
			}
		}
	</script>
</body>
</html>
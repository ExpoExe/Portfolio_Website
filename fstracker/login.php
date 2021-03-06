<?php

include 'core/init.php';
logged_in_redirect();
include 'includes/head.php'; 

$username = $_POST['username'];
$password = $_POST['password'];

if(!empty($_POST)){
	
	if(empty($username) || empty($password)){
		$errors[] = 'Please enter a username and password';
	}else if(user_exists($username) === false){
		$errors[] = 'We can\'t find that username. Have you registered?';
	}else{
		$login = login($username, $password);
				
		if($login === false){
			$errors[] = 'Incorrect username or password';
		}
		else{
			$_SESSION['user_id'] = $login;
			$_SESSION['username'] = $username;

			sleep(1);
			echo "<script> location.replace('main.php'); </script>";
			exit();			
		}
	}	
}else{
	$errors[] = 'No Data Recieved';
	}

?>

<body>
	<div id="intro">
        <h1>Hello, Welcome to</h1>
        <h2>Field Service Tracker</h2>
        <div id="login_details">
        	<form name="login_form" method="post" action="login.php">
				<table border="0">
                  <tbody>
                    <tr>
                      <td>Username:</td>
                      <td><input name="username" type="text"></td>
                    </tr>
                    <tr>
                      <td>Password:</td>
                      <td><input name="password" type="password"></td>
                    </tr>
                  </tbody>
				</table>
            </form>
        </div>
        <div id="error_container">
        <?php 
		
		if(!empty($errors)){
			echo output_errors($errors); 
		}
		
		?>
        </div>
        <div onClick="document.forms['login_form'].submit();" id="login">Login</div>
        
        <div id="registration_container">
        	<p>Don't have an account yet?<br>
            <span onClick="location.href='register.php'" id="register_here" class="fake-link">Register</span></p>
        </div>
    </div>
</body>
</html>
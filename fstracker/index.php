<?php 
include 'core/init.php';
logged_in_redirect();
include 'includes/head.php'; 
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
        <div onClick="document.forms['login_form'].submit();" id="login">Login</div>
        <div id="registration_container">
        	<p>Don't have an account yet?<br>
            <span onClick="location.href='register.php'" id="register_here" class="fake-link">Register</span></p><br>
        </div>
    </div>
</body>
</html>

<?php
$id;

// 1 = login
$status = 1;

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.35.0/codemirror.css">
	<link rel="stylesheet" type="text/css" href="https://codemirror.net/addon/lint/lint.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.35.0/codemirror.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jshint/r07/jshint.js"></script>
	<script src="https://codemirror.net/mode/javascript/javascript.js"></script>
	<script src="https://codemirror.net/addon/lint/lint.js"></script>
	<script src="https://codemirror.net/addon/lint/javascript-lint.js"></script>
	<script src="script.js"></script>
	<title>Learn Javascript in Dutch!</title>
</head>
<body>
	<?php
	if ($status = 1){
		?>
		<div class="login">
			<div class="loginbox">
				<form id="login" autocomplete="off">
					<p>UserID</p>
					<input class="logininput" type="int" name="userID">
					<p>Password</p>
					<input class="logininput" type="password" name="password"><br>
					<input id="submitlogin" type="submit" value="Login">
				</form>		
			</div>
		</div>

		<?php
	} else {

	}
	?>
</body>
</html>


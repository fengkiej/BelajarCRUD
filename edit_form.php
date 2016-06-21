<?php
	$user = $_POST['username'];
	$pass = $_POST['password'];
?>
<html>
<body>
<form action="edit_action.php" method="post">
	username: <?php echo $user ?> <input name='username' type='hidden' value='<?php echo $user ?>'> <br/> <br/>
	current password: <input name='curPassword' type='password'> <br/> <br/>
	new password: <input name='newPassword' type='password'> <br/> <br/>
	<button name='send' type='submit'>change</button>
</form>
</body>
</html>
<?php
	$user = $_POST['username'];
	$pass = $_POST['password'];
?>

<html>
<body>
<form action="delete_action.php" method="post">
	username: <?php echo $user; ?> <input name='username' type='hidden' value='<?php echo $user ?>'> <br/> <br/>
	password: <?php echo $pass; ?><input name='password' type='hidden' value='<?php echo $pass ?>'> <br/> <br/>
	<button type='submit'>delete</button>
</form>
</body>
</html>
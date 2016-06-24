<?php
$jsonString = 'http://belajarrest.local/users/';
$jsonData = file_get_contents($jsonString);
$jsonObj = json_decode($jsonData, true);

$userDatas = $jsonObj["users"];
?>
<html>
<body>
<table>
	<tr>
	<th>No</th>
	<th>Username</th>
	<th>Password</th>
	<th>Actions</th>
	</tr>

	<?php
		$i = 1;
		foreach($userDatas as $user){
			echo "<tr>
					<td>{$i}</td>
					<td>{$user["user"]}</td>
					<td>{$user["pass"]}</td>
					<td> 	
							<form action='edit_form.php' method='post' style='display: inline;'>
								<input name='username' type='hidden' value='{$user["user"]}''>
								<button>edit</button>
							</form>

							<form action='delete_form.php' method='post'style='display: inline;'>
								<input name='username' type='hidden' value='{$user["user"]}'>
								<input name='password' type='hidden' value='{$user["pass"]}'>
								<button>delete</button>
							</form>
					</td>
					</tr>";
			$i++;
		}
	?>
</table>
<form action="create_form.php">
	<button>create new</button>
</form>
</body>
</html>
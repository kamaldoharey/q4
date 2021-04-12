<?php include_once("config.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>

<?php

session_start();

if (isset($_POST['submit'])) {

	$sql = "SELECT * FROM q4t where username='" . $_POST['n1'] . "' and passwo='" . $_POST['n2'] . "' ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo   $row["username"] . " " . $row["passwo"] . "<br>";
			// echo "working";
			$_SESSION['sid'] = $row["sno"];
		}
	} else {
		echo "0 results";
		session_unset();
		$_SESSION['sid'] = NULL;
	}
}

if (isset($_SESSION['sid'])) {
	header("Location:login.php");
}
?>

<body>
	<h1>Login</h1>
	<table class="index-table">
		<form method="POST">
			<tr>
				<td><label>E-mail</label></td>
				<td><input type="text" name="n1" required></td>
			</tr>
			<tr>
				<td><label>PASWORD</label></td>
				<td><input type="password" name="n2"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit"></td>
			</tr>
		</form>
	</table>
	<a href="reg.php">Register</a>
	<div class="demo1"></div>
	<div class="demo2"></div>
</body>
<script src="script.js">
</script>

</html>
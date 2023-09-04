<?php
	include 'include/koneksi.php';

	error_reporting(0);

	session_start();

	if(isset($_SESSION['user'])){
		header("location: main.php");
	}

	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$pass = $_POST['pass'];

		$sql = "SELECT * FROM login WHERE id='$id' and pass ='$pass' ";
		$result = mysqli_query($koneksi,$sql);

		if($result->num_rows > 0){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['id'] = $row['user'];
			header("Location: main.php");
		}else{
			echo "<script>alert('ID atau Password salah')</script>";
		}
	}
?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
		<link href="css/stylelog.css" rel="stylesheet" type="text/css" >
		<title>Login</title>
	</head>

	<body>
		<div class ="container">
			<form action="" method="POST" class="login-id">
				<p class="login-text" style="font-size: 2rem; font-weight: 800">Login</p>
			<div class="input-group">
				<input type="id" placeholder="ID" name="id" value="<?php echo $_POST['id']; ?>"required>
			</div>
			<div class="input-group">
				<input type="pass" placeholder="Password" name="pass" value="<?php echo $_POST['pass']; ?>"required>
			</div>
			<div class="input-group">
				<button class ="btn" name="submit">Login</button>
			</div>
	</body>

</html>
<?php  
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width, initial-scale=1">
	<title>Login admin  </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="bg-login">
	<div class="box-login">
		<center><img src="image/Logo.jpeg" class="logo_log"></center>
		<h2>Login Admin </h2><br>
		<form action="" method="POST">
			<input type="text" name="user" placeholder="Username" class="input-control">
			<input type="password" name="pass" placeholder="Password" class="input-control">
			<input type="submit" name="submit" value="Login " class="button-login" >
			
		</form>
		</div>

<?php 
	if(isset($_POST['submit'])){
		include 'db.php';
		$user = mysqli_real_escape_string($conn, $_POST['user']);
		$pass = mysqli_real_escape_string($conn, $_POST['pass']);

		$cek = mysqli_query($conn, "SELECT * FROM admin WHERE username ='".$user."' AND password ='".MD5($pass)."'");
        if(mysqli_num_rows($cek) > 0){
            $d = mysqli_fetch_object($cek);
            $_SESSION['status_login'] = true;
            $_SESSION['a_global'] = $d;
            $_SESSION['id'] = $d->admin_id;
            	
        echo '<script>window.location="dashboard.php"</script>';
            }else echo '<script>alert("username atau password yang anda masukkan salah!")</script>';
		
      }
	 ?>
</body>
</html>
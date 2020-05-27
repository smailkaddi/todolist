<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'multi_login');

	if (!$db) {

		die("Connection failed: ");
        }

    $username = "";
    $email = "";
    $password = "";
	$id = 0;
	$update = true;
   
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM users WHERE id=$id");
		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
            $username = $n['username'];
            $email = $n['email'];
            $password = $n['password'];

           
 
          
        }
        print_r ($record) ;  
    }  
     if (isset($_POST['update'])) {
        $id = $_POST['id'];
	   $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
      mysqli_query($db, "UPDATE users SET username='$username', email='$email',password='$password' WHERE id=$id");
      $_SESSION['message'] = "Address updated!"; 
      header('location: profile.php');
	}
    
	
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>hello world</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>


<form method="post" action="profile.php">

<div class="input-group">
    <label>Username</label>
    <input type="text" name="username" value="<?php echo $username; ?>">
</div>
<div class="input-group">
    <label>Email</label>
    <input type="email" name="email" value="<?php echo $email; ?>">
</div>
<div class="input-group">
    <label>Password</label>
    <input type="password" name="password" value ='<?php echo $password; ?>'>
</div>
<div class="input-group">
    <label>Confirm password</label>
    <input type="password" name="password_2">
</div>
<?php if ($update == true): ?>
			<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
        <?php else: ?>

        <?php endif ?>
		<button class="btn" type="submit" name="save" >Save</button>
        </div>
</form>


</body>
</html>


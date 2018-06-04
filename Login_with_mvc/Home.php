<?php 
	include 'mvc-FRAMEWORK/Library/Session.php';/*session file included*/
	Session::init();
?>

<?php  /*mvc framework setup*/	
	include 'mvc-FRAMEWORK/Configuration/config.php';/*database info file included*/
	include 'mvc-FRAMEWORK/Library/Database.php';/*database qry file included*/

	$db = new Database();/*object of Database Class*/	
?>
<?php /*login machanism*/
	if(isset($_POST['login']))
	{
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		
		if(empty($email) OR empty($password))
		{
			$msg = '<span style="color:red;">Field Must Not Empty !</span>';
		}/*empty check end*/
		else
		{
			$query = "SELECT * FROM tb_user WHERE email='$email' AND password='$password' AND status=1"; 
			$result = $db->select($query);
			if($user = $result->fetch_assoc()){
				Session::set('email',$user['email']);
				Session::set('password',$user['password']);
				
				Header('Location:home.php');
			}else{
				$msg = '<span style="color:red;">Invalid Username Or Password !</span>';
			}
			
		}/*Login function end*/
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login|MVC</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="container body">			
<!--==================================================-->
	<h1 style="color:white;">
		Home Page <small><?php echo Session::get('email'); ?></small>
		<a href="index.php" class="btn btn-danger pull-right">Logout</a>
	</h1>
	<hr/>
	<center>
		<span class="glyphicon glyphicon-home home1"></span>
		<span class="glyphicon glyphicon-home home2"></span>
		<span class="glyphicon glyphicon-home home1"></span>
	</center>
<!--==================================================-->
			
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
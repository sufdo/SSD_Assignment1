<html>
<head>
<link href="login.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<title>Synchronizer Token Pattern </title>
<body>
<h1>Login Page</h1>
    <?php 
        if(isset($_GET['fail']) && $_GET['fail'] == 1){
            echo "<h1 style='color:red' > Username or password is incorrect </h1>";
        } else if (isset($_GET['fail']) && $_GET['fail'] == 2) {
            echo "<h1 style='color:red'>Invalid token </h1>";
        }
    ?>

  <form  method="post" action="submitfunction.php">
         Username : <input type="text" name="username"></br></br>      
		 Password : <input type="password" name="password"></br></br>
		 <input type="submit" name="Login" value="Login">
   </form>
            

	</body>
	</html>
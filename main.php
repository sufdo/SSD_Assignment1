<?php 
  session_start();
	if(isset($_SESSION['username'])){
				
	}else{
		header("Location:login.php");	
	}
?>
<html>

<head>
    <link href="main.css" rel="stylesheet">

  <title>Homepage</title>
</head>

<body>
      <h1>Main Page - Welcome... <?php echo $_SESSION["username"]; ?></h1>
      <form method="POST" action="page.php">
      <input type="hidden" name="token" id="token" value = <?php if(isset($_SESSION['csrf_token']))echo $_SESSION['csrf_token'];?> >
      <input type="submit" class="btn " value="CLICK HERE" />
      </form>

</div>

</body>
</html>
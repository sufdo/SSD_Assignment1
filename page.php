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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <title>User - Profile</title>
  <script>
	$(document).ready(function(){
    
    var token = document.getElementById("token").value;
    $.ajax({
        type: 'POST',
        url: 'CheckToken.php',
        data: {'token': token},
        
        success: function (data) {
            if(data == 'false'){
              window.location = "";
            } else {
              
            }
        }
      }); 
	});
</script>   
</head>

<body>

		<h1>  You have valid Token!  </h1>
    
    <input id="token" type="hidden" value = <?php echo $_POST['token'] ?> />
	</body> 
</html>
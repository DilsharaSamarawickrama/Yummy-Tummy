<?php 
    
    session_start();

    require_once("php/connection.php");
?>
<html>
<head>
<title>sign up</title>
<link rel="stylesheet" href="style/style2.css">
<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">     
<meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet"> 
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="jquery-3.4.1.slim.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> 

</head>
    
    
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-danger">
            <a class="navbar-brand text-white" style="font-family: 'Kaushan Script', 'cursive';">YummyTummy</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#links"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-center" id=links>
                <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="home.php">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="aboutUs.php">About us</a></li>
                <?php 
                        if(isset($_SESSION['email'])){
							echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"cart.php\">Cart</a></li>";	
							echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"logout.php\">Log Out</a></li>";
							echo "<li class=\"nav-link active\">".$_SESSION['first_name']."</li>";
							echo "</ul>";
                        }
                        else{
							echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"log.php\">Log In</a></li>";	
							echo "<li class=\"nav-item\"><a class=\"nav-link active\" href=\"Sign.php\">Sign Up</a></li>";	
							echo "<li class=\"nav-link active\">Guest</li>";
							echo "</ul>";
                           
                       }
                        
                    ?>
            </div>
            
        </nav>


    
   <div class="card mx-auto mt-5 align-self-center mb-5" style="width:18rem;box-shadow: 10px 10px 10px black;">
			             <div class="card-body">
				            <form method="POST" action="php/validatesign.php">
                                 <div class="form-group">
								    <label class="col-form-label">First Name</label>	
								    <input type="text" name="first_name" class="form-control">
							     </div>
                                <div class="form-group">
								    <label class="col-form-label">Last Name</label>	
								    <input type="text" name="last_name" class="form-control">
							     </div>
                                <div class="form-group">
								    <label class="col-form-label">E-mail</label>	
								    <input type="text" name="email" class="form-control">
							     </div>
                                <div class="form-group">
								    <label class="col-form-label">Password</label>	
								    <input type="password" name="password" class="form-control">
                                </div>
                                 <div class="form-group">
								    <label class="col-form-label">Retype Password</label>	
								    <input type="password" name="re_password" class="form-control">
                                </div>
                                <input type="submit" name="signup" value="SignUp" class="btn btn-danger mb-1">
                                </form>
                                <a href="sign.html" class="sign">Already have an account!</a>
                            </div>
		                  </div>
    
    
</body>
</html>
<?php mysqli_close($connection);?>

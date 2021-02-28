<?php    
    session_start();

    require_once("php/connection.php");
?>
<html>
	<head>
    		<meta charset="utf-8">
    		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet"> 
    		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    		<link rel="stylesheet" href="css/bootstrap.css">
    		<link rel="stylesheet" href="style/style4.css">
    		<script type="text/javascript" src="jquery-3.4.1.slim.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script> 

    		<script>
			$(document).ready(function(){
				$("#sec1").click(function(){
					$(".foodmenu").toggle(2000);
		    		});
			});   
			
			$(document).ready(function(){
				$("#sec2").click(function(){
					$(".drinkmenu").toggle(2000);
		    		});
			});
			   
			$(document).ready(function(){
				$("#sec3").click(function(){
					$(".desertmenu").toggle(2000);
		    		});
			});
    		</script>
    	</head>
    	<body>   
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger">
            <a class="navbar-brand text-white" style="font-family: 'Kaushan Script', 'cursive';">YummyTummy</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#links"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-center" id=links>
                <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="home.php">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="aboutUs.php" >About us</a></li>
                 
            
                
                    <?php 
                        if(isset($_SESSION['email'])){
							echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"cart.php\">Cart</a></li>";	
							echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"logout.php\">Log Out</a></li>";
							echo "<li class=\"nav-link active\">".$_SESSION['first_name']."</li>";
							echo "</ul>";
                        }
                        else{
							echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"log.php\">Log In</a></li>";	
							echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"sign.php\">Sign Up</a></li>";	
							echo "<li class=\"nav-link active\">Guest</li>";
							echo "</ul>";
                           
                       }
                        
                    ?>
                </ul>
            </div>
            
        </nav>
	  	<div class="container-fluid">
			<!--Food Menu-->
			<div class="section-1-foodmenu mb-3 mt-3" id=sec1>
				<center>
					<h1 class="text-center text-white t_align2 display-4 text-shadow">Foods</h1>
				</center>
			</div>
			<div class="foodmenu">
				<?php require_once("food_items.php");?>
			</div>
			
			<!--Drinks Menu-->
			<div class="section-1-foodmenu mb-3 mt-3" id=sec2>
		                <center>
		                	<h1 class="text-center text-white t_align2 display-4 text-shadow">Drinks</h1>
		                </center>
		    	</div>
		    	<div class="drinkmenu">
		    		<?php require_once("drinks.php")?>
		        </div>
		        
		        <!--Dessert Menu-->
		    	<div class="section-1-foodmenu mb-3 mt-3" id=sec3>
		        	<center>
		                	<h1 class="text-center text-white t_align2 display-4 text-shadow">Desserts</h1>
		                </center>
		    	</div>
		    	<div class="desertmenu">
		    		<?php require_once("dessert.php")?>
		        </div>
		        
		        
		    	<div class="section-3 mb-3">
		                <center>
		                    <h1 class="text-center text-white t_align2 display-4 text-shadow">Contact Us</h1>
		     		</center>
		                <div class="contactUs">
		                    	<h4 class="text-center text-success">Address</h4>
		                        	<p class="text-center text-info">No.47,Hawlok,Colombo 9</p>
		                    	<h4  class="text-center text-success">Phone</h4>
		                         	<p class="text-center text-info">0112 3456 234</p>
		                    		<h4  class="text-center text-success">E-mail</h4>
		                         <p class="text-center text-info">HameeshaRantharu@gmail.com</p>
		                </div>
		    	</div>            
	    	</div>
    	</body>
</html>
<?php mysqli_close($connection);?>

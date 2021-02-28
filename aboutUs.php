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
    
    </head>
    
    <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger">
            <a class="navbar-brand text-white" style="font-family: 'Kaushan Script', 'cursive';">YummyTummy</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#links"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-center" id=links>
                <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="home.php">Menu</a></li>
                <li class="nav-item"><a class="nav-link active" href="aboutUs.php" >About us</a></li>
                <?php 
                        if(isset($_SESSION['email'])){
				echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"cart.php\">Cart</a></li>";	
				echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"logout.php\">Log Out</a></li>";
				echo "<li class=\"nav-link active\">".$_SESSION['first_name']."</li>";
				echo "</ul>";
                        }
                        else{
				echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"log.php\">Log In</a></li>";	
				echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"Sign.php\">Sign Up</a></li>";	
				echo "<li class=\"nav-link active\">Guest</li>";
				echo "</ul>";
                           
                       }
                        
                    ?>
            </div>
            
        </nav>
       
        
        <div class="container-fluid mt-3 ">
            
            <div class="row">
                <div class="col-12">
                    <div class="section-1">
                        
                            <h1 class="text-center text-white display-4 text-shadow t_align">Nobody Does It Better...</h1>
                       
                     </div> 
                </div>        
             </div>    
              
                    
            <div class="row mt-3">
                
                    <div class="col-12 col-sm-6 col-md-3 mb-2">
                        <div class="card">
 			                <img class="card-img-top  card-img" src="image/abt1.jpg">
			                     <div class="card-body">
				                    <h5 class="card-title">Feel the Warm Service</h5>
				                        <p class="card-text">to do is Haha.com welcomes you share videos with friends and have fun.share events happen in the university,share franks,show your talents,become famous</p>
			                     </div>
			                     <div class="card-footer">
				                        <small class="text-muted">last update 3 min ago</small>
			                     </div>
		                  </div>
                    </div> 
   
                    <div class="col-12 col-sm-6 col-md-3 mb-2">
                        <div class="card">
 			                <img class="card-img-top  card-img" src="image/abt2.jpg">
			                     <div class="card-body">
				                    <h5 class="card-title">Come and Enjoy with Your Family members</h5>
				                        <p class="card-text">to do is Haha.com welcomes you share videos with friends and have fun.share events happen in the university,share franks,show your talents,become famous</p>
			                     </div>
			                     <div class="card-footer">
				                        <small class="text-muted">last update 3 min ago</small>
			                     </div>
		                  </div>
                    </div> 
                    
                    <div class="col-12 col-sm-6 col-md-3 mb-2">
                        <div class="card">
 			                <img class="card-img-top  card-img" src="image/abt3.jpg">
			                     <div class="card-body">
				                    <h5 class="card-title">Choose your Taste from our Buffet</h5>
				                        <p class="card-text">to do is Haha.com welcomes you share videos with friends and have fun.share events happen in the university,share franks,show your talents,become famous</p>
			                     </div>
			                     <div class="card-footer">
				                        <small class="text-muted">last update 3 min ago</small>
			                     </div>
		                  </div>
                    </div> 
                    
                    
                    <div class="col-12 col-sm-6 col-md-3 mb-2">
                        <div class="card">
 			                <img class="card-img-top  card-img" src="image/abt4.jpg">
			                     <div class="card-body">
				                    <h5 class="card-title">Select Your Family Pack</h5>
				                        <p class="card-text">to do is Haha.com welcomes you share videos with friends and have fun.share events happen in the university,share franks,show your talents,become famous</p>
			                     </div>
			                     <div class="card-footer">
				                        <small class="text-muted">last update 3 min ago</small>
			                     </div>
		                  </div>
                    </div>    
                 
                    
            </div>
                
                    <div>
                        <h1 class="display-4 text-center text-middle text-shadow" style="margin-top:5vh;margin-bottom: 5vh; ">"People Who Love To Eat Are Always The Best People"
                        <p class="lead text-right text-center">-Julia Child-</p>
                        </h1>
                    </div>
                    <div class="section-2">
                        <div class="carousel slide carousel-fade" data-ride="carousel" id="carousel2">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel2" data-slide-to="0"></li>
                                <li data-target="#carousel2" data-slide-to="1"></li>
                                <li data-target="#carousel2" data-slide-to="2"></li>
                                <li data-target="#carousel2" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                            
                                <div class="carousel-item active" data-interval="2000">
                                    <img src="pic/php18.jpg" class="d-block w-100" style="height: 60vh; background-size: cover;">
                                </div>
                                <div class="carousel-item " data-interval="2000">
                                    <img src="pic/php15.jpg" class="d-block w-100" style="height: 60vh;">
                                </div>
                                <div class="carousel-item " data-interval="2000">
                                    <img src="pic/php7.jpg" class="d-block w-100" style="height: 60vh;">
                                </div>
                                <div class="carousel-item " data-interval="2000">
                                    <img src="pic/php14.jpg" class="d-block w-100" style="height: 60vh;">
                                </div>
                                
                            </div>
                            <a class="carousel-control-prev" href="#carousel2" data-slide="prev">
				                <span class="carousel-control-prev-icon"></span>
			                 </a>
			                 <a class="carousel-control-next" href="#carousel2" data-slide="next">
				                <span class="carousel-control-next-icon"></span>
			                 </a>
                        </div>
                    
                    </div>
                    
                    
                <div class="mb-3">
                        <h1 class="display-4 text-center text-middle text-shadow" style="margin-top:5vh;margin-bottom: 5vh; ">
                            Our Team
                        </h1>
                </div>    
                  <div class="row mt-3 mb-3">
                
                    <div class="col-12 col-sm-6 col-md-3 mb-2">
                        <div class="card">
 			                <img class="card-img-top  card-img" src="image/img14.jpg">
			                     <div class="card-body">
				                    <h5 class="card-title">Varity of Deserts</h5>
				                        <p class="card-text">to do is Haha.com welcomes you share videos with friends and have fun.share events happen in the university,share franks,show your talents,become famous</p>
			                     </div>
			                     
		                  </div>
                    </div> 
   
                    <div class="col-12 col-sm-6 col-md-3 mb-2">
                        <div class="card">
 			                <img class="card-img-top  card-img" src="image/img14.jpg">
			                     <div class="card-body">
				                    <h5 class="card-title">Varity of Deserts</h5>
				                        <p class="card-text">to do is Haha.com welcomes you share videos with friends and have fun.share events happen in the university,share franks,show your talents,become famous</p>
			                     </div>
			                     
		                  </div>
                    </div> 
                    
                    <div class="col-12 col-sm-6 col-md-3 mb-2">
                        <div class="card">
 			                <img class="card-img-top  card-img" src="image/img14.jpg">
			                     <div class="card-body">
				                    <h5 class="card-title">Varity of Deserts</h5>
				                        <p class="card-text">to do is Haha.com welcomes you share videos with friends and have fun.share events happen in the university,share franks,show your talents,become famous</p>
			                     </div>
			                     
		                  </div>
                    </div> 
                    
                    
                    <div class="col-12 col-sm-6 col-md-3 mb-2">
                        <div class="card">
 			                <img class="card-img-top  card-img" src="image/img14.jpg">
			                     <div class="card-body">
				                    <h5 class="card-title">Varity of Deserts</h5>
				                        <p class="card-text">to do is Haha.com welcomes you share videos with friends and have fun.share events happen in the university,share franks,show your talents,become famous</p>
			                     </div>
			                     
		                  </div>
                    </div>    
                 
                    
            </div>
               
                    <div class="section-3 mb-2">
                        <center>
                            <h1 class="text-center text-white t_align2 display-4 text-shadow">Contact Us</h1></center>
                        <div class="contactUs ">
                            <h4 class="text-center text-success">Address</h4>
                                <p class="text-center text-info">No.47,Hawlok,Colombo 9</p>
                            <h4  class="text-center text-success">Phone</h4>
                                 <p class="text-center text-info">0112 3456 234</p>
                            <h4  class="text-center text-success">E-mail</h4>
                                 <p class="text-center text-info ">HameeshaRantharu@gmail.com</p>
                        </div>
                    </div>
                
                    
              
           
        </div>
    
    </body>







    
    
    
    
    
    
    
    
</html>
<?php mysqli_close($connection);?>

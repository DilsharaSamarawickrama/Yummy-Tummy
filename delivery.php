<!DOCTYPE html>
<html>
<head>
	<title>Delivery</title>
	<meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style/style1.css">
	<script type="text/javascript" src="jquery-3.4.1.slim.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    
    <script>
    
        $(document).ready(function(){
            $('#checkout').modal('show');
        })
    
    </script>
    
    
    
</head>

<body>

<div class="container mt-5">
	


	
        <div class="modal fade" tabindex="-1" role="dialog" id=checkout>
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Check Out</h5>
						<button class="close" data-dismiss="modal" area-label="Close"><span area-hidden="true" >&times;</span></button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label class="col-form-label">First Name</label>	
								<input type="text" name="" class="form-control">
							</div>
                            <div class="form-group">
								<label class="col-form-label">Last Name</label>	
								<input type="text" name="" class="form-control">
							</div>
							<div class="form-group">
								<label class="col-form-label">Contact No</label>	
								<input type="text" name="" class="form-control" placeholder="xxx - xxxxxxxx">
							</div>
							<div class="form-group">
								<label class="col-form-label">Delivery Address</label>
			 
				<textarea class="form-control" placeholder="Address"></textarea>  
			
							</div>
							



						</form>

					</div>
        <div class="row">
			<div class="btn btn-group ml-3 mb-3" >
				<button class="btn btn-success" data-toggle="modal" data-target="#payNow">Pay Now</button>
				<button class="btn btn-danger">Cash on Delivery</button>
			</div>
	   </div>
    </div>
			</div>
		</div>

	

		<div class="modal fade" tabindex="-1" role="dialog" id=payNow>
			<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Pay Now</h5>
						<button class="close" data-dismiss="modal" area-label="Close"><span area-hidden="true" >&times;</span></button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label class="col-form-label">Name on Card</label>	
								<input type="text" name="" class="form-control">
							</div>
							<div class="form-group">
								<label class="col-form-label">Card Number</label>	
								<input type="text" name="" class="form-control" placeholder="xxxx xxxx xxxx xxxx">
							</div>
							<div class="form-group">
								<label class="col-form-label">CVV</label>	
								<input type="Number" name="" class="form-control" placeholder="CVV">
							</div>
							<div class="form-group">
								<label class="col-form-label">Card Expiry</label>	
								<input type="text" name="" class="form-control" placeholder="Expiry MM/YY">
							</div>
							



						</form>

					</div>
					<div class="modal-footer mb-3">
						<button class="btn btn-secondary" data-dismiss="modal">close</button>
						<button class="btn btn-primary" target="home.html">submit</button>
					</div>
				</div>
			</div>
		</div>
    
    
   


</div>
</body>
</html>
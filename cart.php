<?php session_start();

require_once("php/connection.php");

var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="jquery-3.4.1.slim.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>  
	
    <title>cart</title>

    <script>
    
    $(document).ready(function(){
        $('#cart').modal('show');
	});
</script>
 




</head>
<body>

<div class="modal fade" tabindex="-1" role="dialog" id=cart>
			<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">My Cart</h5>
						<button class="close" data-dismiss="modal" area-label="Close"><span area-hidden="true" >&times;</span></button>
					</div>
					<div class="modal-body">
						<table class="table">
							<tr>
								<th>Item name</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Remove</th>
								<th>Sub-Total</th>

							</tr>
					<?php	
						$item_id=$_SESSION['item_id'];
						
						
						$query="SELECT * FROM `item` WHERE item_id=$item_id";
						$result=mysqli_query($connection,$query) or die("no record found");
						$row=mysqli_fetch_assoc($result);
							
								echo "<tr>";
									echo "<td>.{$row['item_name']}.</td>";
								echo "</tr>";
						
						
					?>		
						</table>
					</div>
					<div class="modal-footer mb-3">
						<button class="btn btn-secondary" data-dismiss="modal">close</button>
						<button class="btn btn-primary">submit</button>
					</div>
				</div>
			</div>
		</div>
    
</body>
</html>
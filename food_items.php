<?php
     		require_once("php/connection.php");
    		$query="SELECT * FROM `item` WHERE item_type='food'";

    		$result=mysqli_query($connection,$query);

    		$row_class="row";
    		$column="col-12 col-sm-12 col-md-3 mb-3";
    		$card="card";
    		$card_image="card-img-top card-img";
    		$card_body="card-body";
    		$card_title="card-title";
    		$card_text="card-text";
    		$card_footer="card-footer";
			$href="delivery.php";
    		$btn_class1="btn btn-danger ";
    		$btn_class2="btn btn-success ";
	
			
    
    		if($result){
			
        		echo "<div class=\"{$row_class}\">"; 
        			while($row=mysqli_fetch_assoc($result)){
							$item_id=$row['item_id'];
            				$item_name=$row['item_name'];
            				$item_image_folder=$row['item_image_folder'];
            				$item_image_name=$row['item_image_name'];
            				$item_price=$row['item_price'];
                    
            				echo  "<div class=\"{$column}\">";
            					echo "<div class=\"{$card}\">";
                					echo  "<img class=\"{$card_image}\" src=".$item_image_folder."/".$item_image_name.">";
                    					echo  "<div class=\"{$card_body}\"".">";
                       						echo  "<h5 class=\"{$card_title}\">"."{$item_name}"."</h5>";
                            					echo "<p class=\"{$card_text}\">"."Rs."."{$item_price}"."</p>";
                   					echo  "</div>";
                    					echo "<div class=\"{$card_footer}\">";
                        					echo "<a href={$href}><button class=\"{$btn_class1}\">Order</button></a>";
                        					echo  "<button class=\"{$btn_class2}\" id=\"{$item_id}\" style=\"width:10rem;\">Add to Cart</button>";
                 					echo "</div>";
            					echo "</div>";
						   echo "</div>"; 
					    
        			}
				echo "</div>";
			echo "</form>";
    		}
	?>
	

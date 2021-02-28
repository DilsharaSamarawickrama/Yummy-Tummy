<?php

require_once("connection.php");

$query="SELECT * from `user`";

$result=mysqli_query($connection,$query);
echo "<table border=1>";
while($row=mysqli_fetch_assoc($result)){
    
    echo "<tr>"."<td>"."{$row['first_name']}"."</td>"."<td>"."{$row['last_name']}"."</td>"."<td>"."{$row['email']}"."</td>";
   

}
echo "</table>";
?>
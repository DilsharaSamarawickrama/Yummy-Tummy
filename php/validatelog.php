<?php require_once('connection.php');?>
<?php
 
 session_start();

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $decry_password=sha1($password);
    
$query="SELECT * FROM `user` WHERE `email`='{$email}' AND `password`='{$decry_password}' LIMIT 1";

$result_set=mysqli_query($connection,$query);

if($result_set){
    if(mysqli_num_rows($result_set)==1){
        $record=mysqli_fetch_assoc($result_set);
        $_SESSION=$record;

        header("location:../home.php");
    }
    else{
        header("location:../log.php");
    }
}
else{
    header("location:../log.php");
}


}


?>


<?php mysqli_close($connection);?>

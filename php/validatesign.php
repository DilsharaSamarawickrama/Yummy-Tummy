<?php require_once('connection.php');?>
<?php
    if(isset($_POST['signup'])){
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $re_password=$_POST['re_password'];
        $hash_password=sha1($password);
        $query="INSERT INTO user(first_name,last_name,email,password) VALUES('{$first_name}','{$last_name}','{$email}','{$hash_password}')";

        if($first_name&&$last_name&&$email&&$password&&$re_password!=NULL){
            if($password==$re_password){
                mysqli_query($connection,$query);
                header("location:../log.php");
            }
            else{
                echo "passwords doesn't match";
            } 
        }
        else {
            echo "cannot keep the fields empty";
        }



    }








?>



<?php mysqli_close($connection)?>
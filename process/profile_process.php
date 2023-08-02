<?php
include('../db/connection.php');

if($_SERVER['REQUEST_METHOD']=='POST'){

    $name= $_POST['name'];
    $about =$_POST['about'];

    $temp_name= $_FILES['image']['tmp_name'];
    $filesize= $_FILES['image']['size'];
    $filetype= $_FILES['image']['type'];
    $filename= $_FILES['image']['name'];
    



    move_uploaded_file($temp_name,'../profile/'.$filename);
    session_start();
    $user_id= $_SESSION['id'];
    $query="INSERT INTO profile(name,profile_image,about,user_id) VALUES('$name','$filename','$about','$user_id')";
    if(mysqli_query($conn,$query))
    {
        $msg= "Saved";
    }else{
        $errmsg= mysqli_error($conn); 
    }
}else{
    $errmsg = "Request is not support";
}
if($msg!=" ")
{
header('Location:../forms/dashboard.php');
}else{
header('Location:../forms/profile_register.php?errmsg='.$errmsg);
}


?>
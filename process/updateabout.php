<?php 
require_once('../db/connection.php');
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['about'])){
            $about=$_POST['about'];
            session_start();
            $id=$_SESSION['id'];
            $query="UPDATE profile SET about = '$about' WHERE user_id = '$id'";
            if(mysqli_query($conn,$query)){
                $msg="saved";
            }else{
                $errmsg="error occured";
            }

        }else{
            $errmsg="all fields are required";
        }

    }else{
        $errmsg="request method not support";
    }
    if($msg!=" ")
    {
        header('Location:../forms/dashboard.php?errmsg='.$msg);

    }else{
        header('Location:../forms/dashboard.php?msg='.$errmsg);

    }
?>
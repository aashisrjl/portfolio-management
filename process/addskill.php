<?php 
require_once('../db/connection.php');
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['skill']) ){
           
            $skill=$_POST['skill'];

            session_start();
            $id=$_SESSION['id'];
            $query="INSERT INTO skills(skill_title,user_id) VALUES('$skill','$id')";
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
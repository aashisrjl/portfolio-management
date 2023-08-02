<?php 
require_once('../db/connection.php');
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['project_name']) && isset($_POST['proj_desc'])){
         
            $name=$_POST['project_name'];
            $desc= $_POST['proj_desc'];

            session_start();
            $id=$_SESSION['id'];
            $query="INSERT INTO project(project_name,proj_desc,user_id) VALUES('$name','$desc','$id')";
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
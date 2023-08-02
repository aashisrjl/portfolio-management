<?php 
require_once('../db/connection.php');
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['title']) && isset($_POST['join']) && isset($_POST['leave']) && isset($_POST['name'])){
          
            $title=$_POST['title'];
            $join=$_POST['join'];
            $leave=$_POST['leave'];
            $name=$_POST['name'];

            session_start();
            $id=$_SESSION['id'];
            $query="INSERT INTO experience(job_title,join_date,leave_date,company_name,user_id)
             VALUES('$title','$join','$leave','$name','$id')";
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
        header('Location:../forms/dashboard.php?msg='.$msg);

    }else{
        header('Location:../forms/dashboard.php?errmsg='.$errmsg);

    }
   
?>
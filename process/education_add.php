<?php 
require_once('../db/connection.php');
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['level']) && isset($_POST['course_name']) && isset($_POST['join_year']) && isset($_POST['pass_year']) && isset($_POST['percentage']) ){
          
            $level=$_POST['level'];
            $course=$_POST['course_name'];
            $join=$_POST['join_year'];
            $pass=$_POST['pass_year'];
            $per=$_POST['percentage'];
            

            session_start();
            $id=$_SESSION['id'];
            $query="INSERT INTO education(`level`,course_name,join_year,pass_year,`percentage`,user_id)
             VALUES('$level','$course','$join','$pass','$per','$id')";
            if(mysqli_query($conn,$query)){
                $msg="saved";
            }else{
                $errmsg="error occured";
                if(!$conn){
                    $errmsg="conn error";
                }
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
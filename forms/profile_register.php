<?php 
include('../db/connection.php');
session_start();
$id=$_SESSION['id'];
$query= "SELECT * FROM profile where user_id='$id' ";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1)
{
    header('Location:../forms/dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register_profile</title>
</head>
<style>
    body{
        background: url("../img/pat.jpg") no-repeat;
        background-position: center;
        background-size: cover;
    }
</style>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="../css/bootstrap.min.css">

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-8">
                <div class="card mt-5">
                    <div class="card-header">
                       <h3> Register_profile </h3>
                    </div>
                    <div class="card-body">
                        <?php include('../includes/successmsg.php') ?>
                        <?php include('../includes/errmsg.php') ?>
                        <form action="../process/profile_process.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name:</label>
                            <input type="text" class="form-control" name="name" required>
                          </div>

                          <div class="mb-3">
                            <label for="Image" class="form-label">Profile Image:</label>
                            <input type="file" class=""  id="exampleFormControlInput1" name="image" required>
                          </div>

                          <div class="mb-3">
                            <label for="Image" class="form-label">About:</label>
                            <textarea name="about" class="form-control" id="about" required></textarea> 
                          </div>

                          <button type="submit" class="btn btn-success">Submit</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
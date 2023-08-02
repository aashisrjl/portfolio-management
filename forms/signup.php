<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
</head>
<style>
    .wrapper{
        height: 540px !important;
        overflow: hidden;
    }
</style>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="../css/style.css">
<body>
    <header>
        <h2 class="logo">SignUp  Aashis's Portfolio</h2>
       <nav class="navigation">
     <!---  <a href="#">Aashis</a>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>  ---->
        
        <button class="btnlogin-popup">SignUp</button>
        </nav>
    </header>
    <div class="wrapper" data-aos="flip-right">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box">
            <h2>Register</h2>
            <form action="../process/signupprocess.php" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="name" required>
                    <label>Name</label>

                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>

                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                   
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="pass2" required>
                    <label>Confirmation Password</label>
                   
                </div>
                <?php include('../includes/errmsg.php') ?>
                <button type="submit" class="btnnn">SignUp</button>
                <div class="login-register">
                    <p style="color: white;">Already have an account ?<a style="margin-left: 20px;" href="login.php"
                         class="register-link">login</a></p>
                </div>
            </form>
        </div>
    </div>
    
</body>
<script type="text/javascript" src="../js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        offset: 300,
        duration: 600,
    });
    </script>
</html>
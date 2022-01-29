<?php 
    include('server.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"        
    ></script>
    <title>Sign In & Sign Up</title>
    <link rel="stylesheet" href="style_register.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="login_db.php" class="sign-in-form" method="post">                    
                    <img src="img_logo/logo.png" class="imag" alt="">
                    <br>
                    <p> ยินดีต้อนรับเข้าสู่ห้องเรียนการเงินเบื้องต้น ห้องเรียนที่จะทำให้คุณเข้าใจคำว่า "เงิน" </p>
                    <h2 class="title">Sign in</h2>                   
                    <?php if (isset($_SESSION['error'])) : ?>                         
                        <div class="error">
                            <h4>
                                <?php
                                    echo $_SESSION['error'];
                                    unset($_SESSION['error']);
                                ?>                            
                            </h4>
                        </div>
                    <?php endif ?> 
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <input type="submit" value="Login" class="btn solid" name="login_user">
                    
                </form>

                <form action="register_db.php" class="sign-up-form" method="post">                    
                    
                    <h2 class="title">Sign up</h2>
                                        
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username (must be unique)" name="username" id = "username" required> 
                        <br>
                        <span></span>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-id-card-alt"></i>
                        <input type="text" placeholder="Student ID" name="student_id" required>
                    </div>
                    <div class="input-field">
                        <i class="far fa-address-card"></i>
                        <input type="text" placeholder="First Name" name="firstname" required>
                    </div>
                    <div class="input-field">
                        <i class="far fa-address-card"></i>
                        <input type="text" placeholder="Last Name" name="lastname" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-school"></i>
                        <input type="text" placeholder="School Name" name="school" value="โรงเรียนเตรียมอุดมศึกษาพัฒนาการสุราษฎร์ธานี" required> 
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password_1" required>
                    </div>
                    
                    <input type="submit" value="Login" class="btn solid" name="reg_user">
                    
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Don't have an account yet ?</h3>
                    <br>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                <img src="img_register/undraw_online_banking_-7-jy4.svg" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Have an account already?</h3>
                    <br>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="img_register/undraw_pay_online_b-1-hk.svg" class="image" alt="">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="register.js"></script>
    <script src="check.js"></script>
</body>
</html>


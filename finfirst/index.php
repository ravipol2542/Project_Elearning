<?php 
    include('server.php');
    session_start();
    if (isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>ห้องเรียนการเงิน</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style_index.css">
    
</head>
<body>
    <section class="header">
        <a href="#" class="logo"><img src="img_logo/logo_white.png" oncontextmenu="return false;" ></a>
        <ul class="navigation">
            <?php if (!isset($_SESSION['username'])) : ?>
                <li><a href="register.php">เข้าสู่ระบบ</a></li>
                <li><a href=#banner2>เกี่ยวกับเรา</a></li>
            <?php endif ?>
            <?php if (isset($_SESSION['username'])) : ?>                 
                <li><a href="class.php">ห้องเรียนการเงิน</a></li>                  
                <li><a href="rate.php">ประเมินผลระบบ</a></li>                            
                <li><a href=#banner2>เกี่ยวกับเรา</a></li>    
                <li><a href="index.php?logout='1'">Logout</a></li>
            <?php endif ?>                        
        </ul>
        
    </section>

    <section class="banner">
        <img src="img_index/bg9.jpg" oncontextmenu="return false;"  class="bg">
        <div class="content">  
            <?php if (!isset($_SESSION['username'])) : ?>
                <h4>Finance First Step ความรู้การเงินเบื้องต้นที่ทุกคนต้องรู้</h4>
                <p>เข้าสู่ระบบ เพื่อเข้าสู่ห้องเรียนการเงินเบื้องต้น</p>
                
            <?php endif ?>   
            <?php if (isset($_SESSION['username'])) : ?>                 
                <h4>ยินดีต้อนรับ <strong> คุณ <?php echo $_SESSION['username']; ?> </strong>   เข้าสู่ห้องเรียนการเงินเบื้องต้น</h4>
                           
                <h4>อย่าลืม!! ประเมินผลระบบน้าา</h4>  
                
            <?php endif ?>                      
            
        </div>
        
    </section>
    <section class="b">
            <?php if (isset($_SESSION['username'])) : ?>  
                <div class="button1" >                
                    <a href="class.php">ห้องเรียนการเงิน</a>                        
                </div>                 
                <div class="button2" >                
                    <a href="rate.php">ประเมินผลระบบ</a>                        
                </div>   
                
            <?php endif ?> 
    </section>
    <section class="banner2" id="banner2">
        
        <div class="container">
                  
            <h4>เกี่ยวกับเรา</h4>
            <div class="card" >
                <div class="content">
                    <h4>นาย รวิพล แจ่มกระจ่าง</h4>
                    <p>นักศึกษาปริญญาตรี </p>
                    <p>คณะวิศวกรรมศาสตร์ </p>
                    <p>สาขาคอมพิวเตอร์ </p>
                    <p>มหาวิทยาลัยธรรมศาสตร์</p>
                </div>
                <img src="img_index/nathan.png" oncontextmenu="return false;" >
            </div>

            <div class="card">
                <div class="content">
                    <h4>น.ส.ประภานิช อมรวิสิทธิ์กุล</h4>
                    <p>นักศึกษาปริญญาตรี </p>
                    <p>คณะวิศวกรรมศาสตร์ </p>
                    <p>สาขาคอมพิวเตอร์ </p>
                    <p>มหาวิทยาลัยธรรมศาสตร์</p>
                </div>
                <img src="img_index/ap.png" oncontextmenu="return false;" >
            </div>
        </div>
    </section>  
    
</body>
</html>
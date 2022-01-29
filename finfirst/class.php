<?php include('server.php'); ?>
<?php 
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
    <link rel="stylesheet" href="style_class.css">
    
</head>
<body>
    <?php if (!isset($_SESSION['username'])) : 
        header('location: index.php');
     endif ?>
   
    
    <div class="trailer">
        <video src="video/Title.mp4" controls="true" controlsList="nodownload" oncontextmenu="return false;" ></video>
        <img src="img_class/close_w.png" class="close" onclick="toggleVideo();">
    </div>
    <div class="trailer2">
        <video src="video/trailer.mp4" controls="true" controlsList="nodownload" oncontextmenu="return false;" ></video>
        <img src="img_class/close_w.png" class="close" onclick="toggleVideo2();">
    </div>

    <script>
        function toggleVideo(){
            const trailer = document.querySelector('.trailer');
            const video =document.querySelector('video');
            trailer.classList.toggle('active')
            video.currentTime = 0;
            video.pause();
        }
    </script>
    <script>
        function toggleVideo2(){
            const trailer = document.querySelector('.trailer2');
            const video =document.querySelector('video');
            trailer.classList.toggle('active')
            video.currentTime = 0;
            video.pause();
        }
    </script>

    <section class="destination" id="destination">      
 
        <div class="contnt">
            <h2 class="titleText">ห้องเรียนการเงิน</h2>            
        </div>        

        <div class="destinationList">

            <div class="box" >
                <div class="imgBx" onclick="toggleVideo2();">
                    <img src="img_class/cycle.png" class="fitBg">
                </div>
                <div class="content">
                    <h2>วัฏจักรเศรษฐกิจ<br><span >7 นาที 
                    <div class="buttons">                
                        <a href="quiz.php?num_quiz=1">แบบทดสอบ</a>                        
                    </div>                        
                     </span></h2>                   
                </div>                          
            </div>

            <div class="box" >
                <div class="imgBx" onclick="toggleVideo();">
                    <img src="img_class/bank.png" class="fitBg">
                </div>
                <div class="content">
                    <h2>ระบบธนาคาร<br><span>5 นาที
                        <div class="buttons">                
                            <a href="quiz.php?num_quiz=2">แบบทดสอบ</a>
                        </div>                            
                    </span></h2>                    
                </div>            
            </div>

            <div class="box" >
                <div class="imgBx" onclick="toggleVideo();">
                    <img src="img_class/destination3.jpg" class="fitBg">
                </div>
                <div class="content">
                    <h2>อัตราดอกเบี้ย<br><span>6 นาที
                        <div class="buttons">                
                            <a href="quiz.php?num_quiz=3">แบบทดสอบ</a>
                        </div>                            
                    </span></h2>                    
                </div>               
            </div>

            <div class="box" >
                <div class="imgBx" onclick="toggleVideo2();">
                    <img src="img_class/destination1.jpg" class="fitBg">
                </div>
                <div class="content">
                    <h2>วัฏจักรเศรษฐกิจ<br><span >7 นาที 
                    <div class="buttons">                
                        <a href="#">แบบทดสอบ</a>
                    </div>                        
                     </span></h2>                   
                </div>                          
            </div>

            <div class="box" >
                <div class="imgBx" onclick="toggleVideo();">
                    <img src="img_class/inflation.png" class="fitBg">
                </div>
                <div class="content">
                    <h2>เงินเฟ้อ<br><span>5 นาที
                        <div class="buttons">                
                            <a href="#">แบบทดสอบ</a>
                        </div>                            
                    </span></h2>                    
                </div>            
            </div>

            <div class="box" >
                <div class="imgBx" onclick="toggleVideo();">
                    <img src="img_class/growth.png" class="fitBg">
                </div>
                <div class="content">
                    <h2>มหัศจรรย์ดอกเบี้ยทบต้น<br><span>6 นาที
                        <div class="buttons">                
                            <a href="#">แบบทดสอบ</a>
                        </div>                            
                    </span></h2>                    
                </div>               
            </div>

            <div class="box" >
                <div class="imgBx" onclick="toggleVideo2();">
                    <img src="img_class/fund.png" class="fitBg">
                </div>
                <div class="content">
                    <h2>กองทุนรวม<br><span >7 นาที 
                    <div class="buttons">                
                        <a href="#">แบบทดสอบ</a>
                    </div>                        
                     </span></h2>                   
                </div>                          
            </div>

            <div class="box" >
                <div class="imgBx" onclick="toggleVideo();">
                    <img src="img_class/destination2.jpg" class="fitBg">
                </div>
                <div class="content">
                    <h2>สินทรัพย์การลงทุน<br><span>5 นาที
                        <div class="buttons">                
                            <a href="#">แบบทดสอบ</a>
                        </div>                            
                    </span></h2>                    
                </div>            
            </div>

            <div class="box" >
                <div class="imgBx" onclick="toggleVideo();">
                    <img src="img_class/destination3.jpg" class="fitBg">
                </div>
                <div class="content">
                    <h2>วิกฤตเศรษฐกิจ<br><span>6 นาที
                        <div class="buttons">                
                            <a href="#">แบบทดสอบ</a>
                        </div>                            
                    </span></h2>                    
                </div>               
            </div>
            
        </div>
        
    </section>
   <section class="b">
        <div class="button" >                
            <a href="rate.php">ประเมินผลระบบ</a>                        
        </div>           
        
   </section>
    
</body>
</html>
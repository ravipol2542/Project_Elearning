<?php 
    include('server.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบประเมิน</title>
    <link rel="stylesheet" href="style_rate.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php if (!isset($_SESSION['username'])) : 
        header('location: index.php');
    endif ?>
    <div class="container">
        <img src="image/logo.png" class="imag" alt="">
        <div class="title">แบบประเมิน</div>
        
        <form action="rate_db.php" method="POST">                
                <div class="device">
                    <input type="radio" name="device" id="device-1" value="phone">
                    <input type="radio" name="device" id="device-2" value="ipad">
                    <input type="radio" name="device" id="device-3" value="notebook">
                    <span class="details-title">1. ประเภทอุปกรณ์ที่ใช้</span>
                    <div class="category">
                        <label for="device-1">
                            <span class="detail one"></span>
                            <span class = "devicee1"> โทรศัพท์ </span>
                        </label>
                        <label for="device-2">
                            <span class="detail two"></span>
                            <span class = "devicee"> ไอแพด/แท็บเล็ต</span>
                        </label>
                        <label for="device-3">
                            <span class="detail three"></span>
                            <span class = "devicee"> คอมพิวเตอร์/โน๊ตบุ๊ค </span>
                        </label>                        
                    </div>
                </div>
                <div class="details">
                    <input type="radio" name="second" id="second-1" value=3>
                    <input type="radio" name="second" id="second-2" value=2>
                    <input type="radio" name="second" id="second-3" value=1>
                    <span class="details-title">2. เว็บไชต์สวยงาม ไม่ซับซ้อน</span>
                    <div class="category">
                        <label for="second-1">
                            <span class="detail one"></span>
                            <span > ดีมาก </span>
                        </label>
                        <label for="second-2">
                            <span class="detail two"></span>
                            <span > ดี </span>
                        </label>
                        <label for="second-3">
                            <span class="detail three"></span>
                            <span> พอใช้ </span>
                        </label>                        
                    </div>
                </div>
                <div class="details">
                    <input type="radio" name="third" id="third-1" value=3>
                    <input type="radio" name="third" id="third-2" value=2>
                    <input type="radio" name="third" id="third-3" value=1>
                    <span class="details-title">3. ระบบลงชื่อเข้าใช้</span>
                    <div class="category">
                        <label for="third-1">
                            <span class="detail one"></span>
                            <span > ดีมาก </span>
                        </label>
                        <label for="third-2">
                            <span class="detail two"></span>
                            <span > ดี </span>
                        </label>
                        <label for="third-3">
                            <span class="detail three"></span>
                            <span > พอใช้ </span>
                        </label>
                    </div>
                </div>
                <div class="details">
                    <input type="radio" name="fourth" id="fourth-1" value=3>
                    <input type="radio" name="fourth" id="fourth-2" value=2>
                    <input type="radio" name="fourth" id="fourth-3" value=1>
                    <span class="details-title">4. วิดีโอเรียนรู้การเงินเบื้องต้น</span>
                    <div class="category">
                        <label for="fourth-1">
                            <span class="detail one"></span>
                            <span > ดีมาก </span>
                        </label>
                        <label for="fourth-2">
                            <span class="detail two"></span>
                            <span > ดี </span>
                        </label>
                        <label for="fourth-3">
                            <span class="detail three"></span>
                            <span > พอใช้ </span>
                        </label>
                    </div>
                </div>
                <div class="details">
                    <input type="radio" name="fifth" id="fifth-1" value=3>
                    <input type="radio" name="fifth" id="fifth-2" value=2>
                    <input type="radio" name="fifth" id="fifth-3" value=1>
                    <span class="details-title">5. แบบทดสอบ (Quiz) </span>
                    <div class="category">
                        <label for="fifth-1">
                            <span class="detail one"></span>
                            <span > ดีมาก </span>
                        </label>
                        <label for="fifth-2">
                            <span class="detail two"></span>
                            <span > ดี </span>
                        </label>
                        <label for="fifth-3">
                            <span class="detail three"></span>
                            <span > พอใช้ </span>
                        </label>
                    </div>
                </div>
                <div class="details">
                    <span class="details-title">6. ช้อเสนอแนะ</span>
                    <div class="text">
                        <textarea name ="suggestion" class="field area" ></textarea>
                    </div>
                </div>
                <div class="details">
                    <span class="details-title">7. ความคิดเห็นเพิ่มเติม</span>
                    <div class="text">
                        <textarea name ="opinion" class="field area" ></textarea>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Submit" name="rate_submit">
                </div>            
        </form>
    </div>
</body>
</html>
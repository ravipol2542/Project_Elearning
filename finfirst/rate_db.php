<?php
    session_start();
    include('server.php');

    if(isset($_POST['rate_submit'])) {
        $username = $_SESSION['username'];
        $device = $_POST['device'];
        $UI = $_POST['second'];
        $register = $_POST['third'];
        $video = $_POST['fourth'];
        $quiz = $_POST['fifth'];
        $total = ($UI+$register+$video+$quiz);
        $suggestion = $_POST['suggestion'];
        $opinion = $_POST['opinion'];
        
        $sql = "INSERT INTO rate(username, device, UI, register, video, quiz,total, suggestion, opinion) VALUES ('$username', '$device', '$UI','$register', '$video','$quiz','$total' ,'$suggestion', '$opinion')";
        $result = mysqli_query($connect,$sql);

        if($result){
            header('location: index.php');
        }else{
            echo mysqli_error($connect);
        }
    }

?>
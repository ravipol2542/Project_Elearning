<?php include('server.php'); ?>
<?php 
    session_start();    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
    <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"        
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style_quiz.css">
</head>
<body>
    <?php $num_quiz = $_GET['num_quiz'];?>
    <div class="home-box custom-box ">
        <h3>Instruction: </h3>              
        <p>Total number of question: <span class="total-question"></span></p>
        <button type="button" class="btn" data-variable="<?php echo $num_quiz;?>" onclick="startQuiz(this)">Start Quiz</button>
        
    </div>
    <div class="quiz-box custom-box hide">
        <div class="question-number">
            
        </div>
        <div class="question-text">
            
        </div>
        <div class="option-container">
            
        </div>
        <div class="next-question-btn">
            <button type="button" class="btn" onclick="next()">Next</button>
        </div>
        <div class="answers-indicator">

        </div>
    </div>

    <div class="result-box custom-box hide">
        <h1>Quiz Result</h1>
        <table>
            <tr>
                <td>Total Question</td>
                <td><span class="total-question"></span></td>
            </tr>
            <tr>
                <td>Attempt</td>
                <td><span class="total-attempt"></span></td>
            </tr>
            <tr>
                <td>Correct</td>
                <td><span class="total-correct"></span></td>
            </tr>
            <tr>
                <td>Wrong</td>
                <td><span class="total-wrong"></span></td>
            </tr>
            <tr>
                <td>Percentage</td>
                <td><span class="percentage"></span></td>
            </tr>
            <tr>
                <td>Your Total Score</td>
                <td><span class="total-score"></span></td>
            </tr>
        </table>        
        <button type="button" class="btn" onclick = "goToHome()">Try Again</button>
        <button type="button" class="btn" onclick = "tryAgainQuiz()">เข้าสู่ห้องเรียน</button>
    </div>
    <script src="question.js"></script>
    <script src="quiz.js"></script>
</body>
</html>
const questionNumber= document.querySelector(".question-number");
const questionText = document.querySelector(".question-text");
const optionContainer = document.querySelector(".option-container");
const answersIndicatorContainer = document.querySelector(".answers-indicator");
const homeBox = document.querySelector(".home-box");
const quizBox = document.querySelector(".quiz-box");
const resultBox = document.querySelector(".result-box");


let questionCouter = 0;
let currentQuestion;
let availableQuestions = [];
let availableOptions = [];
let correctAnswers = 0;
let attempt = 0;


//push the questions into availableQuestion Array
function setAvailableQuestions(){
    const totalQuestion = 5;
    console.log("setAvailableQuestions");
    console.log(quiz_number )
    if(quiz_number == '1'){
        const totalQuestion = quiz1.length;

        for(let i =0; i<totalQuestion; i++){
            availableQuestions.push(quiz1[i])
        }
    }else if(quiz_number == '2'){
        const totalQuestion = quiz2.length;

        for(let i =0; i<totalQuestion; i++){
            availableQuestions.push(quiz2[i])
        }
    }else if(quiz_number == '3'){
        const totalQuestion = quiz3.length;

        for(let i =0; i<totalQuestion; i++){
            availableQuestions.push(quiz3[i])
        }
    }    
    console.log(availableQuestions);
    
}
//set question number and question and options
function getNewQuestion(){
    //set question number
    if(quiz_number == '1'){
        questionNumber.innerHTML = "Question " + (questionCouter+1) + " of "  + quiz1.length;
    }else if(quiz_number== '2'){
        questionNumber.innerHTML = "Question " + (questionCouter+1) + " of "  + quiz2.length;
    }else if(quiz_number == '3'){
        questionNumber.innerHTML = "Question " + (questionCouter+1) + " of "  + quiz3.length;
    }
    //set question text

    //get random question
    const questionIndex = availableQuestions[Math.floor(Math.random() * availableQuestions.length)];
    currentQuestion = questionIndex;
    questionText.innerHTML = currentQuestion.q;
    
    //get the position of 'questionIndex' from the availableQuestions Array
    const index1 = availableQuestions.indexOf(questionIndex);
    //remove the 'questionIndex' from the availableQuestions Array, so the question does not repeat
    availableQuestions.splice(index1,1);
    
    //set options
    //get the length of options
    const optionLen = currentQuestion.options.length
    //push options into svailableOptions Array
    for(let i=0; i<optionLen;i++){
        availableOptions.push(i)
    }
    optionContainer.innerHTML = '';
    let animationDelay = 0.15;

    //creat options in html
    for(let i=0; i<optionLen; i++){
        //random option
        const optionIndex = availableOptions[Math.floor(Math.random() * availableOptions.length)];
        //get the position of 'optionIndex' from the availableOptions array
        const index2 = availableOptions.indexOf(optionIndex);
        //remove the 'optionIndex' from the availableOptions array, so that the option does not repeat
        availableOptions.splice(index2,1);
        const option = document.createElement("div");
        option.innerHTML = currentQuestion.options[optionIndex];
        option.id = optionIndex;
        option.style.animationDelay= animationDelay + 's';
        animationDelay = animationDelay + 0.15;
        option.className = "option";
        optionContainer.appendChild(option)
        option.setAttribute("onclick","getResult(this)");
    }

    questionCouter++

}
//get th eresult of current attempt question
function getResult(element){
    const id = parseInt(element.id);
    //get the answer by comparing the id of clicked option
    if(id === currentQuestion.answer){
        //set the green color to the correct option
        element.classList.add("correct");
        //add the indicator to correct mark
        updateAnswerIndicator("correct");
        correctAnswers++;

    }
    else{
        //set the red color to the wrong option
        element.classList.add("wrong");
        //add the indicator to wrong mark
        updateAnswerIndicator("wrong");
        //if the answer is incorrect then show the correct option by adding green on correct option
        const optionLen= optionContainer.children.length;
        for(let i=0; i<optionLen; i++){
            if(parseInt(optionContainer.children[i].id) === currentQuestion.answer){
                optionContainer.children[i].classList.add("correct");
            }
        }
    }
    attempt++;
    unclickableOptions();
}

//make all options unclickable once option was selected.
function unclickableOptions(){
    const optionLen = optionContainer.children.length;
    for(let i=0; i<optionLen; i++){
        optionContainer.children[i].classList.add("already-answered");
    }
}

function answersIndicator(){
    answersIndicatorContainer.innerHTML = '';
    const totalQuestion =5;
    if(quiz_number == '1'){
        const totalQuestion = quiz1.length;
    }else if(quiz_number  == '2'){
        const totalQuestion = quiz2.length;
    }else if(quiz_number  == '3'){
        const totalQuestion = quiz3.length;
    }
    
    for(let i=0; i<totalQuestion; i++){
        const indicator = document.createElement("div");
        answersIndicatorContainer.appendChild(indicator);
    }
}

function updateAnswerIndicator(markType){
    answersIndicatorContainer.children[questionCouter-1].classList.add(markType)
}
function next(){
    if(quiz_number == '1'){
        if(questionCouter === quiz1.length){
            quizOver();
        }
        else{
            getNewQuestion();
        }
    }else if(quiz_number  == '2'){
        if(questionCouter === quiz2.length){
            quizOver();
        }
        else{
            getNewQuestion();
        }
    }else if(quiz_number  == '3'){
        if(questionCouter === quiz3.length){
            quizOver();
        }
        else{
            getNewQuestion();
        }
    }
    
}

function quizOver(){
    // hide quiz quizBox
    quizBox.classList.add("hide");
    //show result Box
    resultBox.classList.remove("hide");
    quizResult();
}

//get quiz result
function quizResult(){
    if(quiz_number == '1'){
        resultBox.querySelector(".total-question").innerHTML = quiz1.length;
        const percentage = (correctAnswers/quiz1.length)*100;
        resultBox.querySelector(".percentage").innerHTML = percentage.toFixed() + "%";
        resultBox.querySelector(".total-score").innerHTML = correctAnswers + " / " + quiz1.length;
    }else if(quiz_number  == '2'){
        resultBox.querySelector(".total-question").innerHTML = quiz2.length;
        const percentage = (correctAnswers/quiz2.length)*100;
        resultBox.querySelector(".percentage").innerHTML = percentage.toFixed() + "%";
        resultBox.querySelector(".total-score").innerHTML = correctAnswers + " / " + quiz2.length;
    }else if(quiz_number  == '3'){
        resultBox.querySelector(".total-question").innerHTML = quiz3.length;
        const percentage = (correctAnswers/quiz3.length)*100;
        resultBox.querySelector(".percentage").innerHTML = percentage.toFixed() + "%";
        resultBox.querySelector(".total-score").innerHTML = correctAnswers + " / " + quiz3.length;
    }
    
    resultBox.querySelector(".total-attempt").innerHTML = attempt;
    resultBox.querySelector(".total-correct").innerHTML = correctAnswers;
    resultBox.querySelector(".total-wrong").innerHTML = attempt - correctAnswers;
    
    
}

function resetQuiz(){
    questionCouter = 0;
    correctAnswers = 0;
    attempt = 0;
}

function tryAgainQuiz(){
    // hide the resultBox
    resultBox.classList.add("hide");
    //show the quizBox
    quizBox.classList.remove("hide");
    resetQuiz();
   
    // startQuiz();
    location.href = "class.php";
}

function goToHome(){
    // hide result box
    resultBox.classList.add("hide");
    // show home box
    homeBox.classList.remove("hide");
    resetQuiz();
}
//start quiz
function startQuiz(num_quiz){
    // hide home box
    homeBox.classList.add("hide");

    //show quiz box
    quizBox.classList.remove("hide");    


    //sessionStorage.removeItem("num");
    
    quiz_number = num_quiz.getAttribute("data-variable");
    //sessionStorage.setItem("num",num);
    
    //first, set all questions in availableQuestions Array
    
    setAvailableQuestions();
    //second, call getNewQuestion(); function
    getNewQuestion();
    // to create indicator of answer
    answersIndicator();
}
// var quiz_number = sessionStorage.getItem("num");
window.onload = function(){
    if(quiz_number == '1'){
        homeBox.querySelector(".total-question").innerHTML = quiz1.length;
    }else if(quiz_number  == '2'){
        homeBox.querySelector(".total-question").innerHTML = quiz2.length;
    }else if(quiz_number  == '3'){
        homeBox.querySelector(".total-question").innerHTML = quiz3.length;
    }
    
}
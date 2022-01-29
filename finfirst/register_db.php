<?php 
    session_start();
    include('server.php');
    $errors = array();

    if(isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $student_id = mysqli_real_escape_string($connect, $_POST['student_id']);
        $firstname = mysqli_real_escape_string($connect, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($connect, $_POST['lastname']);
        $school = mysqli_real_escape_string($connect, $_POST['school']);
        $password_1 = mysqli_real_escape_string($connect, $_POST['password_1']);
        // $password_2 = mysqli_real_escape_string($connect, $_POST['password_2']);

        if(empty($username)) {
            array_push($errors, "Username is required.");
        }
        if(empty($student_id)) {
            array_push($errors, "Student ID is required.");
        }
        if(empty($firstname)) {
            array_push($errors, "Firstname is required.");
        }
        if(empty($lastname)) {
            array_push($errors, "Lastname is required.");
        }
        if(empty($school)) {
            array_push($errors, "School Name is required.");
        }
        if(empty($password_1)) {
            array_push($errors, "Password is required.");
        }
        
        $user_check_query = "SELECT * FROM users WHERE username = '$username' ";
        $query = mysqli_query($connect, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if($result){
            if($result['username'] === $username) {
                array_push($errors, "Username already exists.");
            }
        }

        if(count($errors) == 0) {
            $password = sha1($password_1);

            $sql = "INSERT INTO users(username,student_id,firstname,lastname,school,password) VALUES('$username', '$student_id', '$firstname', '$lastname','$school', '$password')" ;
            mysqli_query($connect,$sql);         
            $quiz_sql = "INSERT INTO quiz(username) VALUES('$username')";
            mysqli_query($connect,$quiz_sql); 
                            
            $_SESSION['username'] = $username;
            header('location: index.php');
        }else{
            $_SESSION['error'] = "Sign up ไม่สำเร็จ";
            header("location: register.php");
        }
    }
?>

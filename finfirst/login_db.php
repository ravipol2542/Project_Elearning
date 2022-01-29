<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);

        if(empty($username)){
            array_push($errors, "Username is required.");
        }

        if(empty($password)){
            array_push($errors, "Password is required.");
        }

        if(count($errors) == 0){
            $password = sha1($password);
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
            $result = mysqli_query($connect, $query);
           

            if(mysqli_num_rows($result)==1){
                $_SESSION['username'] = $username;
                header("location: index.php");
            }else {
                array_push($errors, "Wrong username or password.");
                $_SESSION['error'] = "Wrong username or password.";
                header("location: register.php");
                
            }
        }
    }
?>

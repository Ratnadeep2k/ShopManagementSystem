<?php
    include 'database.php';
    $email = $_POST['username'];
    $password = $_POST['password'];

    $sql1 = "SELECT * FROM users WHERE username='$email' ";
    $result1 = $conn->query($sql1);

    $sql2 = "SELECT * FROM users WHERE username='$email' AND password='$password' ";
    $result2 = $conn->query($sql2);

    if($email==""){
        echo '<script>alert("Please enter the email")</script>';
    }
    if($password==""){
        echo '<script>alert("Please enter the password")</script>';
    }

    else 
    {
        if(!$row = $result1->fetch_assoc()){
            echo '<script>alert("Your email is incorrect!")</script>';
        }

        elseif(!$row = $result2->fetch_assoc()){
            echo '<script>alert("Your password is incorrect!")</script>';
        }

        else{
            echo '<script>alert("You are logged in!")</script>';
            // header("Location: home.php");
        }
    }
?>

 
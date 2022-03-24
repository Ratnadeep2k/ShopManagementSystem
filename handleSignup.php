
<?php 
    include 'database.php';
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_email_query="select * from users WHERE email='$email'";  
    $run_query=mysqli_query($conn,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
        echo "<script>alert('$email already exists in the database. Please try another one!')</script>";    
    } 

    else{
        $query = 
        mysqli_query
            (
                $conn, 
                "insert into users(firstName, lastName, email, password) values ('$firstName', '$lastName', '$email', '$password')"
            )
            or die(mysqli_error($conn));

        mysqli_close($conn);
        header("Location: index.php");
    }

?>


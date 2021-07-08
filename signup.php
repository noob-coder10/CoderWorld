<?php
    $connection = mysqli_connect('localhost', 'root');
   
    mysqli_select_db($connection, 'authentication');
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $pass = $_POST['passward'];
    $cpass = $_POST['cpassward'];

    $s = "SELECT * FROM credentials WHERE EMAIL = '$email'";

    $result = mysqli_query($connection, $s);

    $num = mysqli_num_rows($result);

    if($num >= 1)
    {
        echo "User already taken";
    }
    else
    {
        $data = "INSERT INTO credentials (FNAME, LNAME, EMAIL, PASSWD) VALUES ('$firstname', '$lastname', '$email', '$pass')";

        mysqli_query($connection, $data);
        header('location:signupSuccessful.php' );
    }



    

?>
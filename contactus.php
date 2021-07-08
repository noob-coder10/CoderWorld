<?php
    $connection = mysqli_connect('localhost', 'root');
   
    mysqli_select_db($connection, 'authentication');
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $query = $_POST['query'];
    $member = $_POST['member'];
    $message = $_POST['message'];

    $data = "INSERT INTO contactus ( NAME, EMAIL, QUERY, MEMBER, MESSAGE) VALUES ('$name', '$email', '$query','$member', '$message')";

    mysqli_query($connection, $data);
    header('location:contactSuccessful.php' );



    

?>
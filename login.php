<?php
    $connection = mysqli_connect('localhost', 'root');
  
    mysqli_select_db($connection, 'authentication');

    $lemail = $_POST['lemail'];
    $lpass = $_POST['lpassward'];


    $query  = "SELECT * FROM credentials WHERE EMAIL='$lemail' AND PASSWD='$lpass'";
        
    $result = mysqli_query($connection , $query);
    
    $num = mysqli_num_rows($result);

    if ($num >= 1) 
    {
        header ('location:dashboard.php');
    } 
    else 
    {
        echo "<div class='form'>
            <h3>Incorrect Username/password.</h3><br/>
            <p class='link'>Click here to <a href='index.html'>Login</a> again.</p>
            </div>";
    }

?>
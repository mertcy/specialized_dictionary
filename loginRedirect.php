<?php
    session_start();
    echo 'you have entered valid username and password';
    
    $cur=$_POST['username'];
    $_SESSION['currentuser'] = $cur;
    header('Refresh: 2; URL = user.php'); 
?>
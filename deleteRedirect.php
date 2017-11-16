<?php
    session_start();
    echo 'you have deleted the entry';
    
    $cur=$_POST['username'];
    $_SESSION['currentuser'] = $cur;
    header('Refresh: 2; URL = index.php'); 
?>
<?php
    session_start();
    echo 'You have voted the entry successfully!';
    
    $cur=$_POST['username'];
    $_SESSION['currentuser'] = $cur;
    header('Refresh: 2; URL = index.php'); 
?>
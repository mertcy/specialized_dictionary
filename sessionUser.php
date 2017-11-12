<?php
    session_start();

    // nav menu items
    $loggedInItems = [
        "logout"  => [
            "slug"  => "logout.php",
            "title" => "log out"
        ]
    ];
   
    echo "current user: " .$_SESSION['currentuser']. "  ";
    foreach($loggedInItems as $loggedIn) {
        echo "<a href=\"$loggedIn[slug]\">$loggedIn[title]</a> ";
    }

?>
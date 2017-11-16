<?php
    session_start();

    $cur_usr = $_SESSION['currentuser'];
    // nav menu items
    $loggedInItems = [
        "profile"  => [
            "slug"  => "profile.php",
            "title" => "$cur_usr"
        ],
        "logout"  => [
            "slug"  => "logout.php",
            "title" => "log out"
        ]
    ];
   
    foreach($loggedInItems as $loggedIn) {
        echo "<a href=\"$loggedIn[slug]\">$loggedIn[title]</a> ";
    }

?>
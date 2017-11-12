<?php
    session_start();

    // nav menu items
    $notLoggedInItems = [
        "signup"  => [
            "slug"  => "signup.php",
            "title" => "sign up"
        ],
        "login"  => [
            "slug"  => "login.php",
            "title" => "log in"
        ]
    ];  

    foreach($notLoggedInItems as $notLoggedIn) {
        echo "<a href=\"$notLoggedIn[slug]\">$notLoggedIn[title]</a> ";
    }

?>
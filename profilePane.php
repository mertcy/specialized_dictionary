<?php
$userItems = [
        "s" => [
            "slug"  => "index.php",
            "title" => "t"
        ],
        "e"  => [
            "slug"  => "today.php",
            "title" => "o"
        ],
        "g"  => [
            "slug"  => "todayinHistory.php",
            "title" => "g"
        ],
        "o"  => [
            "slug"  => "sports.php",
            "title" => "#s"
        ]
    ];

    foreach($userItems as $user_item) {
        echo "<a href=\"$user_item[slug]\">$user_item[title]</a> ";
    } 
?>
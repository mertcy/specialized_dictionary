<html>
<head>
<style>

.userPanel{
    background-color: #363e37;
    color: lightgreen;
    font-size: 14px;
    cursor: pointer;
}

.userPanel-content {
    display: inline-block;
    position: relative;
    background-color: #363e37;
    border-style: solid;
    border-color: #576558;
    min-width: 160px;
    overflow: auto;
    z-index: 1;
}

.userPanel-content a {
    color: #61df66;
    padding: 12px 16px;
    text-decoration: none;
    display: inline-block;
}

.dropbtn {
    background-color: #363e37;
    color: #61df66;
    font-size: 14px;
    border-style: solid;
    border-color: #576558;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #363e37;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #363e37;
    border-style: solid;
    border-color: #576558;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: #61df66;
    padding: 12px 16px;
    text-decoration: none;
    border-style: solid;
    border-color: #576558;
    display: block;
}

.dropdown a:hover {background-color: #5c7a5d}

.show {display:block;}
</style>
</head>
<body>

<div class="userPanel">
<?php
    $userItems = [
        "entries" => [
            "slug"  => "entries.php",
            "title" => "entries"
        ],
        "favorites"  => [
            "slug"  => "favorites.php",
            "title" => "favorites"
        ]
    ];
   
    $statistics = [
        "uppedEntries" => [
            "slug"  => "uppedEntries.php",
            "title" => "upped entries"
        ],
        "downedEntries"  => [
            "slug"  => "downedEntries.php",
            "title" => "downed entries"
        ]
        ,
        "favoritedEntries"  => [
            "slug"  => "favoritedEntries.php",
            "title" => "favorited entries"
        ]
    ];
?>

<div id="myUserPanel" class="userPanel-content">
    <?php
        foreach($userItems as $user_item) {
            echo "<a href=\"$user_item[slug]\">$user_item[title]</a> ";
        }
    ?>
</div>

<div class="dropdown">
    <h1 onclick="myFunction()" class="dropbtn">statistics</h1>
    <div id="myDropdown" class="dropdown-content">
        <?php
            foreach($statistics as $statistics_item) {
                echo "<a href=\"$statistics_item[slug]\">$statistics_item[title]</a> ";
            }
        ?>
    </div>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


</div>


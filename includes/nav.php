<ul>
    <?php
        foreach($navItems as $item) {
            echo "<a href=\"$item[slug]\">$item[title]</a> ";
        }
    ?>
</ul>
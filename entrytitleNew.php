<?php
    define("TITLE", "home | specialized dictionary");
    include('includes/header.php');
?>

<div class="index2"> <!-- bu kısım gündem için -->
            <div id="index" >
                <?php    
                    include('entrytitlepaneHeader.php');
                    include('entrytitlepane.php');
                ?>
            </div>  

        </div>
<div class="main2">
    <br></br><br></br><br></br><br></br><br></br>
    <div>
        <form action="/action_page.php">
            <label for="fname">Entry Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Entry name..">
            <br></br>
            <label for="fname">Entry Text</label>
            <input type="text" id="fname" name="firstname" placeholder="Entry Text">
        </form>
    </div>         
</div>
        <?php
            



            
        ?>

<?php
    include('includes/footer.php');
?>
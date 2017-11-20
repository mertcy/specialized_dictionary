<?php
    session_start();
    define("TITLE", "home | specialized dictionary");
    include('includes/header.php');
    $cur_usr = $_SESSION['currentuser'];
?>

        <div class="index2"> <!-- bu kısım gündem için -->
            <div id="index" >
                <?php    
                    include('entrytitlepaneHeader.php');
                    include('entrytitlepane.php');
                ?>
            </div>   
        </div>
        <div class="userpage">
            <p><!--main --></p>
            <h4><?php  echo $cur_usr;?><h4>

            <div class=user_item>
            <?php    
                include('profilePane.php');
            ?>

            </div>     
            
            <div id="profilenav" class="profilenav">
            <div>

        </div>
    </div>

<?php
    include('includes/footer.php');
?>
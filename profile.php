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

            <div id="wall">

            <div class = "containerrr">
                <form class="form" role = "form"
                    method = "post" action="addentry.php">
                    <textarea id="econtent" name="entrycontent" placeholder="write about user.." rows="5" cols="5" required></textarea>
                    <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
                    name = "entry_create">submit</button>
                </form>       
            </div>

            </div>  


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
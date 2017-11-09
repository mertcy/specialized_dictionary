<?php
    define("TITLE", "home | specialized dictionary");
    include('includes/header.php');
    session_start();
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


    <div class = "containerrr">
            <form class="form-group" role = "form"
                method = "post" action="addentry.php">
                <br></br>
                <input type="text" id="ename" name="entrytitle" placeholder="write about something.." required>
                <br></br>
                <textarea id="econtent" name="entrycontent" placeholder="write more about it.." rows="20" cols="12250" align="left" required></textarea>
                <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
                name = "entry_create">submit</button>
            </form>       
        </div>


        </form>
    </div>         
</div>


<?php
    include('includes/footer.php');
?>
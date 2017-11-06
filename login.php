<?php
    define("TITLE", "log in | specialized dictionary");
    include('includes/header.php');
    ob_start();
    session_start();
?>

<?
    // error_reporting(E_ALL);
    // ini_set("display_errors", 1);
?>

      <h2>Enter Username and Password</h2>
    <div class = "container2">
    <div class="video"> <!-- bu kısım gündem için -->
            <div id="index">
                <?php
                    define("TITLE", "#trending");
                    include('entrytitlepaneHeader.php');
                    include('entrytitlepane.php');
                ?>

            </div>      
        </div>
      <div class = "main">  
      <div class = "container form-signin">
         
 

        <div class = "containerr">
            <form class = "form-signin" role = "form"
                method = "post">
                <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
                <input type = "text" class = "form-control" 
                name = "username" placeholder = "..username" 
                required autofocus></br>
                <input type = "password" class = "form-control"
                name = "password" placeholder = "..password" required>
                <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
                name = "login">log in</button>
            </form>       
        </div>

        <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
                                         
            // attempt a connection
            $dbh = pg_connect("host=localhost dbname=specialized_db user=specialized_user password=spec7");
            if (!$dbh) {
                die("Error in connection: " . pg_last_error());
            }

                // execute query
                $sql = "SELECT * FROM specialized_sch.users";

                $result = pg_query($dbh, $sql);

                if (!$result) {
                    die("Error in SQL query: " . pg_last_error());
                }


                $username_db = $password_db = "";
                $username = $_POST['username'];
                $password = $_POST['password'];
                $_SESSION['valid'] = false;
                $looked = false;

                while ($row = pg_fetch_row($result)) {
                    $username_db = $row[2];
                    $password_db = $row[3];
                    if(($username == $username_db) && ($password == $password_db)) { // user credentials are correct
                        $_SESSION['valid'] = true;
                        $_SESSION['timeout'] = time();
                        echo "<script type='text/javascript'>alert('logged in as $username');</script>";
                        include('loginRedirect.php');
                    }
                    $looked = true;
                }

                if(($_SESSION['valid'] == false) && ($looked == true)) {
                    echo "<script type='text/javascript'>alert('! wrong username - password combination');</script>";
                }   
            }


                // free memory
                pg_free_result($result);

                // close connection
                pg_close($dbh);
        


            
        ?>


      </div>
      </div> <!-- /container -->
    </div>  
    </div>

<?php
    include('includes/footer.php');
?>
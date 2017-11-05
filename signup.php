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

    <h2>Registeration</h2> 
        <div class = "container form-signup">
            <form method = "post" action = "/php/php_form_introduction.htm">
            
            <table>
                <tr>
                    <td>name:</td> 
                    <td><input type = "text" name = "name" required></td>
                </tr>
                <tr>
                    <td>last name:</td> 
                    <td><input type = "text" name = "lastname" required></td>
                </tr>
                <tr>
                    <td>e-mail:</td>
                    <td><input type = "text" name = "email" required></td>
                </tr>

                <tr>
                    <td>username:</td>
                    <td><input type = "text" name = "usr" required></td>
                </tr>

                </tr>
                    <td>password:</td>
                    <td><input type="password" placeholder="enter password:" name="psw" required></td>

                    <td>repeat password:</td>
                    <td><input type="password" placeholder="repeat password" name="psw-repeat" required></td>
   
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type = "radio" name = "gender" value = "m">male
                        <input type = "radio" name = "gender" value = "f">female
                    </td>
                </tr>
   
                <tr>
                    <td>
                    <div class="clearfix">
                        <button type="button"  class="cancelbtn">cancel</button>
                        <button type="submit" class="signupbtn">sign Up</button>
                    </div>
                    </td>
                </tr>

                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>



            </table>

            </form>
        </div> <!-- /container -->
         
        <?php                  
                // define variables and set to empty values
                $name = $lastname = $email = $username = $password = $country = $city = $gender = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {   
                    $name = test_input($_POST["name"]); 
                    $lastname = test_input($_POST["lastname"]);  
                    $email = test_input($_POST["email"]);  
                    $username = test_input($_POST["usr"]);  
                    $password = test_input($_POST["pwd"]); 
                    $gender = test_input($_POST["gender"]);
                }


                // attempt a connection
                $dbh = pg_connect("host=localhost dbname=specialized_db user=specialized_user password=spec7");
                if (!$dbh) {
                    die("Error in connection: " . pg_last_error());
                }
                date_default_timezone_set('Europe/Istanbul');
                $today = date('d.m.Y H:i:s', time());

                // execute query
                $sql = "INSERT INTO specialized_sch.users VALUES (2, mt_rand(0,100000000), $username, $password, $email, 
                        $firstname, $lastname, $gender, null, $today, null, null, 0, 0)";
                // default user 2 is rookie, with 0 rank points and 0 coins        

                $result = pg_query($dbh, $sql);

                if (!$result) {
                    die("Error in SQL query: " . pg_last_error());
                }

                // free memory
                pg_free_result($result);

                // close connection
                pg_close($dbh);

                function test_input($data) {   
                    $data = trim($data); 
                    $data = stripslashes($data);  
                    $data = htmlspecialchars($data);
   
                    return $data;
                }

        ?>

<?php
    include('includes/footer.php');
?>

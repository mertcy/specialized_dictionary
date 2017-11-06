<?php
    define("TITLE", "sign up | specialized dictionary");
    include('includes/header.php');
    ob_start();
    session_start();
?>

<?
    // error_reporting(E_ALL);
    // ini_set("display_errors", 1);
?>

    <h2>Registration</h2> 
        <div class="video"> <!-- bu kısım gündem için -->
            <div id="index">
                <?php
                    include('entrytitlepaneHeader.php');
                    include('entrytitlepane.php');
                ?>

            </div>      
        </div>
        <div class="main"><!-- bu kısım main sayfa için -->
            <div class = "container form-signup">
            <form method = "post" action = "signupRedirect.php">
            
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
                    <td><input type="password" placeholder="enter password:" name="pwd" required></td>

                    <td>repeat password:</td>
                    <td><input type="password" placeholder="repeat password" name="pwd-repeat" required></td>
                <tr>
                    <td>Gender:</td>
                    <td>
                <ul>
                    <li>
                        <input type="radio" id="f-option" name="selector">
                        <label for="f-option">male</label>
    
                        <div class="check"></div>
                    </li>
                    <li>
                        <input type="radio" id="s-option" name="selector">
                        <label for="s-option">female</label>
    
                        <div class="check"><div class="inside"></div></div>
                     </li>

                </ul>   
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
        </div>
 </div>


    </div>    


<?php
    include('includes/footer.php');
?>

<?php
    $username = $password = $name = $lastname = $gender = $email = $id = $today = "";
    if(isset($_POST['usr']) && isset($_POST['pwd']) && isset($_POST['name']) && isset($_POST['lastname']) &&
        isset($_POST['email']) && isset($_POST['gender'])) {
        $username = $_POST['usr'];
        $password = $_POST['pwd'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];   
        $gender = $_POST['gender'];
        $email = $_POST['email'];

        echo "username: " . $username;
        echo "<br>";
        echo "password: " . $password;
        echo "<br>";
        echo "name: " . $name;
        echo "<br>";
        echo "last name: " . $lastname;
        echo "<br>";
        echo "gender: " . $gender;
        echo "<br>";
        echo "email: " . $email;
        echo "<br>";

        date_default_timezone_set('Europe/Istanbul');
        $today = date('d.m.Y H:i:s', time());
        srand(make_seed());
        $id = rand(); 
                // attempt a connection
                $dbconn = pg_connect("host=localhost dbname=specialized_db user=specialized_user password=spec7");
                if (!$dbconn) {
                    die("Error in connection: " . pg_last_error());
                }



                // execute query
                $qry = "INSERT INTO specialized_sch.users (user_type_id, user_id, user_name, password, email, first_name, last_name,
                                                            gender, birth_date, sign_up_date, country, city, rank_point, coin)
                                                            VALUES (2, $id, '".$username."', '".$password."', '".$email."', 
                                                    '".$name."', '".$lastname."', '".$gender."', null, TIMESTAMP '$today', null, null, 0, 0)";
                // default user 2 is rookie, with 0 rank points and 0 coins        

                $insert = pg_query($dbconn, $qry);

                /*if (pg_query($dbconn, $insert)) {
                    echo "Data entered successfully. ";
                }
                else {
                    echo "Data entry unsuccessful. ";
                    die("Error in SQL query: " . pg_last_error());
                }*/

                // free memory
                pg_free_result($insert);

                // close connection
                pg_close($dbconn);

                


                header('Refresh: 2; URL = index.php');
    }

?>

<?php
                function make_seed()
                {
                  list($usec, $sec) = explode(' ', microtime());
                  return $sec + $usec * 1000000;
                }
?>
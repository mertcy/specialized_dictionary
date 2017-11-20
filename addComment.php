<?php
    session_start();
    $comment_content = $_POST['comment'];
    
                                         
    $dbconn = pg_connect("host=localhost dbname=specialized_db user=specialized_user password=spec7");
    if (!$dbconn) {
        die("Error in connection: " . pg_last_error());
    }


    $user_id = $_SESSION['userid'];
    
    date_default_timezone_set('Europe/Istanbul');
    $today = date('Y-m-d H:i:s', time());

    srand(make_seed());
    $comment_id = rand();

    $qry = "INSERT INTO specialized_sch.wall(wall_id, comment_id)VALUES ($user_id, $comment_id)";
    $insert = pg_query($dbconn, $qry); 
    if (!$insert) {
        die("Error in SQL query: " . pg_last_error());
    }

    $qry = "INSERT INTO specialized_sch.comment(
            comment_id, commenter_user_id, comment_content, comment_creation_date, comment_edited_date)
            VALUES ($comment_id, $user_id, '$comment_content', '$today', '$today');";
    $insert = pg_query($dbconn, $qry); 
    if (!$insert) {
        die("Error in SQL query: " . pg_last_error());
    }
    



    pg_free_result($insert);

    pg_close($dbconn);

    header('Refresh: 2; URL = index.php');

?>

<?php
                function make_seed()
                {
                  list($usec, $sec) = explode(' ', microtime());
                  return $sec + $usec * 1000000;
                }
?>
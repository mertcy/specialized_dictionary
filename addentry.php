<?php
    session_start();
    $title_name = $_POST['entrytitle'];
    $entry_body = $_POST['entrycontent'];
    
                                         
    $dbconn = pg_connect("host=localhost dbname=specialized_db user=specialized_user password=spec7");
    if (!$dbconn) {
        die("Error in connection: " . pg_last_error());
    }


    $user_id = $_SESSION['userid'];
    
    date_default_timezone_set('Europe/Istanbul');
    $today = date('Y-m-d H:i:s', time());

    $qry = "SELECT t.title_id FROM specialized_sch.title AS t WHERE title_name = '" .$title_name. "'";
    $result = pg_query($dbconn, $qry);
    $row = pg_fetch_row($result);
    $title_id = $row[0];

    if ($title_id == null) {
        srand(make_seed());
        $title_id = rand();
        $qry = "INSERT INTO specialized_sch.title(user_id, title_id, title_name, title_creation_date, title_edited_date, title_up_votes, title_down_votes)
                VALUES ($user_id, $title_id, '$title_name', TIMESTAMP '$today', TIMESTAMP '$today', 0, 0)";
        $insert = pg_query($dbconn, $qry); 
        if (!$insert) {
            die("Error in SQL query: " . pg_last_error());
        }      
    }

    srand(make_seed());
    $entry_id = rand(); 
    
    $qry = "INSERT INTO specialized_sch.entry (user_id, title_id, entry_id, entry_body, entry_creation_date, entry_edited_date,
            entry_up_votes, entry_down_votes) VALUES ($user_id, $title_id, $entry_id, '".$entry_body."', TIMESTAMP '$today', TIMESTAMP '$today', 0, 0)";
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
<?php
    session_start();
    $title_name = $_POST['entrytitle'];
    $entry_body = $_POST['entrycontent'];
    
                                         
    $dbconn = pg_connect("host=localhost dbname=specialized_db user=specialized_user password=spec7");
    if (!$dbconn) {
        die("Error in connection: " . pg_last_error());
    }

    $qry = "INSERT INTO specialized_sch.entry (user_id, title_id, entry_id, entry_body, entry_creation_date, entry_edited_date,
            entry_up_votes, entry_down_votes) VALUES (null, 2, 44446, '".$entry_body."', null, null, 0, 0)";
    $insert = pg_query($dbconn, $qry);
    if (!$insert) {
        die("Error in SQL query: " . pg_last_error());
    }

    pg_free_result($insert);

    pg_close($dbh);

    header('Refresh: 2; URL = index.php');

?>
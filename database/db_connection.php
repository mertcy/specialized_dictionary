<?php
    // attempt a connection
    $dbh = pg_connect("host=localhost dbname=specialized_db user=specialized_user password=spec7");
    if (!$dbh) {
        die("Error in connection: " . pg_last_error());
    }

    // execute query
    $sql = "SELECT * FROM specialized_sch.Users";
    $result = pg_query($dbh, $sql);


    if (!$result) {
        die("Error in SQL query: " . pg_last_error());
    }

    // iterate over result set
    // print each row
    while ($row = pg_fetch_array($result)) {
        echo "Country code: " . $row[0] . "<br />";
        echo "Country name: " . $row[1] . "<p />";
    }

    // free memory
    pg_free_result($result);

    // close connection
    pg_close($dbh);

?>
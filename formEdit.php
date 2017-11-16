<?php
    session_start();
    $entry_id = $_GET['entry_id'];
?>
<form action="entryedit.php?entry_id=<?php echo $entry_id?>" method="post">
    <div>
	
	<?php
                        // attempt a connection
                        $dbh = pg_connect("host=localhost dbname=specialized_db user=specialized_user password=spec7");
                        if (!$dbh) {
                            die("Error in connection: " . pg_last_error());
                        }

                            // execute query
                            $sql = "SELECT * FROM specialized_sch.entry WHERE entry_id=$entry_id";

                            $result = pg_query($dbh, $sql);

                            if (!$result) {
                                die("Error in SQL query: " . pg_last_error());
                            }
                      
                        while ($row = pg_fetch_row($result)) {
                        ?>
						
        <textarea name="entry_body"><?php echo $row[3] ?></textarea>
	<?php
	
                            }
                            // free memory
                            pg_free_result($result);
                
                            // close connection
                            pg_close($dbh);
                        ?>	
    </div>
    <button type="submit">Save</button>
</form>
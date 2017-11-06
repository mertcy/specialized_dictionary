
                    <div class="scrollbar" id="style-2">
                    <div class="force-overflow">
                        <ul class="topics">
                        <?php
                        // attempt a connection
                        $dbh = pg_connect("host=localhost dbname=specialized_db user=specialized_user password=spec7");
                        if (!$dbh) {
                            die("Error in connection: " . pg_last_error());
                        }

                            // execute query
                            $sql = "SELECT * FROM specialized_sch.title order by title_edited_date desc";

                            $result = pg_query($dbh, $sql);

                            if (!$result) {
                                die("Error in SQL query: " . pg_last_error());
                            }
                        $content="asdad";
                        while ($row = pg_fetch_row($result)) {
                        ?>
                        <li class="topic"><a href="index.php?title_id=<?php echo $row[1] ?>"><?php echo $row[2] ?></a></li>
                        
                        <?php
                            }
                            // free memory
                            pg_free_result($result);
                
                            // close connection
                            pg_close($dbh);
                        ?>
                        </ul>
                    </div>
                </div>

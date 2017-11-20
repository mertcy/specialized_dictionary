<?php
session_start();
?>

<div class="scrollbar" id="style-2">
    <div class="force-overflow">
        <h2>Top UPVoted Titles</h2>
        <ul id="entry_list">
            <?php
            // attempt a connection
            $dbh = pg_connect("host=localhost dbname=specialized_db user=specialized_user password=spec7");
            if (!$dbh) {
                die("Error in connection: " . pg_last_error());
            }

            $top_titles_sql = "SELECT * FROM title ORDER BY title_up_votes DESC LIMIT 5";

            $result = pg_query($dbh, $top_titles_sql);
            if (!$result) {
                die("Error in SQL query: " . pg_last_error());
            }
            while ($row = pg_fetch_row($result)) {
                ?>
                <h4 align="middle">
                    <a href="index.php?title_id=<?php echo $row[0]; ?>"><?php echo $row[2]; ?></a> (<?php echo $row[5]; ?>)
                </h4>


                <li class="entry-title">
                    <div><!-- bu kısım face twitter up kısmı -->
                        <div>
                            <div>
                                <span class="entry_date"><?php echo $row[3]; ?></span>
                                <span class="entry_author"></span>
                            </div>
                        </div>
                    </div>
                </li> <?php }
            // free memory
            pg_free_result($result);

            // close connection
//            pg_close($dbh);
            ?>
        </ul>
        <h2>Top DOWNVoted Titles</h2>
        <ul id="entry_list">
            <?php

            $down_titles_sql = "SELECT * FROM title ORDER BY title_up_votes ASC LIMIT 5";

            $result = pg_query($dbh, $down_titles_sql);
            if (!$result) {
                die("Error in SQL query: " . pg_last_error());
            }
            while ($row = pg_fetch_row($result)) {
                ?>
                <h4 align="middle">
                    <a href="index.php?title_id=<?php echo $row[0]; ?>"><?php echo $row[2]; ?></a> (<?php echo $row[5]; ?>)
                </h4>


                <li class="entry-title">
                    <div><!-- bu kısım face twitter up kısmı -->
                        <div>
                            <div>
                                <span class="entry_date"><?php echo $row[3]; ?></span>
                                <span class="entry_author"></span>
                            </div>
                        </div>
                    </div>
                </li> <?php }
            // free memory
            pg_free_result($result);

            // close connection
            //            pg_close($dbh);
            ?>
        </ul>
    </div>
</div>
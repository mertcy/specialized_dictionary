<?php
    session_start();
    $title_id = $_GET['title_id'];
?>
<ul id="entry_list">
                <br></br>
				<?php
                    if (isset($_GET['title_id'])) {
                                        // attempt a connection
                                        $dbh = pg_connect("host=localhost dbname=specialized_db user=specialized_user password=spec7");
                                        if (!$dbh) {
                                            die("Error in connection: " . pg_last_error());
                                        }
						
							// execute query
								$sql = "SELECT * FROM specialized_sch.entry where title_id=$title_id order by entry_creation_date desc";

								$result = pg_query($dbh, $sql);

								if (!$result) {
									die("Error in SQL query: " . pg_last_error());
								}
							
							while ($row = pg_fetch_row($result)) {
							    $sql2 = "SELECT first_name,last_name FROM specialized_sch.users where user_id=$row[0]";
							    $result2 = pg_query($dbh, $sql2);							
                                $row2 = pg_fetch_row($result2);
                    
				?>
                <li class="entry-title"><!-- bu kısım entry için (up dahil) -->
                    <?php echo $row[8] ?>
                    <br></br>
                    <div class="content"><!-- bu kısım entry için -->
                        <?php echo $row[3] ?>
                    </div>
                    <footer>
                        <div><!-- bu kısım face twitter up kısmı -->
                            <div>
                                <br></br>
                                <span><!-- bu kısım face twitter kısmı -->
                                <img class="icons" src="img/facebook-grey.png"  width="30" height="30">
                                </span>
                                <span><!-- bu kısım up down kısmı -->
                                <img class="icons" src="img/twitter1.png"  width="30" height="30">
                                </span>
                                <div>
                                   <a class="entry_date"><?php echo $row[5] ?></a>
                                   <a class="entry_author"><?php echo "$row2[0] $row2[1]" ?></a>
                                </div>
                            </div>
                        </div>                        
                            <div>
                                <a class="dropdown_toggle"> </a>
                                <ul class="dropdown_menu_report">
                                    <li>
                                        <a class="report_link"><!--şikayet--></a>
                                    </li>
                                </ul>
                            </div>
                    </footer>
                        </li> <?php }
                                 // free memory
                                 pg_free_result($result);
                                                    
                                 // close connection
                                 pg_close($dbh);
                            }
                        ?>
            </ul>
<?php
    session_start();
    $entry_id = $_GET['entry_id'];
?>
				<?php                    
                                        // attempt a connection
                                        $dbh = pg_connect("host=localhost dbname=specialized_db user=specialized_user password=spec7");
                                        if (!$dbh) {
                                            die("Error in connection: " . pg_last_error());
                                        }
								// execute query
								$sql = "UPDATE specialized_sch.entry SET entry_down_votes=entry_down_votes+1 WHERE entry_id=$entry_id";
								$result = pg_query($dbh, $sql);
								$row = pg_fetch_row($result);
								if (!$result) {
									die("Error in SQL query: " . pg_last_error());
                                }
								else
								{
								include('voteRedirect.php');
								}	
								
								// free memory
                                pg_free_result($result);
                                                    
                                // close connection
                                pg_close($dbh);
                ?>   
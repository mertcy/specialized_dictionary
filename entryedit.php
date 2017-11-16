<?php
    session_start();
    $entry_id = $_GET['entry_id'];
    $entry_body = $_POST['entry_body'];
?>
				<?php
                    
                                        // attempt a connection
                                        $dbh = pg_connect("host=localhost dbname=specialized_db user=specialized_user password=spec7");
                                        if (!$dbh) {
                                            die("Error in connection: " . pg_last_error());
                                        }
                                                                                                                    
							// execute query
								$today = date('Y-m-d H:i:s', time());
								$sql = "UPDATE specialized_sch.entry SET entry_body='$entry_body',entry_edited_date=TIMESTAMP '$today' WHERE entry_id=$entry_id";
								
								$result = pg_query($dbh, $sql);
								$row = pg_fetch_row($result);

								if (!$result) {
									die("Error in SQL query: " . pg_last_error());
                                }
								
								if ($entry_body == '')
								{
									// generate error message
									$error = 'ERROR: Please fill in all required fields!';
									// if either field is blank, display the form again
									echo $error;
								}
								
								if( isset( $_POST['entry_body'])) {
								include('editRedirect.php');
								}	
                       
                                 // free memory
                                 pg_free_result($result);
                                                    
                                 // close connection
                                 pg_close($dbh);
                        ?>      
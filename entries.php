<?php
    session_start();

	$user_id=$_SESSION['userid'];
?>

<div class="scrollbar" id="style-2">
<div class="force-overflow">
<ul id="entry_list">
                <br></br>
				<?php
                    
                                        // attempt a connection
                                        $dbh = pg_connect("host=localhost dbname=specialized_db user=specialized_user password=spec7");
                                        if (!$dbh) {
                                            die("Error in connection: " . pg_last_error());
                                        }

                                        $sql = "SELECT * FROM specialized_sch.entry where user_id=$user_id";                                        
                                        $result = pg_query($dbh, $sql);
                                        $row = pg_fetch_row($result);
										
										
										while ($row = pg_fetch_row($result)) {
										    $sql2 = "SELECT title_name FROM specialized_sch.title where title_id=$row[1]";
										    $result2 = pg_query($dbh, $sql2);							
										    $row2 = pg_fetch_row($result2);
										    $entry_title = $row2[0];
									
										?>

										<h4 align="middle"><?php echo $entry_title;?></h4>

										<?php
										
                                        if (!$result2) {
                                            die("Error in SQL query: " . pg_last_error());
                                        }
										$sql3 = "SELECT first_name,last_name FROM specialized_sch.users where user_id=$user_id";
										$result3 = pg_query($dbh, $sql3);							
										$row3 = pg_fetch_row($result3);
	
				?>        
                <li class="entry-title"><!-- bu kısım entry için (up dahil) --> 
                               
                    <?php echo $row[8] ?>
                  
                    <div class="content"><!-- bu kısım entry için -->
                        <?php echo $row[3] ?>
                    </div>
                    <footer>
                        <div><!-- bu kısım face twitter up kısmı -->
                            <div>
                            <?php
								if ($row[0]==$_SESSION['userid'])
								{
								?>
								<a href="formEdit.php?entry_id=<?php echo $row[2]?>"><img class="icons" src="img/pen.png"  width="30" height="30"></a>
								<?php
								}
								
								?>
								
								<?php
								if ($row[0]==$_SESSION['userid'])
								{
								?>
								<a href="entrydelete.php?entry_id=<?php echo $row[2]?>"><img class="icons" src="img/delete.jpg"  width="30" height="30"></a>
								<?php
								}
								
								?>
                                <span><!-- bu kısım face twitter kısmı -->
                                <img class="icons" src="img/facebook-grey.png"  width="30" height="30">
                                </span>
                                <span><!-- bu kısım up down kısmı -->
                                <img class="icons" src="img/twitter1.png"  width="30" height="30">
                                </span>
                                <div>
                                   <a class="entry_date"><?php echo $row[5] ?></a>
                                   <a class="entry_author"><?php echo "$row3[0] $row3[1]" ?></a>
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
                            
                        ?>
            </ul>
</div>            
</div>      
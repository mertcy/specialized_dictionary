<?php
    session_start();
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

                                        $sql = "";
                                        if(!isset($_SESSION['userid'])) {
                                            $sql ="SELECT * FROM ( SELECT e.user_id, e.title_id, e.entry_id, e.entry_body,
                                                    e.entry_creation_date, e.entry_edited_date, ROW_NUMBER ( )
                                                    OVER (PARTITION BY e.title_id ORDER BY e.entry_edited_date desc)
                                                    FROM specialized_sch.entry AS e, specialized_sch.users AS u
                                                    WHERE e.user_id = u.user_id AND u.user_type_id <> 2)
                                                    x WHERE ROW_NUMBER BETWEEN 1 AND 1;";                                                                                                                   
                                        } else if(isset($_SESSION['userid'])) {
                                            $sql ="SELECT * FROM ( SELECT user_id,title_id,entry_id, entry_body,entry_creation_date,entry_edited_date, ROW_NUMBER ( ) OVER (PARTITION BY title_id ORDER BY entry_edited_date desc) FROM entry ) x WHERE ROW_NUMBER BETWEEN 1 AND 1";
                                        }									
										
                                        $result = pg_query($dbh, $sql);
                                      
										
                                        if (!$result) {
                                            die("Error in SQL query: " . pg_last_error());
                                        }                                                                              
								while ($row = pg_fetch_row($result)) {
								$sql2 = "SELECT title_name FROM specialized_sch.title where title_id=$row[1]";
                                        $result2 = pg_query($dbh, $sql2);
                                        $row2 = pg_fetch_row($result2);
										$selected_title = $row2[0];

								?>		
										<h4 align="middle"><?php echo $selected_title;?></h4>	
										
							<?php
							
						
							    $sql3 = "SELECT first_name,last_name FROM specialized_sch.users where user_id=$row[0]";
							    $result3 = pg_query($dbh, $sql3);							
                                $row3 = pg_fetch_row($result3);
                    
							?> 		
								<?php		
										
								if (!$result) {
									die("Error in SQL query: " . pg_last_error());
                                }

                                
                                ?>

      
                <li class="entry-title"><!-- bu kısım entry için (up dahil) --> 
                        <!--        <br></br> -->
                    <?php echo $row[8] ?>
           <!--         <br></br> -->
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
								
                                if(isset($_SESSION['userid'])) {
                                ?>
                                    <a href="entryupvote.php?entry_id=<?php echo $row[2]?>"><img class="icons" src="img/upvote.png"  width="30" height="30"> </a>								
								    <a href="entrydownvote.php?entry_id=<?php echo $row[2]?>"><img class="icons" src="img/downvote.png"  width="30" height="30"> </a>								
								    <img class="icons" src="img/favourites.png"  width="30" height="30">
                                <?php
                                }
                                ?>

                                <!--         <br></br> -->
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
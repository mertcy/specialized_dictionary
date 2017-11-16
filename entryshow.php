<?php
    session_start();
    $title_id = $_GET['title_id'];
?>

<div class="scrollbar" id="style-2">
<div class="force-overflow">
<ul id="entry_list">
                <br></br>
				<?php
                    if (isset($_GET['title_id'])) {
                                        // attempt a connection
                                        $dbh = pg_connect("host=localhost dbname=specialized_db user=specialized_user password=spec7");
                                        if (!$dbh) {
                                            die("Error in connection: " . pg_last_error());
                                        }

                                        $sql = "SELECT title_name FROM specialized_sch.title where title_id=$title_id";                                        
                                        $selected_title = pg_query($dbh, $sql);
                                        $row2 = pg_fetch_row($selected_title);
                                        $selected_title = $row2[0];
                                        if (!$selected_title) {
                                            die("Error in SQL query: " . pg_last_error());
                                        }
                                        
                                        
                                        $sql = "";
                                        if(!isset($_SESSION['userid'])) {
                                            $sql = "SELECT e.* FROM specialized_sch.entry AS e, specialized_sch.users AS u
                                                    WHERE e.title_id=$title_id AND e.user_id = u.user_id AND u.user_type_id <> 2 order by e.entry_creation_date desc";
                                        } else if(isset($_SESSION['userid'])) {
                                            $sql = "SELECT * FROM specialized_sch.entry where title_id=$title_id order by entry_creation_date desc";
                                        }        

								$result = pg_query($dbh, $sql);

								if (!$result) {
									die("Error in SQL query: " . pg_last_error());
                                }

                                
                                ?>

                                <h4 align="middle"><?php echo $selected_title;?></h4>

                                <?php
							
							while ($row = pg_fetch_row($result)) {
							    $sql2 = "SELECT first_name,last_name FROM specialized_sch.users where user_id=$row[0]";
							    $result2 = pg_query($dbh, $sql2);							
                                $row2 = pg_fetch_row($result2);
                    
				?>        
                <li class="entry-title"><!-- bu kısım entry için (up dahil) --> 
                                <br></br>
                    <?php echo $row[8] ?>
                    <br></br>
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
</div>            
</div>        
<?php
    session_start();
    define("TITLE", "home | specialized dictionary");
    include('includes/header.php');
    $cur_usr = $_SESSION['currentuser'];
?>

        <div class="index2"> <!-- bu kısım gündem için -->
            <div id="index" >
                <?php    
                    include('entrytitlepaneHeader.php');
                    include('entrytitlepane.php');
                ?>
            </div>   
        </div>
        <div class="userpage">
            <p><!--main --></p>
            <h4><?php  echo $cur_usr;?><h4>

            <div id="wall">

            <div class = "containerrr">
                <form class="form" role = "form"
                    method = "post" action="addComment.php">
                    <textarea id="comment" name="comment" placeholder="write about user.." rows="5" cols="5" required></textarea>
                    <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
                    name = "comment_create">submit</button>
                </form>       
            </div>


            <?php
             $dbh = pg_connect("host=localhost dbname=specialized_db user=specialized_user password=spec7");
                                                   if (!$dbh) {
                                                       die("Error in connection: " . pg_last_error());
                                                   }
           
                                                   $sql = "SELECT c.* FROM specialized_sch.wall AS w, specialized_sch.comment AS c
                                                            WHERE c.comment_id = w.comment_id AND w.wall_id = c.commenter_user_id";                                        
                                                   $qry= pg_query($dbh, $sql);
                                                  
                                           
                                           ?>
           
                                           <h4 align="middle"><?php echo $selected_title;?></h4>
           
                                           <?php
                                       
                                       while ($row = pg_fetch_row($qry)) {
                               
                           ?>        
                           <li class="comments"><!-- bu kısım entry için (up dahil) --> 
                                           <br></br>
                               
                               <br></br>
                               <div class="content"><!-- bu kısım entry için -->
                                    <?php echo $row[1] ?>
                                    <br></br>
                                    <?php echo $row[2] ?>
                                    <br></br>
                                    <?php echo $row[3] ?>
                                    <br></br>
                                    <?php echo $row[4] ?>
                                    <br></br>
                               </div>


                                   </li> <?php }
                                            // free memory
                                            pg_free_result($result);
                                                               
                                            // close connection
                                            pg_close($dbh);
                                                                           
            ?>




            </div>  


            <div class=user_item>
            <?php    
                include('profilePane.php');
            ?>

            </div>     
            
            <div id="profilenav" class="profilenav">
            <div>

        </div>
    </div>

<?php
    include('includes/footer.php');
?>
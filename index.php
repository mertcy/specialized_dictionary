<?php
    define("TITLE", "home | specialized dictionary");
    include('includes/header.php');
?>

        <div class="index2"> <!-- bu kısım gündem için -->
            <div id="index" >
                <?php    
                    include('entrytitlepaneHeader.php');
                    include('entrytitlepane.php');
                ?>
            </div>   
        </div>
        <div class="main"><!-- bu kısım main sayfa için -->
            <p><!--main --></p>
            <h1 id="title" data-title="" data-id="" data-slug="" data-vote-url="" data-unvote-url="" data-commet-vote-url="" ><!-- main başlığı --><h1>
            <ul id="entry_list">
                <br></br>
                <li class="entry-title"><!-- bu kısım entry için (up dahil) -->
                    Lorem ipsum dolor sit amet, consectetur
                    <br></br>
                    <div class="content"><!-- bu kısım entry için -->
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam,
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
                                   <a class="entry_date">02/11/2017</a>
                                   <a class="entry_author">YelenSel</a>
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
                </li>
            </ul>

        </div>
    </div>

<?php
    include('includes/footer.php');
?>

<!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit,
   sed do eiusmod tempor incididunt ut labore et dolore magna
   aliqua. Ut enim ad minim veniam, quis nostrud exercitation
   ullamco laboris nisi ut aliquip ex ea commodo consequat. 
   Duis aute irure dolor in reprehenderit in voluptate velit 
   esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
   occaecat cupidatat non proident, sunt in culpa qui officia
   deserunt mollit anim id est laborum. -->
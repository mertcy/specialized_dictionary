<?php
    define("TITLE", "sport | specialized dictionary");
    include('includes/header.php');
?>

        <div class="sport"> <!-- bu kısım gündem için -->
            <div id="index">
                <?php    
                    include('entrytitlepaneHeader.php');
                    include('entrytitlepane.php');
                ?>

            </div>
            <ul class="topics">
                <li><!-- bu kısım gündem başlığı için --></li>
                <li><!-- bu kısım gündem başlığı için --></li>
                <li><!-- bu kısım gündem başlığı için --></li>
                <li><!-- bu kısım gündem başlığı için --></li>
                <li><!-- bu kısım gündem başlığı için --></li>
            </ul>
                
        </div>
        <div class="main"><!-- bu kısım main sayfa için -->
            <p><!--main --></p>
            <h1 id="title" data-title="" data-id="" data-slug="" data-vote-url="" data-unvote-url="" data-commet-vote-url="" ><!-- main başlığı --><h1>
            <ul id="entry_list">
                <li><!-- bu kısım entry için (up dahil) -->
                    <div class="content"><!-- bu kısım entry için -->

                    </div>
                    <footer>
                        <div><!-- bu kısım face twitter up kısmı -->
                            <span><!-- bu kısım face twitter kısmı --></span>
                            <span><!-- bu kısım up down kısmı --></span>
                        </div>
                            <a class="entry_date"></a>
                            <a class="entry_author"></a>
                            <div>
                                <a class="dropdown_toggle"> </a>
                                <ul class="dropdown_menu_report">
                                    <li>
                                        <a class="report_link"><!--şikayet--></a>
                                    </li>
                                </ul>
                            </div>
                        <div><!-- bu kısım tarih ve kişi kısmı --></div>
                    </footer>
                </li>
            </ul>

        </div>
    </div>

<?php
    include('includes/footer.php');
?>
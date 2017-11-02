<?php
    define("TITLE", "today | specialized dictionary");
    include('includes/header.php');
?>
        <form>
            <input type="text" name="search" placeholder="Search..">
        </form>
    <div id="content">
        <hr>
            <h1>specialized dictionary</h1>
            <p>is the place where you express yourself with anonimity..</p>
        <hr>
    </div><!-- content -->
        <!-- content -->
    <div class="container"><!--Bu kısım gündem ve main sayfa için -->
        <div class="today"> <!-- bu kısım gündem için -->
            <div id="index">
                <p> Today </p>
                    <div class="scrollbar" id="style-2">
                     <div class="force-overflow">
                        <ul class="topics">
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                 sed do eiusmod tempor incididunt ut labore et dolore magna
                                 aliqua. Ut enim ad minim veniam,
                                 <!-- bu kısım gündem başlığı için --></li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                 sed do eiusmod tempor incididunt ut labore et dolore magna
                                 aliqua. Ut enim ad minim veniam,
                                 <!-- bu kısım gündem başlığı için --></li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                 sed do eiusmod tempor incididunt ut labore et dolore magna
                                 aliqua. Ut enim ad minim veniam,
                                 <!-- bu kısım gündem başlığı için --></li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                 sed do eiusmod tempor incididunt ut labore et dolore magna
                                 aliqua. Ut enim ad minim veniam,
                                 <!-- bu kısım gündem başlığı için --></li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                 sed do eiusmod tempor incididunt ut labore et dolore magna
                                 aliqua. Ut enim ad minim veniam,
                                 <!-- bu kısım gündem başlığı için --></li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                 sed do eiusmod tempor incididunt ut labore et dolore magna
                                 aliqua. Ut enim ad minim veniam,
                                 <!-- bu kısım gündem başlığı için --></li>
                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                 sed do eiusmod tempor incididunt ut labore et dolore magna
                                 aliqua. Ut enim ad minim veniam,
                                 <!-- bu kısım gündem başlığı için --></li>
                        </ul>
                    </div>
             </div>

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
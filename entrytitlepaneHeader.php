
                <table>
                    <tr>
                        <th>
                            <a>
                                <?php
                                    require "entrytitlepaneHeaderTitle.php";
                                    f1();       
                                ?>
                            </a>
                        
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>                       
                            <script>

                            <?php if(isset($_SESSION['userid'])){ ?>
                                $(document).ready(function(){
                                    $("img").click(function(){
                                        $.ajax({
                                            type: 'POST',
                                            url: 'entrytitleNew.php',
                                            success: function(data) {
                                                $("#home-page").load("entrytitleNew.php");
                                            }
                                        });
                                    });
                                });
                            <?php } ?>    
                            </script>

                        <img type="img" src="img/pen.png" title="open new entry title" width="30" height="30" align="right" />
                        </th>
                    </tr>
                </table>

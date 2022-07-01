<?php

function get_head(){
    global $headercss;
    ?>
        <head>
            <link rel="stylesheet" type="text/css" href=<?php echo $headercss; ?>>
            <!--This is being loaded from get_head();-->
        </head>
    <?php
}


function simple_header(){
    global $sitename, $HarBesoegtSide2;
    if(!isset($_SESSION)){
        session_start();
    }
    ?>
    <!--This is being loaded from simple_header();-->
    <div class="header">
        <div class="flex-box">
            <div>
                <p><?php echo $sitename; ?></p>
                <?php
                if(isset($_SESSION['hasSession'])){
                    ?>
                    <p>User has a session</p>
                    <?php
                }
                if(isset($HarBesoegtSide2)){
                    ?>
                    <p>Du er på side 2</p>
                    <?php
                }
                ?>
            </div>
            <div class="menu">
                    <ul>
                        <?php get_menu_items(); ?>
                    </ul>
            </div>
        </div>
    </div>
    <?php
}

function get_menu_items(){
    ?>
        <li><a href="/index.php">Home</a></li>
        <li><a href="/page1.php">Page 1</a></li>
        <li><a href="/page2.php">Page 2</a></li>
    <?php
}

function its_a_trap(){
    get_head();
    simple_header();
    ?>
    <p>This was a trap, you died :(</p>
    <?php
}
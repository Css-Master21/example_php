<?php

    function get_section1(){
        global $contentcss;
        ?>
            <head>
                <link rel="stylesheet" type="text/css" href=<?php echo $contentcss; ?>>
                <!--Where is the server getting "stylesheet" and "text/css" from?;-->
            </head>
        <?php
    }
        
    function get_main_section(){
        ?>
        <section class="main_section">
            <div class="main_container">
                <h1 class="main_header">
                     Some Very Fancy Text</h1>
                <p class="main_para"> 
                     Cool ish text but small<p>
        <?php
    }

    function get_secound_container(){  
        ?>
            <div class="second_container">
                <div class="option_div">
                    <h1 class="option_label">1</h1>
                    <h1 class="option_header">Lorem ipsum</h1>
                    <p class="option_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt<p>
                    <p class="option_icon">♕</p>
                <div>
            <div>

            <div class="second_container">
                <div class="option_div">
                    <h1 class="option_label">1</h1>
                    <h1 class="option_header">Lorem ipsum</h1>
                    <p class="option_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt<p>
                    <p class="option_icon">♕</p>
                <div>
            <div>

            <div class="second_container">
                <div class="option_div">
                    <h1 class="option_label">1</h1>
                    <h1 class="option_header">Lorem ipsum</h1>
                    <p class="option_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt<p>
                    <p class="option_icon">♕</p>
                <div>
            <div>
                
        <?php        
    }

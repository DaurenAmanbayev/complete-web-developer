<?php

if(!isset($_SESSION)) {
    session_start();
    
    $_SESSION['course'] = "PHP sessions are awesome!!";
}
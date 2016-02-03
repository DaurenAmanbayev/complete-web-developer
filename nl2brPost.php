<?php

if(isset($_POST['submit'])) {
    $message = $_POST['message'];
    echo $message."<br>";
    echo "<hr>";
    
    echo nl2br($message);
}


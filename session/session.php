<?php
session_start();
if(isset($_POST['submit'])){
    $user = htmlspecialchars($_POST['username']);
    $pass = $_POST['password'];
    
}


?>
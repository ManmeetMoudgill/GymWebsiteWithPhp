<?php
include './Login&Signup/links.php';
session_start();
if(!isset($_SESSION['username'])){
    ?>
    <script>
        alert('You are already Logged out');
    </script>    
    <?php
    header("location:../main.php");
}
else{
    session_destroy();
    header("location:../main.php");
}
?>
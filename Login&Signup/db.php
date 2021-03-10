
<?php
$server="localhost";
$username="root";
$password="";
$db="gymwebsitebootstrap";

//taking the connection
$con =mysqli_connect($server,$username,$password,$db);
if(!$con)
    echo '<div class="alert alert-danger alert-danger fade show" role="alert">
    <strong>Message!</strong>Some Error Occured.Connection not built.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';



?>
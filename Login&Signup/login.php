<?php
include './Login&Signup/db.php';
if(isset($_POST['submit1'])){


$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM `signup` WHERE `Email`='$email'";
$res=mysqli_query($con,$sql);

/* number of rows */
$numOfRows=mysqli_num_rows($res);
if($numOfRows){
    $dataFetched=mysqli_fetch_assoc($res);
    $passwordEncypted=$dataFetched['Password'];
    $passWordChecked=password_verify($password,$passwordEncypted);
    /* verifiy if password exist in database
     */
    if($passWordChecked){
        $_SESSION['username']=$dataFetched['Username'];
        
    }else{
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Message!</strong>Password Incorrect Make sure you Enter correct Password.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
}else{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Message!</strong>Email Not found,Please Sign Up First.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
}

?>
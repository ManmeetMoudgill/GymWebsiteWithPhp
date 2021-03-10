
<?php
include './Login&Signup/db.php';
include './Login&Signup/links.php';

if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $phoneNumber=$_POST['phoneNumber'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirmPassword=$_POST['confirmPassword'];

        $passwordEncrypted=password_hash($password,PASSWORD_BCRYPT);
        $confirmPasswordEncrypted=password_hash($confirmPassword,PASSWORD_BCRYPT);

        $query="SELECT * FROM `signup` WHERE `Email`= '$email'";
        $result=mysqli_query($con,$query);

        /* fetching the number of rows */
        $numOfRows=mysqli_num_rows($result);
        if($numOfRows>=1){
            echo '<div class=" my-1 alert alert-warning alert-dismissible  fade show" role="alert">
            <strong>Message!</strong>You are Already Registered,Login to Enter into my website.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            
            
        }
        else if($password===$confirmPassword){
            $query1="INSERT INTO `signup`( `Username`, `PhoneNumber`, `Email`, `Password`, `CPassword`) VALUES ('$username','$phoneNumber','$email','$passwordEncrypted','$confirmPasswordEncrypted')";
            $res=mysqli_query($con,$query1);
                if($res){
                echo '<div class="alert my-1 alert-success alert-dismissible  fade show" role="alert">
                <strong>Message!</strong>Sign up succesfully done.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                }else{
                    ?>
                    <script>
                        alert('some error occurd');
                    </script>   
                    <?php 
                }
        }else{
            echo '<div class="alert my-1 alert-danger alert-dismissible  fade show" role="alert">
            <strong>Message!</strong>Password Does not Match.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
      
}
?>
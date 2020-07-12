<?php
    session_start();
    require 'dbconfig/config.php';
    if (isset($_SESSION['username'])) {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel='stylesheet' href='css/style.css'>
</head>
<body>

    <div id='main-wrapper'>
        <h2 id='main-title'>Registration Form</h2>
        <img class='avatar' src='img/avatar.png'>

        <form class='myform' method='POST'>
            <label for='username'>Username:</label>
            <input required type='text' class='inputvalues' id='username' 
            placeholder="Enter your username" name='username'>
            <label for='password'>Password:</label>
            <input required type='password' class='inputvalues' id='password'
            name='password' placeholder="Enter your password">
            <label for='confirmpassword'>Password:</label>
            <input required type='password' class='inputvalues'
            id='confirmpassword'
            name='confirmpassword'
            placeholder="Enter your password again">
            <input name='submit_btn' type='submit' class='btn' id='signup_btn' value='Sign Up'>
            <a href='index.php'><input type='button' class='btn' id='back_btn' value='Back'></a>
        </form>
    </div>
    <?php
        if (isset($_POST['submit_btn'])) {
            // echo '<script>alert("Sign Up button clicked!");</script>';
            
            $username = $con->real_escape_string($_POST['username']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            $cpassword = $con->real_escape_string($_POST['confirmpassword']);

            if ($password == $cpassword) {
                $query = "SELECT * FROM users WHERE username = '$username';";
                
                $query_run = mysqli_query($con, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    echo "<script>alert('User $username already exists! Try another username.');</script>";
                } else {
                    $query = "INSERT INTO users (`username`, `password`) VALUES ('$username', '$password');";

                    $query_run = mysqli_query($con, $query);

                    if ($query_run) {
                        echo "<script>alert('$username successfully registered!');</script>";
                    } else {
                        echo "<script>alert('Internal server error.');</script>";
                    }
                }
            } else {
                echo "<script>alert('Passwords don\\'t match!');</script>";
            }
        }
    ?>
</body>
</html>
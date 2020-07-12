<?php
    session_start();
    require 'dbconfig/config.php';
    if (isset($_SESSION['username'])) {
        header('Location: home.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel='stylesheet' href='css/style.css'>
</head>
<body>
    <div id='main-wrapper'>
        <h2 id='main-title'>Login Form</h2>
        <img class='avatar' src='img/avatar.png'>
        <form class='myform' method='POST'>
            <label for='username'>Username:</label>
            <input type='text' class='inputvalues' id='username' 
            placeholder="Enter your username" name='username'>
            <label for='password'>Password:</label>
            <input type='password' class='inputvalues' id='password'
            name='password' placeholder="Enter your password">
            <!-- <button type='submit' id='login_btn'>Login</button>
            <button id='register_btn'>Register</button> -->
            <input name='login_btn' type='submit' class='btn' id='login_btn' value='Login'>
            <a href='register.php'><input type='button' class='btn' id='register_btn' value='Register'></a>
        </form>
        <?php
            if (isset($_POST['login_btn'])) {
                $username = $con->real_escape_string($_POST['username']);
                $password = $con->real_escape_string($_POST['password']);
                // $username = $_POST['username']; // Injection test!

                $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password';";
                // echo $query;
                $query_run = mysqli_query($con, $query);

                if (mysqli_num_rows($query_run)) {
                    $_SESSION['username'] = $username;
                    header('Location: home.php');
                } else {
                    echo "<script>alert('Invalid credentials!');</script>";
                }
            }
        ?>
    </div>
</body>
</html>
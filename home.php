<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel='stylesheet' href='css/style.css'>
</head>
<body style='background: white;'>
    <div id='main-wrapper'>
        <h2 id='main-title'>Home Page</h2>
        <h3 id='main-title'>Welcome, <?php echo $_SESSION['username'];  ?>!</h3>
        <img class='avatar' src='img/avatar.png'>
        <form class='myform' method='POST'>
            <input name='logout_btn' type='submit' class='btn' id='logout_btn' value='Logout'>
        </form>
        <?php
            if (isset($_POST['logout_btn'])) {
                session_destroy();
                header('Location: index.php');
            }
        ?>
    </div>
</body>
</html>
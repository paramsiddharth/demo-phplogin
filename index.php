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
            <input type='submit' class='btn' id='login_btn' value='Login'>
            <input type='button' class='btn' id='register_btn' value='Register'>
        </form>
    </div>
</body>
</html>
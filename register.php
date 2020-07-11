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
            <input type='text' class='inputvalues' id='username' 
            placeholder="Enter your username" name='username'>
            <label for='password'>Password:</label>
            <input type='password' class='inputvalues' id='password'
            name='password' placeholder="Enter your password">
            <label for='confirmpassword'>Password:</label>
            <input type='password' class='inputvalues'
            id='confirmpassword'
            name='confirmpassword'
            placeholder="Enter your password again">
            <input type='submit' class='btn' id='signup_btn' value='Sign Up'>
            <input type='button' class='btn' id='back_btn' value='Back'>
        </form>
    </div>
</body>
</html>
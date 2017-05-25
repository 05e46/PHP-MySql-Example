<html>
<body bgcolor="#708090">
<h1>New User? Click Register</h1>
<h2>Please enter the following fields</h2>
<form action="register.php" method="post">
    <label for "full">Full Name</label>
    <input type="text" name="fullname" class="form-control" placeholder="Full Name" required>
    <br><br>
    <label for "username">Username</label>
    <input type="text" name="username" placeholder="UserName" required>
    <br><br>
    <label for "password">Password</label>
    <input type="password" name="password" placeholder="Password" required>
    <br><br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
</form>
    <br>
    <br>
<h1> Returning User?</h1>
<h2> Enter credentials to login </h2>
<form action="login.php" method="post">
    <label for "UserName">User Name</label>
    <input type="text" name="user" placeholder="UserName" required>
    <br><br>
    <label for "Password">Password</label>
    <input type="password" name="password" placeholder="Password" required>
    <br><br>
    <button class="btn btn-lg btn-primary btn-block"
    type="submit">Login</button>
</form>
</html>

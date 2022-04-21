<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="main.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
    <header><h1><a href=".?action=home">IT Tech Support</a></h1></header>
    <nav>
        <ul>
        <li><a href=".?action=home">Home</a></li>
            <li><a href=".?action=login">Login</a></li>
            <li><a href=".?action=login">Help</a></li>
            <li><a href=".?action=end">Logout</a></li>
        </ul>
    </nav>
    <div id="back">
    <main>
        <h2>Login</h2>

        <form action="." method="post" >
            <input type="hidden" name="action" value="help">
            <label>Email:</label>
            <input type="text" name="Email" id="email">
            <label>Username:</label>
            <input type="text" name="Username" id="username" required>
            <label>Password:</label>
            <input type="text" name="Password" id="password" required>
            <label>&nbsp;</label>
            <input type="submit" value="Log In">
        </form>

    </main>
    </div>
    <footer>Copyright &copy; 2022 Steven Covington</footer>
    </div>

</body>
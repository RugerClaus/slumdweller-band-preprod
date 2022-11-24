<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
    <title>Sign Up</title>
    <script src="JavaScript/SignUp.js" defer></script>
</head>
<body>

    <p class="error" id="error"></p>
    <form id="form" method="post" action="../backend/Controller/signup.php" class="signup" style="display: flex; width: 30%; margin-left: auto; margin-right: auto; flex-direction: column; align-self: center; gap: 2rem; background-color: gray; padding: 50px;">
        <input id="username" type="text" name="user_name" placeholder="username">
        <input id="password" type="password" name="password" placeholder="password">
        <input id="confirm" type="password" name="confirm" placeholder="confirm password">
        <button type="submit" class="btn">Sign Up</button>
        <a href="login.php">Already a user?</a>
    </form>
</body>
</html>
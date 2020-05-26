<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Log In</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="shortcut icon" href="../logo.ico">
  <script src="../js/removeBanner.js"></script>
  <meta 
     name='viewport' 
     content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' 
/>

</head>
<body>
    <?php
if(!isset($_COOKIE[$cookie_user])) {
} 
else {
    $_SESSION['loggedin'] = true;
	$_SESSION['name'] = $_COOKIE[$cookie_user];
                
	header('Location: ../staries-home.php');
}
?>
<!-- partial:index.partial.html -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><link rel="stylesheet" href="./loadstars.css">
    <script  src="./bg.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:700,800&display=swap" rel="stylesheet">
    <title>Log In</title>
</head>
<body>


<div id="particles-background" class="vertical-centered-box"></div>
<div id="particles-foreground" class="vertical-centered-box"></div>

<div class="vertical-centered-box" style="">
    <div class="center">
        <form action="check-login.php" method="post" class="form_main">
            <h1 id="form" class="middle">Start Reading!</h1>
            <fieldset class="form">
                <legend class="field">Log In</legend>
                <p><label for="user"><input type="user" name="email" id="email" autofocus required placeholder="Emai or Username"></label></p>
                <p><label for="password"><input type="password" name="password" id="password" autofocus required placeholder="Password"></label></p>
                <p><label for="submit"><button type="submit" class="submission">Log In</button></label></p>
                <span class="new-member">Don't have an Account? <a href="index.html" style="color: white; text-decoration:none;" class="link">Create One Here!</span>
                <a href="../staries-home.html" style="color: white; text-decoration:none;" class="link">Create One Here!</span>
          </fieldset>
        </form>
        </div>
  </div>
</body>
</html>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>

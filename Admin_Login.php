<?php
require("Connection.php");
?>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HTML_NEW</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="Style1.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>

<div class="login-form">
    <h2>EDITOR LOGIN</h2>
    <form method="POST">
        <div class="input-field">
            <i class="bi bi-person-circle"></i>
            <input type="text" placeholder="Username" name="Admin_Name">
        </div>
        <div class="input-field">
            <i class="bi bi-shield-lock"></i>
            <input type="password" placeholder="Password" name="Admin_Password">
        </div>
        
        <button type="submit" name="Signin">Sign In</button>

        <div class="extra">
            <a href="#">Forgot Password ?</a>
        </div>

    </form>
</div>
<?php
if(isset($_POST['Signin']))
{
    $query="SELECT * FROM 'editor_login' WHERE 'Admin_Name'='Darun' AND'Admin_Password'='Darun@123' ";
    $result= mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['AdminLoginId']=$_POST['Admin_Name'];
        header("loaction:index.php");
    }
    {
        echo"<script>alert('Incoreect Password');</script";
    }
}
?>

</body>
</html>
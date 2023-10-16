<?php    include('conn/db.php');
?>

<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HTML_NEW</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="Style1.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<?php
// $id=$_GET['id'];
// $result = mysqli_query($conn,"SELECT * FROM editor_login where id='$id'");
//     while($row = mysqli_fetch_array($result))
//         {
            
//             $Admin_Name = $row['Admin_Name'];
//             $Admin_Password = $row['Admin_Password'];
//         }
    
?>

<?php
session_start();
//include('Connection.php');
//Getting Input value
if(isset($_POST['login'])){  
    
    $User_Name=mysqli_real_escape_string($conn,$_POST['User_Name']);
  $Password=mysqli_real_escape_string($conn,$_POST['Password']);
  if(empty($User_Name)&&empty($Password)){
  $error= 'Fileds are Mandatory';
  }else{

 $result=mysqli_query($conn,"SELECT*FROM user_create WHERE User_Name='$User_Name' AND Password='$Password'");
 $row=mysqli_fetch_assoc($result);
  $count=mysqli_num_rows($result);
 if($count==1){
      $_SESSION['user']=array(
   'User_Name'=>$row['User_Name'],
   'Password'=>$row['Password'], 
   'Employee_Name'=>$row['Employee_Name'],
   );
   $User_Name=$_SESSION['user']['User_Name']; 
    $Employee_Name=$_SESSION['user']['Employee_Name'];
  $Password=$_SESSION['user']['Password'];
   header("location:index-2.php");
 }
 elseif($count==0){
    $error='Your Username or Password Is Wrong';
    }

 }

}


?>
</head>
<body>

<div class="login-form">
    <h2>USER LOGIN</h2>
    <form method="post" action="">
   
    <?php if(isset($error)){ echo '  <div class="alert alert-danger" role="alert" style="text-align:center"> '.$error.'</div>'; } ?>
    <div class="alert alert-danger" role="alert" style="text-align:center"></div>    
    <div class="input-field">
        
            <i class="bi bi-person-circle"></i>
            <input type="text" placeholder="User Name" name="User_Name">
        </div>
        <div class="input-field">
            <i class="bi bi-shield-lock"></i>
            <input type="password" placeholder="Password" name="Password">
        </div>
        
        <button type="submit" name="login" >Sign In</button>

        <div class="extra">
            <a href="#">Forgot Password ?</a>
        </div>

    </form>
</div>

</body>
</html>
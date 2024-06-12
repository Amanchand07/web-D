Login.php
<?php
     session_start();
     $userid="GautamGupta123";
     $password="1234";
     if(isset($_POST['bt'])){
        if($_POST['userid1']==$userid && $_POST['pass']==$password){
            $_SESSION['userid']=$userid;
            header('location:welcome.php');
        }
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="
    " method="post">
        <input type="text" name="userid1">
        <input type="password" name="pass">
        <input type="submit" value="Submit" name="bt">
    </form>
</body>
</html>

Welcome.php
<?php
     session_start();
     $name=$_SESSION['userid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
     echo "Welcome $name";
?>
</body>
</html>

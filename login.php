<?php
session_start(); // شروع Session

$username=$_POST["username"];
$password=$_POST["password"];

include("conect.php");
$result=mysqli_query($link,"SELECT * FROM `login` 
    WHERE `user nam`='$username' AND `pass`='$password'");
mysqli_close($link);
$row=mysqli_fetch_array($result);
if($row){
    $_SESSION["login"]=true;
    $_SESSION["admin"]=$row["admin"];
    
    echo "<script>
            alert('ورود به حساب با موفقیت انجام شد');
            location.replace('index.php');
          </script>";
} else {
    // ورود ناموفق
    echo "<script>
            alert('نام کاربری یا رمز عبور اشتباه است');
            location.replace('login.html');
          </script>";
}

// بستن اتصال
$stmt->close();
mysqli_close($o);
?>
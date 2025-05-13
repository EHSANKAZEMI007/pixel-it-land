<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ذخیره اطلاعات کاربر </title>
</head>
<body>
    <?php

$username = $_POST["asmcarbr"];
$phone = $_POST["Telephone"];
$pass = $_POST["password"];
include("conect.php");

mysqli_query($link,"INSERT INTO `login`(`user nam`, `phone`, `pass`) VALUES ('$username','$phone','$pass')");
mysqli_close($link);
if ($link=true)
{
    ?>
    <script>
        location.replace("index.php")
        alert ("ثبت نام با موفقیت انجام شد");
        </script>
        <?php
}
else
{
?>
<script>
    location.replace("index.php")
    alert ("ورود به حساب با موفقیت انجام نشد"); 
    </script>
<?php
}





  
    ?>



    
</body>
</html>
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
$o=mysqli_connect("localhost","root","","picxel it");
mysqli_query($o,"INSERT INTO `login`(`user nam`, `phone`, `pass`) VALUES ('$username','$phone','$pass')");
mysqli_close($o);
if ($o=true)
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





    // $servername="localhost";
    // $USERNAME="root";
    // $password="";
    // $dbname="sait";
    

    // $usname=$_POST['asmcarbr'];
    // $phone=$_POST['Telephone'];
    // $PAS=$_POST['password'];

    // $conn=new mysqli($servername,$USERNAME,$password,$dbname);

    // if ($conn->connect_errno) 
    // {
    //     die("خطایی در اتصال به پایگاه داده رخ داده است");
    // }
    // $conn->set_charset("utf8");
    // $sql="INSERT INTO `form login`( `user nam`, `phone`, `pas`) VALUES ('$asmcarbr','$Telephone','$password')";
    // if($conn->puery($sql)===true){echo "اطلاعات با موفقیت ذخیره شد ";
    // }else{echo "خطایی در ذخیره اطلاعات رخ داده است ";}
    
 
    // $conn->class();

    ?>



    
</body>
</html>
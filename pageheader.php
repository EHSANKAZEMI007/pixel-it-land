<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قالب سایت</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    


    <div  id="hedr">
        <h1>آغاز یک همکاری ابدی
            با خلق یک شاهکار ماندگار دیجیتال</h1>
        <div><img src="loogo.png" alt="لوگو"></div>
        
    </div>
    <nav>
        <ul class="ulp">

            <li><a href="index.php">صفحه اصلی</a></li>
            <li><a href="namonekar.php">نمونه کارها</a></li>
            <li><a href="Contact us.php">تماس با ما </a></li>
            <li><a href="Cooperate with us.php">همکاری با ما</a</li>
            <li><a href="product.php">خدمات</a</li>
            <li><a href="VOROD.HTML">ثبت نام</a></li>
            <?php

if(isset($_SESSION["login"]))
{
?>
    <li><a class="aok" href="logout.php">خروج از حساب </a></li>
    
<?php
}

else
{
?>
    <li><a class="aok" href="login1.php">ورود به حساب کاربری</a></li>
<?php
}
?>

            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
        </ul>
    </nav>




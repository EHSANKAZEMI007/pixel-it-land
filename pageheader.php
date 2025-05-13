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
        <h1 id="hed">آغاز یک همکاری ابدی
            با خلق یک شاهکار ماندگار دیجیتال</h1>
        <div><img src="loogo.png" ></div>
        
    </div>
    <nav>
        <ul class="ulp">

            <li><a href="index.php">صفحه اصلی</a></li>
            <li><a href="namonekar.php">نمونه کارها</a></li>
            
            
            <li><a href="Cooperate with us.php">وبلاگ</a</li>
            <li><a href="product.php">خدمات</a</li>
           
            <?php if(isset($_SESSION["login"]) && $_SESSION["login"]==true){ ?>
                <li><a href="logout.php">خروج</a></li>
            <?php }
            else{ ?>
                <li><a href="VOROD.HTML">ثبت نام</a></li>
                <li><a href="login.html">ورود</a></li>

               
            <?php } ?>

            <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){ ?>
                    <li><a href="admin.php">ادمین</a></li>
            <?php } ?>
          

            
        </ul>
    </nav>




<?php
include("pageheader.php");
?>
            <!-- ************************* -->
            <p>همکاری با ما</p>
            <!-- ************************* -->
            <!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خدمات IT چیست؟</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>خدمات IT چیست؟</h1>
    <p>اجازه دهید در ابتدا با یک تعریف ساده شما را با خدمات آی تی آشنا کنیم.</p>
    <p>خدمات فناوری اطلاعات یا خدمات آی تی به کلیه فعالیتهایی اشاره میکند که وظیفه نگهداری از سخت افزارها زیرساخت شبکه و سرویسهای مرتبط با آن را بر عهده دارد. از کامپیوترهای کاربران گرفته تا سرورهایی که نرم افزارهای مالی و اداری بر روی آنها اجرا می شود.</p>
    <script src="script.js"></script>
</body>
</html>
<STyle>
    body {
    font-family: Tahoma, sans-serif;
    text-align: justify;
}

h1 {
    font-size: 24px;
    color: #333;
}

p {
    line-height: 1.5;
}
</STyle>
<?php
$services = array(
    "نگهداری از سخت افزارها",
    "زیرساخت شبکه",
    "امنیت اطلاعات",
    // ...
);

foreach ($services as $service) {
    echo "<p>$service</p>";
}
?>

<?php

include("pagefooter.html");
?>

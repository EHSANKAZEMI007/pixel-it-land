<?php
include("pageheader.php");
?>
        
        <!DOCTYPE html>
<<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خدمات IT چیست؟</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        :root {
            --primary: #4361ee;
            --primary-dark: #3a0ca3;
            --secondary: #4895ef;
            --dark: #212529;
            --light: #f8f9fa;
            --gray: #6c757d;
            --gradient: linear-gradient(135deg, var(--primary), var(--secondary));
        }
        
        * {
            /* font-size: 20px; */
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Vazirmatn', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: var(--dark);
            line-height: 1.8;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        
        header {
            background: var(--gradient);
            color: white;
            padding: 80px 0;
            text-align: center;
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
            margin-bottom: 60px;
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            /* position: relative; */
            display: inline-block;
        }
        
        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            right: 0;
            width: 60px;
            height: 4px;
            background-color: white;
            border-radius: 2px;
        }
        
        .content {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 50px;
            margin-bottom: 40px;
        }
        
        p {
            font-size: 1.1rem;
            margin-bottom: 20px;

            color:rgb(64, 36, 110);
        }
        
        .highlight {
            background-color: rgba(72, 43, 107, 0);
            border-right: 4px solid var(--primary);
            padding: 20px;
            border-radius: 0 5px 5px 0;
            margin: 30px 0;
        }
        
        .cta {
            text-align: center;
            margin-top: 40px;
        }
        
        .btn {
            display: inline-block;
            background: var(--gradient);
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.4);
        }
        
        footer {
            text-align: center;
            padding: 20px;
            color: var(--gray);
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            
            .content {
                padding: 30px;
            }
            
            header {
                padding: 60px 0;
                clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
            }
        }
        
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>خدمات IT چیست؟</h1>
            <p>آشنایی با مفاهیم پایه فناوری اطلاعات</p>
        </div>
    </header>
    
    <div class="container">
        <div class="content">
            <p>اجازه دهید در ابتدا با یک تعریف ساده شما را با خدمات آی تی آشنا کنیم.</p>
            
            <div class="highlight">
                <p>خدمات فناوری اطلاعات یا خدمات آی تی به کلیه فعالیتهایی اشاره میکند که وظیفه نگهداری از سخت افزارها، زیرساخت شبکه و سرویسهای مرتبط با آن را بر عهده دارد. از کامپیوترهای کاربران گرفته تا سرورهایی که نرم افزارهای مالی و اداری بر روی آنها اجرا می‌شود.</p>
            </div>
            
            <p>خدمات IT امروزه به یکی از ارکان اساسی هر کسب‌وکار تبدیل شده است. بدون وجود سیستم‌های اطلاعاتی کارآمد، بسیاری از سازمان‌ها قادر به ادامه فعالیت خود نخواهند بود.</p>
            
            <div class="cta">
                <a href="#" class="btn">مشاوره رایگان دریافت کنید <i class="fas fa-arrow-left"></i></a>
            </div>
        </div>
    </div>
    

    
    <script src="script.js"></script>
</body>
</html>
<
<?php
$services = array(
    
);

foreach ($services as $service) {
    echo "<p>$service</p>";
}
?>

<?php

include("pagefooter.html");
?>

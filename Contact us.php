<?php
include("pageheader.php");
?>
            <!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اسلایدر تصاویر</title>
    <style>
        /* استایل کلی */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        /* استایل اسلایدر */
        .slider-container {
            position: relative;
            max-width: 600px;
            width: 100%;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .slider-container img {
            width: 100%;
            display: none;
            transition: opacity 0.5s ease-in-out;
        }

        .slider-container img.active {
            display: block;
        }

        /* دکمه‌های بعدی و قبلی */
        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 18px;
            border-radius: 50%;
            z-index: 10;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        /* دکمه‌های شاخص (Dot Indicators) */
        .dots-container {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
        }

        .dot {
            width: 10px;
            height: 10px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .dot.active {
            background-color: rgba(255, 255, 255, 1);
        }
    </style>
</head>
<body>

    <!-- اسلایدر -->
    <div class="slider-container">
        <img src="https://via.placeholder.com/600x400?text=تصویر+1" alt="تصویر 1" class="active">
        <img src="https://via.placeholder.com/600x400?text=تصویر+2" alt="تصویر 2">
        <img src="https://via.placeholder.com/600x400?text=تصویر+3" alt="تصویر 3">

        <!-- دکمه‌های بعدی و قبلی -->
        <button class="prev" onclick="changeSlide(-1)">❮</button>
        <button class="next" onclick="changeSlide(1)">❯</button>

        <!-- دکمه‌های شاخص -->
        <div class="dots-container">
            <span class="dot active" onclick="setSlide(0)"></span>
            <span class="dot" onclick="setSlide(1)"></span>
            <span class="dot" onclick="setSlide(2)"></span>
        </div>
    </div>

    <script>
        // متغیرها
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slider-container img');
        const dots = document.querySelectorAll('.dot');

        // تابع برای نمایش اسلاید فعلی
        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                dots[i].classList.remove('active');
            });
            slides[index].classList.add('active');
            dots[index].classList.add('active');
        }

        // تابع برای تغییر اسلاید
        function changeSlide(direction) {
            currentSlide += direction;
            if (currentSlide >= slides.length) currentSlide = 0;
            if (currentSlide < 0) currentSlide = slides.length - 1;
            showSlide(currentSlide);
        }

        // تابع برای تنظیم اسلاید با کلیک روی دکمه‌های شاخص
        function setSlide(index) {
            currentSlide = index;
            showSlide(currentSlide);
        }

        // اسلایدر خودکار
        setInterval(() => {
            changeSlide(1);
        }, 5000); // هر ۵ ثانیه تغییر می‌کند
    </script>

</body>
</html>
<?php
include("pagefooter.html");
?>
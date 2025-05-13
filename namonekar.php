<?php
include("pageheader.php");
?>
<html>
<body id="namonekar">
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نمونه کار</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <style>
        body {
    font-family: Tahoma, sans-serif;
    margin: 0;
    padding: 0;
    background-color:#333;
    color: #fff;
}
body {
    font-family: Tahoma, sans-serif;
    margin: 0;
    padding: 0;
    background-color:rgb(255, 255, 255); /* Blue background */
    color: #fff; /* White text */
}

/* Rest of your CSS code remains the same */

header {
    text-align: center;
    padding: 50px;
}

.portfolio {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 50px;
}
#hh{
color:rgb(31, 178, 189);
}

.project {
    background-color: #333;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    width: 80%;
    max-width: 800px;
}

.project img {
    width: 100%;
    border-radius: 10px;
}

.project p {
    text-align: justify;
}

.project a {
    display: inline-block;
    /* background-color:rgb(12, 56, 103); */
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
}
.project{
    color: #34495e;
}

/* From Uiverse.io by cssbuttons-io */ 
button {
  font-size: 17px;
  padding: 1em 2.7em;
  font-weight: 500;
  background: #1f2937;
  color: white;
  border: none;
  position: relative;
  overflow: hidden;
  border-radius: 0.6em;
  cursor: pointer;
}

.gradient {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  border-radius: 0.6em;
  margin-top: -0.25em;
  background-image: linear-gradient(
    rgba(0, 0, 0, 0),
    rgba(0, 0, 0, 0),
    rgba(0, 0, 0, 0.3)
  );
}

.label {
  position: relative;
  top: -1px;
}

.transition {
  transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
  transition-duration: 500ms;
  background-color: rgba(16, 185, 129, 0.6);
  border-radius: 9999px;
  width: 0;
  height: 0;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

button:hover .transition {
  width: 14em;
  height: 14em;
}

button:active {
  transform: scale(0.97);
}
a {
    size: 20px 10px;
}

   
    </style>
    <header>
        <h2 id="hh">برخی از نمونه کارهای ما</h2>
        <p>خلاقیت و کیفیت را با ما تجربه کنید.</p>
    </header>
    <section class="portfolio">
        <div class="project">
            <h3>مرکز روشد و رویش</h3>
            <p>وب سایت مرکز رشد فناوری اطلاعات و ارتباطات جهاد دانشگاهی (رویش) متناسب با رویکرد و اهداف مجموعه طراحی گردیده‌ است.

این سایت به صورت تک زبانه و در بستر وردپرس به صورت اختصاصی پیاده‌سازی شده است.</p>
            <p>مدت زمان انجام پروژه: 17 روز کاری</p>
            <form action="https://rooyesh.ir/">
    <button>
مشاهده پروژه
  <span class="transition"></span>
  <span class="gradient"></span>
  <span class="label"></span>

</button>
           
        </div>
    </section>
    </style>
    <section class="portfolio">
        <div class="project">
            <h3>دانشگاه</h3>
            <p>وب سایت دانشکده فنی فومن دانشگاه تهران به صورت دو زبانه و با استفاده از پورتال لایفری مخصوص دانشگاه تهران طراحی شده است. علاوه بر طراحی سایت خدمات عکس برداری و ادیت عکسها و تولید محتوا نیز انجام شده است.</p>
            <p>مدت زمان انجام پروژه: 28 روز کاری</p>
            <form action="https://ffeng.ut.ac.ir/">
    <button>
مشاهده پروژه
  <span class="transition"></span>
  <span class="gradient"></span>
  <span class="label"></span>

</button>
           
        </div>
    </section>
    </section>
    </style>
    <section class="portfolio">
        <div class="project">
            <h4>شرکت همیار بتن شیرکوه</h4>
            <p>سایت شرکت همیار بتن شیرکوه در بستر وردپرس و چند زبانه دارای انواع بخش‌های محصولات، خدمات، دپارتمان و پروژه‌ها</p>
            <p>مدت زمان انجام پروژه: 34 روز کاری</p>
          <!-- From Uiverse.io by cssbuttons-io --> 

<form action="https://hbscoo.com/">
    <button>
مشاهده پروژه
  <span class="transition"></span>
  <span class="gradient"></span>
  <span class="label"></span>

</button>
</form>

        </div>
    </section>
</body>
</html>
             </body>
            </html>
<?php
include("pagefooter.html");
?>

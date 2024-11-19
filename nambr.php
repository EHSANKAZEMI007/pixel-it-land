<?php
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>جابجایی دو عدد</title>
</head>
<body>
    <form method="post" action="">
        <label for="num1">عدد اول:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        <label for="num2">عدد دوم:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        <button type="submit">جابجا کن</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // دریافت اعداد از فرم
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        // نمایش قبل از جابجایی
        echo "<p>قبل از جابجایی: عدد اول = $num1، عدد دوم = $num2</p>";

        // جابجایی دو عدد
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;

        // نمایش بعد از جابجایی
        echo "<p>بعد از جابجایی: عدد اول = $num1، عدد دوم = $num2</p>";
    }
    ?>
</body>
</html>


?>
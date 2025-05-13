<?php
include("pageheader.php");
?>
            <!-- ************************* -->
            <!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست اخبار</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --dark-color: #212529;
            --light-color: #f8f9fa;
            --gray-color: #6c757d;
        }
        
        body {
            background-color: #f8f9fa;
            font-family: 'Vazirmatn', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .news-container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 15px;
        }
        
        .news-item {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
            overflow: hidden;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }
        
        .news-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .news-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 1px solid #eee;
        }
        
        .news-content {
            padding: 20px;
        }
        
        .news-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: var(--dark-color);
            margin-bottom: 10px;
        }
        
        .news-text {
            color: var(--gray-color);
            line-height: 1.7;
            margin-bottom: 15px;
        }
        
        .news-actions {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }
        
        .btn-custom {
            padding: 8px 15px;
            border-radius: 6px;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        
        @media (min-width: 768px) {
            .news-item {
                flex-direction: row;
            }
            
            .news-image {
                width: 300px;
                height: auto;
                border-bottom: none;
                border-left: 1px solid #eee;
            }
        }
        
        @media (max-width: 576px) {
            .news-image {
                height: 150px;
            }
            
            .news-title {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <div class="news-container">
        <?php
include("conect.php");
$result = mysqli_query($link,"SELECT * FROM `news`");
        mysqli_close($link);
        
        while($row = mysqli_fetch_array($result)):
        ?>
        <div class="news-item">
            <img class="news-image" src="<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>">
            <div class="news-content">
                <h3 class="news-title"><?php echo $row['title']; ?></h3>
                <p class="news-text"><?php echo $row['text']; ?></p>
                
                <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true): ?>
                <div class="news-actions">
                <?php
                    if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){
                ?>
                    <a class="btn btn-danger btn-custom" href="news_delete.php?id=<?php echo $row['id']; ?>">
                        <i class="fas fa-trash"></i> حذف
                    </a>
                    <a class="btn btn-success btn-custom" href="news_edit.php?id=<?php echo $row['id']; ?>">
                        <i class="fas fa-edit"></i> ویرایش

                    </a>
                    <?php
                    }
                     ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
            <!-- ************************* -->
<?php
include("pagefooter.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Приморская общественная организация «Туманганский путь»</title>
    <link rel="shortcut icon" href="favicon.png" type="image/png">    
    <link rel="stylesheet" href="./css/style.css?r=0031">

    <script type="text/javascript" src="./js/jquery.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet"> 

</head>
<body class="page-inside">
<div class="site-all">
    <div class="site-exclude-footer">
    <div class="site-top-row"></div>

    <div class="site-mobile-header mobile">
        <a href="index.php" class="go-home-inner-link"></a>
    </div>

    <div class="site-main-row">    
        
        <!-- SITE LEFT COLUMN -->
        <div class="site-left-column">

            <?php include 'tpl/leftcolumn__logoblock.php'; ?>

            <div class="site-left-column__topmenu">                
                <?php include 'tpl/menu_special_black.php'; ?>
            </div>

            <hr class="leftcolumn-redline-long">

            <?php include 'tpl/menu_leftcolumn_1.php'; ?>
            
            <?php include 'tpl/menu_leftcolumn_2.php'; ?>

            <hr class="leftcolumn-redline-short">

            <?php include 'tpl/menu_leftcolumn_3.php'; ?>

        </div>
        
        <!-- SITE MAIN COLUMN -->
        <div class="site-main-column">
        
            <div class="breadcrumbs"><a href="#">Главная</a>  /  Маршруты</div>

            <div class="site-head all-routes">
                    <div class="all-routes-head-image"
                    style="background-image:url('../uploads/image-4.jpg');"></div>                    
                    <div class="all-routes-head-decore"></div>
                    
                    <H1><span>Маршруты</span><span>Маршруты</span></H1>
            </div>

            <div class="site-content inside routes-design">


                <div class="all-routes-title">Все маршруты</div>

               <div class="all-routes">                

                    <a href="page-route.php" class="news-announsment has-image">
                        <div class="route-image" style="background-image:url('../uploads/image-3.jpg')"></div>
                        <div class="route-title">Трансграничный туристический кластер «Туристско- рекреационный комплекс в Хасанском районе ...</div>
                        <div class="route-more">Подробности</div>
                    </a>                 
                    <a href="page-route.php" class="news-announsment  has-image">
                        <div class="route-image" style="background-image:url('../uploads/image-2.jpg')"></div>
                        <div class="route-title">Трансграничный туристический кластер «Туристско- рекреационный комплекс в Хасанском районе ...</div>
                        <div class="route-more">Подробности</div>
                    </a>                 
                    <a href="page-route.php" class="news-announsment">                        
                        <div class="route-title">Трансграничный туристический кластер «Туристско- рекреационный комплекс в Хасанском районе ...</div>
                        <div class="route-more">Подробности</div>
                    </a>  
                    <a href="page-route.php" class="news-announsment  has-image">
                        <div class="route-image" style="background-image:url('../uploads/image-4.jpg')"></div>
                        <div class="route-title">Трансграничный туристический кластер «Туристско- рекреационный комплекс в Хасанском районе ...</div>
                        <div class="route-more">Подробности</div>
                    </a>                 
                    <a href="page-route.php" class="news-announsment">                        
                        <div class="route-title">Трансграничный туристический кластер «Туристско- рекреационный комплекс в Хасанском районе ...</div>
                        <div class="route-more">Подробности</div>
                    </a>                 
                    <a href="page-route.php" class="news-announsment  has-image">
                        <div class="route-image" style="background-image:url('../uploads/image-5.jpg')"></div>
                        <div class="route-title">Трансграничный туристический кластер «Туристско- рекреационный комплекс в Хасанском районе ...</div>
                        <div class="route-more">Подробности</div>
                    </a>                                                                             

               </div> 


               <div class="all-routes-title">Все маршруты</div>

            </div>
        </div>
    </div>
    </div>
    
    <?php include 'tpl/footer.php'; ?>  

    </div>          
    <div class="site-decore-1"></div>
</div>
<script type="module">
    import { Slider } from "./js/slider.js";
    Slider.init("site-main-slider");
</script>
</body>
</html>
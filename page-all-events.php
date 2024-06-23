<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Приморская общественная организация «Туманганский путь»</title>
    <link rel="shortcut icon" href="favicon.png" type="image/png">    
    <link rel="stylesheet" href="./css/style.css">

    <script type="text/javascript" src="./js/jquery.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet"> 

</head>
<body class="page-inside">
<div class="site-all">
    <div class="site-exclude-footer">
    <div class="site-top-row"></div>
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
        
            <div class="breadcrumbs"><a href="#">Главная</a>  /  События</div>

            <div class="site-head inside">
                    <div class="page-icon"></div>            
                    <H1>Все события</H1>                    
            </div>

            <div class="site-content inside">


            <nav class="alignwide wp-block-query-pagination is-content-justification-space-between is-layout-flex wp-container-core-query-pagination-is-layout-1 wp-block-query-pagination-is-layout-flex" aria-label="Разделение на страницы">
            <div class="wp-block-query-pagination-numbers"><span aria-current="page" class="page-numbers current">1</span>
            <a class="page-numbers" href="http://localhost/tumangan-site/page/2/">2</a>
            <a class="page-numbers" href="http://localhost/tumangan-site/page/3/">3</a>
            <span class="page-numbers dots">…</span>
            <a class="page-numbers" href="http://localhost/tumangan-site/page/11/">11</a></div>
            <a href="http://localhost/tumangan-site/page/2/" class="wp-block-query-pagination-next has-small-font-size">Следующая страница<span class="wp-block-query-pagination-next-arrow is-arrow-arrow" aria-hidden="true">→</span></a>
            </nav>

               <div class="all-events">                
                    <a href="#" class="all-events__item">
                            <div class="date"><span>СЕНТЯБРЬ  / 2024</span></div>
                            <div class="event_title">Открытие международного, речного круизного маршрута в Российско-китайско- северокорейском трехграничье. Проекты и инициативы</div>
                            <div class="number">1.</div>
                    </a>
                    <a href="#" class="all-events__item">
                        <div class="date"><span>ОКТЯБРЬ / 2024</span></div>
                        <div class="event_title">Трансграничный туристический кластер «Туристско-рекреационный комплекс в Хасанском районе РФ с осью движения по реке Туманная (Туманган)»  и инвестиционная программа проекта</div>
                        <div class="number">2.</div>
                    </a>
                    <a href="#" class="all-events__item">
                        <div class="date"><span>ИЮЛЬ / 2024</span></div>
                        <div class="event_title">Общественная обьединение «Туманганский путь», Цели. Задачи. Сотрудничество</div>                        
                        <div class="number">3.</div>                        
                    </a>
               </div> 

               <nav class="alignwide wp-block-query-pagination is-content-justification-space-between is-layout-flex wp-container-core-query-pagination-is-layout-1 wp-block-query-pagination-is-layout-flex" aria-label="Разделение на страницы">
                <div class="wp-block-query-pagination-numbers">
                    <span aria-current="page" class="page-numbers current">1</span>
                    <a class="page-numbers" href="http://localhost/tumangan-site/page/2/">2</a>
                    <a class="page-numbers" href="http://localhost/tumangan-site/page/3/">3</a>
                    <span class="page-numbers dots">…</span>
                    <a class="page-numbers" href="http://localhost/tumangan-site/page/11/">11</a>
                </div>
                <a href="http://localhost/tumangan-site/page/2/" class="wp-block-query-pagination-next has-small-font-size">Следующая страница<span class="wp-block-query-pagination-next-arrow is-arrow-arrow" aria-hidden="true">→</span></a>
                </nav>               

            </div>
        </div>
    </div>
    </div>
    
    <?php include 'tpl/site_footer.php'; ?>  

    </div>          
    <div class="site-decore-1"></div>
</div>
<script type="module">
    import { Slider } from "./js/slider.js";
    Slider.init("site-main-slider");
</script>
</body>
</html>
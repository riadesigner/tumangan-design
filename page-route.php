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
        
            <div class="breadcrumbs"><a href="#">Главная</a>  /  <a href="#">Все маршруты</a> / ... </div>

            <div class="site-head page-route">
                                        
                    <div class="page-route-head-decore"></div>                    
                    <div class="page-route-head-decore-2"></div>
                    <div class="page-route-head-title"><span></span><span>Маршрут</span></div>
                    
                    <div class="page-route-article-image" style="
                    background-image:url('../uploads/image-5.jpg');"></div>
                    
                    <div class="btns-routs-more">
                        <div class="btns-routs-more__title">Другие<br>маршруты</div>
                        <div class="btns-routs-more__buttons">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
            </div>
                    
            <div class="site-content inside page-route">
                <article>
                    <div class="article-title">Туристический маршрут по реке Туманная</div>
                    <div class="article-date">12 августа 2024</div>
                    <p>Основанием для разработки концепции проекта на территории Хасанского муниципального района является Федеральная целевая программа  "Развитие внутреннего и въездного туризма в Российской Федерации» которая ориентирует на развитие туристской инфраструктуры развития внутреннего и въездного туризма, а так-же реализации проектов федерального масштаба, направленных на развитие туристских возможностей (маршрутов) и повышение качества услуг в том числе посредством расширения спектра и повышения уровня услуг, оказываемых российским и иностранным туристам.</p>
                    <h2>Развитие внутреннего и въездного туризма в Российской Федерации» которая ориентирует на развитие туристской</h2>


                    <figure class="wp-block-gallery has-nested-images columns-default is-cropped wp-block-gallery-2 is-layout-flex wp-block-gallery-is-layout-flex">
                        <figure class="wp-block-image size-large"><a href="../uploads/image-3.jpg"><img fetchpriority="high" decoding="async" width="1024" height="684" data-id="7" src="../uploads/image-3.jpg" sizes="(max-width: 1024px) 100vw, 1024px"></a></figure>
                        <figure class="wp-block-image size-large"><a href="../uploads/image-5.jpg"><img decoding="async" width="1024" height="653" data-id="11" src="../uploads/image-4.jpg" sizes="(max-width: 1024px) 100vw, 1024px"></a><figcaption class="wp-element-caption">OLYMPUS DIGITAL CAMERA</figcaption></figure>                        
                    </figure>

                </article>


                <div class="content-section-title"><a href="#">ЕЩЕ МАРШРУТЫ</a></div>
                
                <div class="prev-next">
                    <div class="prev empty">
                        <button><span>назад</span></button>
                    </div>
                    <div class="next">
                        <a href="#">
                            <button><span>вперед</span></button>
                            <p>Паспорт инвестиционного проекта «Туманганский путь»</p>
                        </a>
                    </div>
                </div>            
                
                
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
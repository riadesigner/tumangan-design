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
        
            <div class="breadcrumbs"><a href="#">Главная</a> / <a href="#">Авторские статьи</a>  /  Создание новых внутрероссийских ..  </div>

            <div class="site-head inside">
                    <div class="page-icon author"></div>            
                    <h1>Создание новых внутрироссийских морских круизных маршрутов</h1>
                    
                    <div class="page-author-header">                            
                            <div class="author-photo" style="background-image:url('../uploads/photo-1.jpg')"></div>
                            <div class="author-name">Андрей Иванов</div>
                            <div class="author-description">предприниматель, председатель совета директоров Приморской организации Стройтехтранс</div>                            
                    </div>

                    <div class="article-date">12 августа 2024</div>
            </div>

            <div class="site-content inside">            

            <article>                
                <p>Основанием для разработки концепции проекта на территории Хасанского муниципального района является Федеральная целевая программа  "Развитие внутреннего и въездного туризма в Российской Федерации» которая ориентирует на развитие туристской инфраструктуры развития внутреннего и въездного туризма, а так-же реализации проектов федерального масштаба, направленных на развитие туристских возможностей (маршрутов) и повышение качества услуг в том числе посредством расширения спектра и повышения уровня услуг, оказываемых российским и иностранным туристам.</p>
            
                <figure class="wp-block-pullquote">
                        <blockquote>
                            <p>Привет! Днём я курьер, а вечером — подающий надежды актёр. Это мой блог. Я живу в Ростове-на-Дону, люблю своего пса Джека и пинаколаду. И ещё попадать под до</p>
                            <cite>Мастер слова</cite>
                        </blockquote>
                    </figure>                

                    <h1>Развитие внутреннего и въездного туризма в Российской Федерации» которая ориентирует на развитие туристской</h1>  
                    <h2>Основанием для разработки концепции проекта на территории Хасанского муниципального района является Федеральная целевая программа</h2>
                    <h3>Развитие внутреннего и въездного туризма в Российской Федерации»</h3>  
                    <h4>Основанием для разработки концепции проекта на территории Хасанского муниципального района</h4>

                    <p>Муниципального района является Федеральная целевая программа  "Развитие внутреннего и въездного туризма в Российской Федерации» которая ориентирует на развитие туристской инфраструктуры развития внутреннего и въездного туризма, а так-же реализации проектов федерального масштаба, направленных на развитие туристских возможностей (маршрутов) и повышение качества услуг в том числе посредством расширения спектра и повышения уровня услуг, оказываемых российским и иностранным туристам.</p>    
                    
            </article>            

            <div class="content-section-title"><a href="#">ЕЩЕ СТАТЬИ</a></div>
                
                <div class="prev-next">
                    <div class="prev empty">
                        <a href="#">
                            <button><span>назад</span></button>
                            <p>Развитие внутреннего и въездного туризма в Российской Федерации</p>
                        </a>
                    </div>
                    <div class="next">
                        <a href="#">
                            <button><span>вперед</span></button>
                            <p>Развитие туристских возможностей (маршрутов)</p>
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
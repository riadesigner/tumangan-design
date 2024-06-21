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
<body>
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

            <div class="breadcrumbs"><a href="#">asdasda</a> <span>asdasd</span> asdasd</div>
            
            <div class="site-head inside">
                <a href="#" class="news-image" style="
                background-image:url('../uploads/image-3.jpg')"></a>
                <h1>170 лет прихода фрегата Паллада к берегам Кореи и Уссурийского края экспедиции адмирала Е.В. Путятина</h1>
                <div class="page-date">12 августа 2024</div>
            </div>

            <div class="site-content inside">
                <p>Основанием для разработки концепции проекта на территории Хасанского муниципального района является Федеральная целевая программа  "Развитие внутреннего и въездного туризма в Российской Федерации» которая ориентирует на развитие туристской инфраструктуры развития внутреннего и въездного туризма, а так-же реализации проектов федерального масштаба, направленных на развитие туристских возможностей (маршрутов) и повышение качества услуг в том числе посредством расширения спектра и повышения уровня услуг, оказываемых российским и иностранным туристам.</p>    

                <blockquote>
                    <p>Words can be like X-rays, if you use them properly—they’ll go through anything. You read and you’re pierced.</p>
                    <footer>—Aldous Huxley, <cite>Brave New World</cite></footer>
                </blockquote>

                <h1>Развитие внутреннего и въездного туризма в Российской Федерации» которая ориентирует на развитие туристской</h1>  
                <h2>Основанием для разработки концепции проекта на территории Хасанского муниципального района является Федеральная целевая программа</h2>
                <h3>Развитие внутреннего и въездного туризма в Российской Федерации»</h3>  
                <h4>Основанием для разработки концепции проекта на территории Хасанского муниципального района</h4>

                <p>Муниципального района является Федеральная целевая программа  "Развитие внутреннего и въездного туризма в Российской Федерации» которая ориентирует на развитие туристской инфраструктуры развития внутреннего и въездного туризма, а так-же реализации проектов федерального масштаба, направленных на развитие туристских возможностей (маршрутов) и повышение качества услуг в том числе посредством расширения спектра и повышения уровня услуг, оказываемых российским и иностранным туристам.</p>    

                <hr>

                <div>gallery</div> 

                <ol>                    
                    <li>Туристический маршрут по реке Туманная. Проекты и инициативы</li>
                    <li>Паспорт инвестиционного проекта «Туманганский путь»</li>
                    <li>Генеральный партнер проекта</li>
                    <li>Общественное объединение</li>
                </ol>

                <div class="content-section-title"><a href="#">ЕЩЕ НОВОСТИ</a></div>
                
                <div class="prev-next">
                    <div class="prev empty">
                        <button><span>назад</span></button>
                    </div>
                    <div class="next">
                        <a href="#">
                            <button><span>вперед</span></button>
                            <p>Генеральный партнер проекта «Хуньчуньская городская строительная инвестиционная компания с ограниченной ответственностью Света Шелкового пути» (Китай)</p>
                        </a>
                    </div>
                </div>


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
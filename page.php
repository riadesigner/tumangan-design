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
            <a href="#" title="на главную" alt="логотип"><div class="site-left-column__header"></div></a>
            <div class="site-left-column__slogan" alt="слоган"></div>                    

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



            <div class="site-head">
                <div class="page-icon"></div>
                <h1></h1>
            </div>

            <div class="frontpage-content">
                222                
                
                <hr class="invisible">
                
         
                
                qweqwe

                
                <hr class="invisible">

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
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
<body class="home">
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

            <?php include 'tpl/site_topmenu.php'; ?>

            <div class="site-head">
                <?php include 'tpl/site_main_slider.php'; ?>
            </div>

            <div class="site-content">
                
                <?php include 'tpl/frontpage_dnevnik.php'; ?>
                
                <hr class="invisible">
                
                <?php include 'tpl/frontpage_direct_speech.php'; ?>
                
                <hr class="invisible">

                <?php include 'tpl/frontpage_passport.php'; ?>

                <?php include 'tpl/frontpage_news.php'; ?>

                <?php include 'tpl/frontpage_events.php'; ?>

                <?php include 'tpl/frontpage_talk.php'; ?>

                <?php include 'tpl/frontpage_docs.php'; ?>

                <?php include 'tpl/frontpage_partners.php'; ?>
                
                <hr class="invisible">

            </div>
        </div>
    </div>
    </div>
    
    <?php include 'tpl/site_footer.php'; ?>  

    </div>              
</div>
</body>
</html>
<div class="site-footer">

    <a href="#" class="go-top mobile"></a>

    <div class="site-footer__section-middle">

        <div  class="site-footer-logo desktop">
            <a href="index.php" class="site-footer-logo__image"></a>            
            <div class="site-footer-logo__slogan"></div>            
        </div>

        <div class="site-footer-menu">
            <ul class="menu">                
                <li><a href="page-all-news.php">НОВОСТИ</a></li>
                <li><a href="page-all-events.php">СОБЫТИЯ</a></li>
                <li><a href="page-all-docs.php">ДОКУМЕНТАЦИЯ</a></li>
                <li><a href="page.php">Маршруты</a></li>
                <li><a href="page-simple.php">Темы экскурсий</a></li>
            </ul>
        </div>
        <div class="site-footer-menu-second">
            <ul class="menu">
                <li><a href="page.php">Устав проекта</a></li>
                <li><a href="page-simple.php">Общественное объединение</a></li>
                <li><a href="page-simple.php">Партнеры и бенефициары</a></li>
                <li><a href="page-simple.php">Проекты и инициативы</a></li>
                <li><a href="page-simple.php">Научное сообщество</a></li>
                <li><a href="page-all-authors.php">Экспертное мнение</a></li>
            </ul>
        </div>     
        
        <div class="site-footer-menu-third">
            <?php include 'menu_special.php'; ?>
        </div>

        <div  class="site-footer-logo mobile">
            <a href="index.php" class="site-footer-logo__image"></a>            
            <div class="site-footer-logo__slogan"></div>            
        </div>

</div>
    
<div class="site-footer__section-bottom">    
    <div><a href="page-simple.php">Общественная организация без образования юридического лица НКО «Туманганский путь»</a></div>
    <div>Владивосток, 2024</div>
</div>

<div class="site-footer__section-developer">
    <a href="https://riadesign.ru" target="_blank">RIADESIGN, 24</a>
</div>    

</div>              
<div class="btn-menu-burger mobile"><div><span></span><span></span><span></span></div></div>
</div>

<script type="module">
    import { Slider } from "./js/slider.js";
    import { Menu1 } from "./js/leftcolumn-menu-1.js";
    import { Subpages } from "./js/subpages-menu.js";
    Slider.init("site-main-slider");
    Menu1.init("menu-left-column-1", "btn-toggle");
    Subpages.init("sub-section", "btn-toggle");
</script>

</body>
</html>
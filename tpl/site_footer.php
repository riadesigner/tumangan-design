<div class="site-footer">
    <div class="site-footer__section-middle">
        <div class="site-footer-logo">
            <div class="site-footer-logo__image"></div>            
            <div class="site-footer-logo__slogan"></div>            
        </div>            
        <div class="site-footer-menu">
            <ul class="menu">
                <li><a href="#">СТАТЬИ</a></li>
                <li><a href="#">НОВОСТИ</a></li>
                <li><a href="#">СОБЫТИЯ</a></li>
                <li><a href="#">ОБСУЖДЕНИЕ</a></li>
                <li><a href="#">ДОКУМЕНТАЦИЯ</a></li>
                <li><a href="#">Маршруты</a></li>
                <li><a href="#">Темы экскурсий</a></li>
            </ul>
        </div>
        <div class="site-footer-menu-second">
            <ul class="menu">
                <li><a href="#">Устав проекта</a></li>
                <li><a href="#">Общественное объединение</a></li>
                <li><a href="#">Партнеры и бенефициары</a></li>
                <li><a href="#">Проекты и инициативы</a></li>
                <li><a href="#">Научное сообщество</a></li>
                <li><a href="#">Экспертное мнение</a></li>
            </ul>
        </div>     
        
        <div class="site-footer-menu-third">
            <?php include 'menu_special.php'; ?>
        </div>
</div>
    
<div class="site-footer__section-bottom">
    <div>Владивосток, 2024</div>
    <div><a href="#">Общественная организация без образования юридического лица НКО «Туманганский путь»</a></div>
</div>

<div class="site-footer__section-developer">
    <a href="#">разработчик сайта</a>
</div>    

<script type="module">
    import { Slider } from "./js/slider.js";
    import { Menu1 } from "./js/leftcolumn-menu-1.js";
    import { Subpages } from "./js/subpages-menu.js";
    Slider.init("site-main-slider");
    Menu1.init("menu-left-column-1", "btn-toggle");
    Subpages.init("sub-section", "btn-toggle");
</script>
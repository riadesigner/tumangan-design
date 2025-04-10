export const Menu1 = {    
    init:function(menus_class, btns_class){
        this.$menus = $(`.${menus_class}`);
        this.$buttons = this.$menus.find(`.${btns_class}`);
        this.behavior();
        this.check_homepage();
    },
    behavior:function(){
        const _this=this; 
        this.$buttons.each(function(i,e){
            $(this).on("click",()=>{
                console.log(i)
                _this.$menus.eq(i).toggleClass('opened');
                return false;
            })
        })
    },
    open_all:function(){
        this.$menus.addClass('opened');
    },
    check_homepage:function(){
        const is_home = $('body').hasClass('home');
        is_home && this.open_all();
    }
}
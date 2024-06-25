export const Subpages = {    
    init:function(menu_class, btn_class){
        this.$menu = $(`.${menu_class}`);
        this.$btn = this.$menu.find(`.${btn_class}`);
        this.behavior();
        this.autoclose();
    },
    behavior:function(){
        const _this=this; 
        this.$btn.on("click",()=>{
            this.$menu.toggleClass('opened');
        });
    },
    autoclose:function(){
        this.$menu.removeClass('opened');
    }
}
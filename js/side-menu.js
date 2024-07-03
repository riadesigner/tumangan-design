export const Sidemenu = {    
    init:function(btn_class){        
        this.$menu = $('body');
        this.$btn = this.$menu.find(`${btn_class}`);
        this.behavior();
        this.autoclose();
    },
    behavior:function(){
        const _this=this; 
        this.$btn.on("click",()=>{            
            this.$menu.toggleClass('side-menu-opened');
        });
    },
    autoclose:function(){
        this.$menu.removeClass('side-menu-opened');
    }
}
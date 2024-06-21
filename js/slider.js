export const Slider = {
    init:function(class_name){
        this.$s = $(`.${class_name}`);
        if(!this.$s.length){
            console.log('слайдер не обнаружен');
            return;
        };        
        this.CURRENT_SLIDE = 0;
        this.SLIDER_PAUSE = 5000;
        this.$content = this.$s.find('.container');
        this.$btn_next = this.$s.find('.next');
        this.$btn_prev = this.$s.find('.prev');
        this.$dots_wrapper = this.$s.find('.site-main-slider-dots');        
        this.build();
        this.reset();
        this.autoplay();
        this.behavior();
    },
    get_total_slides:function(){
        return this.$allpages.length;
    },
    reset:function(){
        console.log('reseted')
        this.CURRENT_SLIDE = 0;
        this.recalc_size();
        this.move_slides();
    },
    autoplay:function(){
        this.TMR_AUTOPLAY && clearTimeout(this.TMR_AUTOPLAY);
        this.TMR_AUTOPLAY = setTimeout(()=>{
            this.next_slide();
            this.autoplay();
        },this.SLIDER_PAUSE);
    },
    recalc_size:function(){
        this.SLIDER_SIZE = {
            width:this.$s.width(),
            height:this.$s.height(),
        }
    },
    build:function(){
        this.$allpages = this.$s.find('.slide');
        for (let i=0;i<this.get_total_slides();i++){
            $(this.$allpages[i]).css({left:`${i*100}%`});
            let dot = this.CURRENT_SLIDE===i?'<span class="current"></span>':'<span></span>';
            this.$dots_wrapper.append(dot);
        }        
        this.$dots = this.$dots_wrapper.find('span');
    },
    behavior:function(){
        const _this=this;
        $(window).on('resize',()=>{            
            this.TMR_WIN_RESIZE && clearTimeout(this.TMR_WIN_RESIZE);
            this.TMR_WIN_RESIZE = setTimeout(()=>{
                this.reset();
            },300);
        });
        this.$btn_next.on('click',()=>{
            this.autoplay();
            this.next_slide();            
        });
        this.$btn_prev.on('click',()=>{
            this.autoplay();
            this.prev_slide();            
        });    
        this.$dots.each(function(i){
            $(this).on('click',()=>{
                _this.autoplay();
                _this.CURRENT_SLIDE = i;
                _this.move_slides();
            })
        });
    },
    next_slide:function(){
        this.CURRENT_SLIDE++;
        if(this.CURRENT_SLIDE > this.get_total_slides()-1){ this.CURRENT_SLIDE = 0;}
        this.move_slides();
    },
    prev_slide:function(){
        this.CURRENT_SLIDE--;
        if(this.CURRENT_SLIDE < 0 ){ this.CURRENT_SLIDE = this.get_total_slides()-1;}
        this.move_slides();
    },    
    move_slides:function(){
        let pr = this.CURRENT_SLIDE*100; 
        this.$content.css({'transform':`translateX(-${pr}%)`,transition:'.6s'});
        this.$dots.removeClass('current').eq(this.CURRENT_SLIDE).addClass('current');
    }
}
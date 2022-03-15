$(document).ready(function(){
    $('h1').hide();
    $('.click-btn').click(function(){
        $('.hide-text').hide();
        $('p:last').hide();
        // first li first hide 
        // $('ul li:last').hide();
        // ul er first 2nd li hide
        $('ul li:nth-child(1)').hide();
        //a tag hide
        $('a[target="_blank"]').hide();
    });
    //focus event
    $('input').focus(function(){
        $(this).css('background','#dfdfdf');
        $(this).css('border-color','red');
    })
    $('.this-text').click(function(){
        $(this).hide();
    });
    $('.title').on({
        mouseenter: function(){
            $(this).css('background-color','red');
        },
        mouseleave: function(){
            $(this).css('background-color','green');
        },
        click: function(){
            $(this).css('background-color','yellow');
        }
    });
    //hide btn
    $('.hideBtn').click(function(){
        $('.box1').hide(2000);
    });
    $('.showBtn').click(function(){
        $('.box1').show(2000);
    });
    $('.toggleBtn').click(function(){
        $('.box2').toggle(2000);
    });
    $('.fadeInBtn').click(function(){
        $('.box3').fadeIn(2000);
    });
    $('.fadeOutBtn').click(function(){
        $('.box3').fadeOut(2000);
    });
    $('.fadeToBtn').click(function(){
        $('.box4').fadeTo('slow',0.3);
    });
    $('.fadeToggleBtn').click(function(){
        $('.box5').fadeToggle(2000);
    });
    $('.slideBtn').click(function(){
        $('.slide-text1').slideDown(2000);
    });
    $('.slideBtn').click(function(){
        $('.slide-text1').slideUp('slow');
    });
    $('.slideToggleBtn').click(function(){
        $('.slide-text2').slideToggle(2000);
    });
    $('.stopBtn').click(function(){
        $('.slide-text2').stop();
    });
    $('.animateBtn1').click(function(){
        $('.box6').animate({
            top: '100px',
            width:'+=150px',
            height:'+=150px'
        });
    });
    $('.animateBtn2').click(function(){
        $('.box7').animate({
            top: '100px',
            width:'-=50px',
            height:'-=50px'
        });
    });
    $('.animateBtn3').click(function(){
        //animate a toggle use
        // $('.box8').animate({
        //     height:'toggle',
        //     width:'toggle'
        // });
        //animate a variable use
        var animateToggle = $('.box8');
        animateToggle.animate({left: '300px'}, 'slow');
        animateToggle.animate({height: '300px', opacity: '0.5'}, 'slow');
        animateToggle.animate({width: '300px', opacity: '0.7'}, 'slow');
        animateToggle.animate({fontSize: '50px'}, 'slow');
        animateToggle.animate({height: '100px', opacity: '0.3'}, 'slow');
        animateToggle.animate({width: '100px', opacity: '1'}, 'slow');
        animateToggle.animate({right: '300px'}, 'slow');
        animateToggle.animate({fontSize: '20px'}, 'fast');
    });
});
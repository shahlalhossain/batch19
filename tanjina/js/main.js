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
        $(this).css('background','#dfdfdf')
    })
    $('.this-text').click(function(){
        $(this).hide();
    });
});
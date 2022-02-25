// serch
function openSearch() {
    $('body').addClass("active-search");
    document.getElementById("search_toggle_desc").style.height = "auto";
    $('#search_toggle_desc').addClass("sideb");
    $('.search_query').attr('autofocus', 'autofocus').focus();
}
function closeSearch() {
    $('body').removeClass("active-search");
    document.getElementById("search_toggle_desc").style.height = "0";
    $('#search_toggle_desc').addClass("siden");
}
// end
/* Slider Loader*/
$(window).load(function myFunction() {
    $(".s-panel .loader").removeClass("wrloader");
});
/* *-----* */
/* dropdown effect of account */
// $(document).ready(function () {
//     if ($(window).width() <= 991) {
//     $('.wishlist').appendTo('.account');
//     $('.compro').appendTo('.account');
// }
// });
$(document).ready(function () {
    if ($(window).width() <= 767) {
    $('.catfilter').appendTo('.appres');
    $('#menu').appendTo('.bbb');
    $('#logo').appendTo('.bbb');
    $('.carts').appendTo('.bbb');
    $('#search_widget').appendTo('.bbb');
    $('#column-left').appendTo('#content');
    $('.copys').insertAfter('.botom-ful #column-right');
    $('.langcur').appendTo('.dropdown-menu.account');
    // $('.dropdown button.test').on("click", function (e) {
    //     $(this).next('ul').toggle();
    //     e.stopPropagation();
    //     e.preventDefault();
    // });

    // $('.dropdown a.account').on("click", function (e) {
    //     $(this).next('ul').toggle();
    //     e.stopPropagation();
    //     e.preventDefault();
    // });    
}

});

/* left column responsive */
function wbFilters(){

  if ($(window).width() <= 767) {
    $('#column-left').appendTo('#content');
  } else {
    $('#column-left').appendTo('#column-left');
  }
}
$(document).ready(function(){ wbFilters(); });
$(window).resize(function(){ wbFilters(); });

/* dropdown */  

// rating
$(document).ready(function () {
$("#ratep,#ratecount").click(function() {
    $('html, body').animate({ 
        scrollTop: $(".product-tab").offset().top }, 1800);
    });
$('.imgbanner').appendTo('.imgbnr');
});
// rating end

$(document).ready(function () {
$('.dropdown button.test').on("click", function(e)  {
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
});
});


// search dropdwon
$(document).ready(function () {
$(".position-static .search-down").click(function(){
    $('.position-static .searchtg').parent().toggleClass('active');
    $('.position-static .searchtg').toggle('slow',function(){});
    $('.position-static .ui-autocomplete-input').attr('autofocus','autofocus').focus()});
});
// end

/* responsive menu */
function openNav() {
    $('body').addClass("active");
    document.getElementById("mySidenav").style.width = "250px";
    jquery('#mySidenav').addClass("dblock");
}
function closeNav() {
    $('body').removeClass("active");
    document.getElementById("mySidenav").style.width = "0";
    jquery('#mySidenav').addClass("dnone");
}

/* sticky header */

// header top
$(document).ready(function(){
if ($(document).width() >= 768){
$(window).scroll(function () {
    if ($(this).scrollTop() > 165) {
        $('.menus').addClass('fixed fadeInDown animated');
    } else {
        $('.menus').removeClass('fixed fadeInDown animated');
    }
});
};
});

//go to top
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });
});

$(document).ready(function(){
       if ($(window).width() >= 1600){
    var count_block = $('.m-menu').length;
    var number_blocks = 7;
    //console.log(count_block);
    if(count_block < number_blocks){
        return false; 
    }
    else {
        $('.m-menu').each(function(i,n){
            $('m-menu').addClass(i);
            if(i == number_blocks) {
            $(this).append('<li class="view_more my-menu"><i class="fa fa-plus thumb_img"></i><a class="dropdown-toggle">More Categories</a></li>');
            }
            if(i> number_blocks) {
            $(this).addClass('wr_hide_menu').hide();
            }
        });
        $('.view_more').click(function() {
            $(this).toggleClass('active');
            $('.wr_hide_menu').slideToggle();
        });
    }
}
});

$(document).ready(function(){
       if ($(window).width() >= 1410 && $(window).width() <= 1599){
    var count_block = $('.m-menu').length;
    var number_blocks = 6;
    //console.log(count_block);
    if(count_block < number_blocks){
        return false; 
    }
    else {
        $('.m-menu').each(function(i,n){
            $('m-menu').addClass(i);
            if(i == number_blocks) {
            $(this).append('<li class="view_more my-menu"><i class="fa fa-plus thumb_img"></i><a class="dropdown-toggle">More Categories</a></li>');
            }
            if(i> number_blocks) {
            $(this).addClass('wr_hide_menu').hide();
            }
        });
        $('.view_more').click(function() {
            $(this).toggleClass('active');
            $('.wr_hide_menu').slideToggle();
        });
    }
}
});

$(document).ready(function(){
       if ($(window).width() >= 1200 && $(window).width() <= 1409){
    var count_block = $('.m-menu').length;
    var number_blocks = 5;
    //console.log(count_block);
    if(count_block < number_blocks){
        return false; 
    }
    else {
        $('.m-menu').each(function(i,n){
            $('m-menu').addClass(i);
            if(i == number_blocks) {
            $(this).append('<li class="view_more my-menu"><i class="fa fa-plus thumb_img"></i><a class="dropdown-toggle">More Categories</a></li>');
            }
            if(i> number_blocks) {
            $(this).addClass('wr_hide_menu').hide();
            }
        });
        $('.view_more').click(function() {
            $(this).toggleClass('active');
            $('.wr_hide_menu').slideToggle();
        });
    }
}
});

$(document).ready(function(){
       if ($(window).width() >= 992 && $(window).width() <= 1199){
    var count_block = $('.m-menu').length;
    var number_blocks = 4;
    //console.log(count_block);
    if(count_block < number_blocks){
        return false; 
    }
    else {
        $('.m-menu').each(function(i,n){
            $('m-menu').addClass(i);
            if(i == number_blocks) {
            $(this).append('<li class="view_more my-menu"><i class="fa fa-plus thumb_img"></i><a class="dropdown-toggle">More Categories</a></li>');
            }
            if(i> number_blocks) {
            $(this).addClass('wr_hide_menu').hide();
            }
        });
        $('.view_more').click(function() {
            $(this).toggleClass('active');
            $('.wr_hide_menu').slideToggle();
        });
    }
}
});
$(document).ready(function(){
       if ($(window).width() >= 768 && $(window).width() <= 991){
    var count_block = $('.m-menu').length;
    var number_blocks = 5;
    //console.log(count_block);
    if(count_block < number_blocks){
        return false; 
    }
    else {
        $('.m-menu').each(function(i,n){
            $('m-menu').addClass(i);
            if(i == number_blocks) {
            $(this).append('<li class="view_more my-menu"><i class="fa fa-plus thumb_img"></i><a class="dropdown-toggle">More Categories</a></li>');
            }
            if(i> number_blocks) {
            $(this).addClass('wr_hide_menu').hide();
            }
        });
        $('.view_more').click(function() {
            $(this).toggleClass('active');
            $('.wr_hide_menu').slideToggle();
        });
    }
}
});

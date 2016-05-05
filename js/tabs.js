/**
 * Created by click on 29.04.16.
 */
//______________________________________СКРИПТ_ДЛЯ_ПЕРЕКЛЮЧЕНИЯ_ВКЛАДОК___________________________________________

$(document).ready(function(){
    $('.tabs_menu a').click(function(e) {
        e.preventDefault();
        $('.tabs_menu .active').removeClass('active');
        $(this).addClass('active');
        var tab = $(this).attr('href');
        $('.tab').not(tab).css({'display':'none'});
        $(tab).fadeIn(400);
    });
});

//__________________________________________END_OF_SCRYPT________________________________________________________

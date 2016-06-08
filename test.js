/**
 * Created by click on 25.07.15.
 */

//this command will show alert window with test "No error"
//alert("No error");
//this command will show two other windows what will shows from firs to last step by step
//[1, 2]. forEach(alert);

    // 'var' its is variable. so i just set var name; then save in vat string

"use strict";
function pushit () {

    var login = prompt('Enter your name', '');

    if (login == null) {
        alert('Goodbye');
    }
    else if (login != 'Click') {
        alert('User name is wrong');
    }
    else if (login == 'Click') {

        var password = prompt ('Enter your password', ''); {
            if (password == null) {
                alert('Goodbye');
            }
            else if (password != '1111') {
                alert('Password is wrong');
            }
            else if (password == '1111') {
                alert('Hello Click');
            }
        }
    }
}


function pushit1 () {
    var numbers = prompt("Please type a digit from 1 to -1 or 0", '0');
    if (numbers == null) alert('See you');
    else if (numbers > +0) alert('1');
    else if (numbers < +0) alert('-1');
    else if (numbers == +0) alert('0');
    else {
        alert('This is not a digits');
    }
}

function pushit2 () {
    //var age = prompt('возраст?', 18);
    //
    //var message = (age < 3) ? 'Здравствуй, малыш!' :
    //    (age < 18) ? 'Привет!' :
    //        (age < 100) ? 'Здравствуйте!' :
    //            'Какой необычный возраст!';
    //
    //alert( message );

    //var a = prompt('enter digit: ');
    //var b = prompt('enter digit: ');
    //((+a) + (+b) <= +4) ? alert('Malo') : alert('rovno 4') : alert('Mnogo');

    var login = prompt('Enter login', '');
    var message  = (login == 'asd') ? 'Привет':
    (login == 'asdf') ? 'Здравствуйте':
    (login == '') ? 'Нет логина':
    'Wrong Login';
    alert(message);
}

function pushit3 () {

    var age = prompt('Your age', '14');
    if (age <= 14 || age >= 90) alert('true');
    //if (!(age > 14 && age < 90)) alert('true');
    else {
        alert('false');
    }
}

function pushit4 () {

    for (var i=2; i<=10; i++){
        if (i==2);
        else if (i%2==0) continue;
        else if (i>7) break;
        alert( i );
    }
}

function pushit5 () {

    document.onkeydown = function(evt) {
        evt = evt || window.event;
        if (evt.keyCode == 37) {
            window.open("http://vk.com");
        }
    };

    var a = +prompt('a?', '');
    switch (a){
        case 0:
            alert('0');
            break;
        case 1:
            alert('1');
            break;
        case 2:
        case 3:
            alert('2,3');
            break;
        default: alert("Nop, i dont know this digit");
    }
}

function pushit6 () {

    function kidage(age) {
        if (age > 18) {
            return true;
        }else{
            return confirm('Родители разрешили?');}
        }

        var age = prompt('Enter your age', '');
            if (kidage(age)) {
                alert('Доступ разрешен');
                window.open("http://vk.com");
            }else{ alert('Get out');}
}

function pushit7 () {
    var testalert = prompt('Please type any digits');
        if (testalert == null) alert('see you');
            else if (testalert == '0' || testalert == '00' || testalert == '000') alert('this is a digit');
            else if (testalert == '0000') alert('STOP DO THIS SHIT, type other digits');
            else if (testalert == '') alert('here is empty, try one more time');
            else if (testalert >0 || testalert <0) alert('this is a digit');
        else alert('this is not a digit');
}

function pushit8 () {
    function isInteger(num) {
        return (num^0)===num;
    }
    alert(isInteger(1));
    alert(isInteger(1.3));
    alert(isInteger(2));
}

function pushit9 () {
    document.location.replace("http://www.click.s-host.net")
}

function btn1 () {

}

//_____________________________________GALLERY_SETTINGS___________________________________________________________

$(function () {
    "use strict";
    $ ('.pics').glisse({speed: 500, changeSpeed: 500, effect:'bounce', fullscreen: true});
});

//______________________________________________END_______________________________________________________________

//______________________________________GALLERY_SPOILER_BTN_______________________________________________________
$(document).ready(function(){
    "use strict";
    $(".btn-slide1").click(function(){
        $("#panel1").slideToggle(120);
        $(this).toggleClass("active"); return false;
    });
});


$(document).ready(function(){
    "use strict";
    $(".btn-slide2").click(function(){
        $("#panel2").slideToggle(120);
        $(this).toggleClass("active"); return false;
    });
});
//______________________________________________END_______________________________________________________________
$(document).ready(function(){

    $("#panel2 .delete").click(function(){
        $(this).parents("#panel2").animate({ opacity: "hide" }, "slow");
    });

});
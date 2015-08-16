/**
 * Created by click on 25.07.15.
 */

//this command will show alert window with test "No error"
//alert("No error");
//this command will show two other windows what will shows from firs to last step by step
//[1, 2]. forEach(alert);

    // 'var' its is variable. so i just set var name; then save in vat string

//var planet = "Earth", username = "Click";
//alert (planet);
//alert (username);

//var count = 2+3;
//    alert (count);

//var a = 1, b = 1, c, d;
//
//c = ++a; alert(c); // 2
//d = b++; alert(d); // 1
//
//c = (2+ ++a); alert(c); // 5
//d = (2+ b++); alert(d); // 4
//
//alert(a); // 3
//alert(b); // 3
"use strict";
function pushit () {
    var username = prompt('What is your name ', '');
    if ( username != 'Click' ) alert ('It is wrong');
    if ( username == 'Click') alert('This is it');
    // // from my lesson #comparison
    //var a = 'Apolon', b = 'Ground';
    //alert( a < b );
}
function pushit1 () {
    var isAdmin = confirm ("Are u Administrator?");
    alert(isAdmin);
    // from my lesson #comparison
    //var a = +'82', b = +'24';
    //have to use  plus + to see digit
    //alert( a < b );
}
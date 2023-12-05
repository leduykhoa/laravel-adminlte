/*
 *  ............(¯``•.
 *  ..............(¯`•(¯`•............_/)/)
 *  ...............(¯`•.(¯`•.......((.....((
 *  ................(¯``•(¯`•...((.)..(. ‘ /)
 *  .................(¯``•.(¯`((.)....|\_/
 *  .....,,,~”¯¯¯``¯(_¸´(_.)......|
 *  ...(((./...........................)__
 *  ..((((.\......),,...........(...../__`\
 *  ..))))..\ . .//...¯¯¯¯¯¯¯` \.../... / /
 *  .(((...../ .// .............. | ./...../
 *  .))).....| ||.................| |...........♥♥♥
 *  ((........) \.................) \...........\|/
 *  .^^^^.""`"`.^^^^^^^..""".^^^^.""""
 *  ( ͡° ͜ʖ ͡°( ಠ ͜ʖ ಠ ) ͡° ͜ʖ ͡°) ( ͡° ͜ʖ ͡°( ಠ ͜ʖ ಠ ) ͡° ͜ʖ ͡°) ( ͡° ͜ʖ ͡°( ಠ ͜ʖ ಠ ) ͡° ͜ʖ ͡°)
 *  ≧◔◡◔≦ ≧◔◡◔≦ ≧◔◡◔≦ ≧◔◡◔≦ ≧◔◡◔≦ ≧◔◡◔≦ ≧◔◡◔≦ ≧◔◡◔≦
 *  
 *  Copyright © 2009-2021 Lê Duy Khoa. All rights reserved.
 *  Mail: leduykhoa060690@gmail.com
 *  Skype: leduykhoa060690
 *  Website: http://web-fast.com
 *  Mobile: +84973421508
 *  Date: 2021/01/10
 *  Time: 04:02:04
 */

// $.widget.bridge('uibutton', $.ui.button)
// (function() {

// })();

'use strict';

window.addEventListener(`load`, function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.getElementsByClassName(`needs-validation`);
    // Loop over them and prevent submission
    Array.prototype.filter.call(forms, function (form) {
        form.addEventListener(`submit`, function (event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add(`was-validated`);
        }, false);
    });
}, false);
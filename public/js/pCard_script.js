/*global $, console*/

$(function () {
   
    'use strict';
    
    $('.pCard_add').click(function () {
        var superBlock=$(this).closest('.pCard_card');
        superBlock.toggleClass('pCard_on');
        superBlock.find('.pCard_add i').toggleClass('fa-minus');
    });
    

});
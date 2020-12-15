define([
    'jquery',
    'mage/translate',
    'jquery/ui',
], function ($, $t,alert) {
    'use strict';

    return function (Minicart) {
     return Minicart.extend({
      
       update: function (updatedCart) {
           console.log('update minicart paused');
           console.log(updatedCart);
           return this._super(updatedCart);;
        }
     });
  }
});
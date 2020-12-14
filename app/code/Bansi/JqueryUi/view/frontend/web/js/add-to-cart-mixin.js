define([
    'jquery',
    'mage/translate',
    'jquery/ui',
], function ($, $t,alert) {
    'use strict';

    return function (widget) {
      console.log('catalog-add-to-cart-mixin');

    $.widget('mage.catalogAddToCart', widget, {
    	submitForm: function (form) {
            console.log('add to cart paused');
             console.log(form);
          return this._super(form);
        }
    });

    return $.mage.catalogAddToCart;
  }
});
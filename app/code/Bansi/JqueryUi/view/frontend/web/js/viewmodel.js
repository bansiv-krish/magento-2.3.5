define([
    'uiComponent','Bansi_JqueryUi/js/ko-binding/pixelbg'
], function (UiComponent) {
    'use strict';

   return UiComponent.extend({
   	defaults:{
   		pixelSize:10,
   		tracks:{
   			pixelSize:true
   		}
   	}
   });
});
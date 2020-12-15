define([
    'uiElement'
], function (UiElement) {
    'use strict';

   return UiElement.extend({
    defaults:{
    	title:'component B',
    	value:2.2,
		tracks:{
			value:true
		}
    }
   });
});
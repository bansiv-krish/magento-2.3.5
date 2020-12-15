define([
    'uiElement'
], function (UiElement) {
    'use strict';

   return UiElement.extend({
    defaults:{
    
    	tracks:{
			input:true
		},
    	input:'some random string',
        statefull:{
            input:true
        },
    }
   });
});
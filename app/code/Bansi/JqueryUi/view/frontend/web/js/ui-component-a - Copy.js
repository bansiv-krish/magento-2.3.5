define([
    'uiElement'
], function (UiElement) {
    'use strict';

   return UiElement.extend({
    defaults:{
    	label:'component A',
    	amount:11,
    	tracks:{
			amount:true
		},
    	imports:{
    		amount:'${$.provider}:${$.providerProperty}'
    	}
    }
   });
});
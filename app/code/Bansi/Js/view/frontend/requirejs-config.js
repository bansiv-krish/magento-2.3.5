var config = {
 config: {
     mixins: {
         
         'Magento_Checkout/js/checkout-data':{
         	 'Bansi_Js/js/checkout-data-mixin': true
         }
     }
 },
 deps:['Bansi_Js/js/log-when-loaded'],
 shim:{
 	'Magento_Catalog/js/view/compare-products':{
         	 deps:['Bansi_Js/js/before-compare-products'], 
         }
 },
 map: {
        '*': {
            coffee: 'Bansi_Js/js/requirejs-example',
          
        }
    },
    paths:{
    	'Bansi':'Bansi_Js/js/v2'
    }
};
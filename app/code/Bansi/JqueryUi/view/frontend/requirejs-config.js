var config = {
 config: {
     mixins: {
         'Magento_Catalog/js/catalog-add-to-cart': {
             'Bansi_JqueryUi/js/add-to-cart-mixin': true
         },
         'Magento_Checkout/js/view/minicart':{
         	 'Bansi_JqueryUi/js/minicart-mixin': true
         }
     }
 }
};
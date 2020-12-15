define(['ko'], function (ko) {
    'use strict';

  //   return function (config) {
  //     console.log('plain view file');
  //     const title=ko.observable('Bansi');
  //      title.subscribe(function (newValue){
  //        console.log('changed value: ',newValue);
  //      });
  //      title.subscribe(function (oldValue){
  //        console.log('will be changed from: ',oldValue);
  //      },this,'beforeChange');
  //     return {

  //       title:title,
  //       config :config
  //     }
  // }
  // return function (config) {
  //   let Currencyinfo=ko.observable();
  //   $.getJSON(config.base_url + 'rest/V1/directory/currency',Currencyinfo );
  //   const viewModel= {
  //     label: ko.observable('Currency Info')
     
  //   };
  //   viewModel.output=ko.computed (function(){
  //     if(Currencyinfo()){
  //     return this.label() + ':\n' +JSON.stringify(Currencyinfo(),null,2) ;
  //   }else{
  //     return 'loading...';
  //   }
  //   }.bind(viewModel));
  //   return viewModel;
  // }
  return function () {
    
    const viewModel= ko.track({
      label:'A View model with ko observable',
      additional_charge:2,
      items:[
          {name:'abx',qty:2,price:10},
          {name:'aa',qty:1,price:10},
        ],
      rowTotal:item=>item.qty*item.price,
      total:function(){
        const sum=this.items.map(this.rowTotal).reduce((acc,curr)=>acc+curr);
        return sum+this.additional_charge;
      }
  
    
    });
    ko.getObservable(viewModel,'additional_charge').subscribe(function (newValue){
         console.log('additional Charge changed to: ',newValue);
       });;
    return viewModel;
  }
});
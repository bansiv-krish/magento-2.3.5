define([
    'Bansi_JqueryUi/js/lib/pixel-image-canvas','Bansi_JqueryUi/js/lib/create-background-canvas'
], function (pixelImageCanvas,createBackgroundCanvas) {
    'use strict';

   return function(config,targetElement,maybeCanvas){
   	const src=config.src || '';
   	const pixelSize =Math.max(config.pixelSize || 5,1);
   	const canvas=maybeCanvas || createBackgroundCanvas(targetElement);
   	canvas.style.opacity=config.opacity || .5;
   	const cols=Math.floor(canvas.scrollWidth/pixelSize);
   	const rows=Math.floor(canvas.scrollHeight/pixelSize);

   	pixelImageCanvas(canvas,src,cols,rows);
   	return canvas;
   };
});
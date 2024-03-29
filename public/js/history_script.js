'use strict';



/**
 * PRELOAD
 * 
 * loading will be end after document is loaded
 * 
 * AUTOLOAD
 */

const preloader = document.querySelector("[data-preaload]");

window.addEventListener("load", function () {
  preloader.classList.add("loaded");
  document.body.classList.add("loaded");
});



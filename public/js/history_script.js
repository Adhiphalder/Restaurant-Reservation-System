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

document.querySelectorAll('.button').forEach(button => button.addEventListener('click', e => {
  if(!button.classList.contains('delete')) {
      button.classList.add('delete');
      setTimeout(() => button.classList.remove('delete'), 3200);
  }
  e.preventDefault();
}));


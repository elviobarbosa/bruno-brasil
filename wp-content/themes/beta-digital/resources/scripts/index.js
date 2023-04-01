import $ from 'jquery';
import Menu from './components/menu';
import VimeoControl from './components/vimeo-control';
import Transition from './components/transition';
import Work from './components/work';

function domReady(fn) {
    // If we're early to the party

    document.addEventListener("DOMContentLoaded", fn);
    // If late; I mean on time.
    if (document.readyState === "interactive" || document.readyState === "complete" ) {
      new Menu();
      new VimeoControl();
      new Transition();
      new Work();
    }
}

const init = function() {
  let start = false;
  
  window.addEventListener('mousemove', e => {
    if ( !start ) {
      start = true;
      const url = window.location.host;
      const http = window.location.protocol;
    }
  });
}

window.onload = function() {
  init();
};

domReady(() => { })

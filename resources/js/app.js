import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);
document.addEventListener('keydown', function(event) {
    if (event.ctrlKey && event.keyCode === 75) {
      // Ctrl + K is pressed, open the search bar
      openSearchBar();
      event.preventDefault(); // Prevent default browser behavior
    }
  });
Alpine.start();

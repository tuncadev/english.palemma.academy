import './bootstrap';
import 'flowbite';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.addEventListener('pageshow', function(event) {
    if (event.persisted) {
        window.location.reload();
    }
  });


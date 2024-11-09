import './bootstrap';
import 'flowbite';
import Alpine from 'alpinejs';
import Plyr from 'plyr';



// Initialize Plyr
const player = new Plyr('#modalVideo', {
    fullscreen: { enabled: true, fallback: true, iosNative: true }
});

window.Alpine = Alpine;

Alpine.start();

window.addEventListener('pageshow', function(event) {
    if (event.persisted) {
        window.location.reload();
    }
  });
  document.addEventListener('DOMContentLoaded', () => {
    const player = new Plyr('#modalVideo', {
        fullscreen: { enabled: true, fallback: true, iosNative: true }
    });
});


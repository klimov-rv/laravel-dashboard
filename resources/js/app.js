import './bootstrap';
import './animate';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.getElementsByClassName('logo-kp')[0].addEventListener('click', function () { 
    document.getElementsByClassName('intro')[0].classList.toggle('open-menu');
});

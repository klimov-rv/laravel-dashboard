import './bootstrap';
import './animate';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


document.addEventListener('DOMContentLoaded', function () {

    let isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
    let preloader = document.getElementById('preloader');

    if (!isMobile) {
        setTimeout(function () {
            preloader.classList.add('preloaded');
        }, 300);
        setTimeout(function () {
            preloader.remove();
        }, 2000);

    } else {
        preloader.remove();
    }

    document.getElementsByClassName('logo-kp')[0].addEventListener('click', function () {
        document.getElementsByClassName('intro')[0].classList.toggle('open-menu');
    });

    function scrollFunction() {
        if (event.originalEvent.wheelDelta >= 0) {
            console.log('Scroll up');
        }
        else {
            console.log('Scroll down');
        }
    }

    document.getElementsByClassName('logo-kp')[0].addEventListener('click', function () {
        document.getElementsByClassName('intro')[0].classList.toggle('open-menu');
    });

    window.onwheel = e => {
        if (e.deltaY >= 0) {
            document.getElementsByClassName('intro')[0].classList.add('open-menu');
        } else {
            document.getElementsByClassName('intro')[0].classList.remove('open-menu');
        }
    }


    let touchstartY = 0

    function checkDirection() {
        if (touchendY < touchstartY) document.getElementsByClassName('intro')[0].classList.add('open-menu');
        if (touchendY > touchstartY) document.getElementsByClassName('intro')[0].classList.remove('open-menu');
    }

    document.addEventListener('touchstart', e => {
        touchstartY = e.changedTouches[0].screenY
    })

    document.addEventListener('touchend', e => {
        touchendY = e.changedTouches[0].screenY
        checkDirection()
    })

}, false);

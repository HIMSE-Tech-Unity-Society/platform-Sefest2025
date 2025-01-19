window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    const cs =document.querySelector('#contactperson');
    if (window.scrollY > 0) {
        navbar.style.backgroundColor = 'rgba(135deg, #1b004f, #54008b, #c700ff)';
        cs.classList.remove('hidden');
        cs.classList.add('block');
    } else {
        navbar.style.backgroundColor = 'rgba(255, 255, 255, 0)';
         cs.classList.add('hidden');
         cs.classList.remove('block');
    }
});

// Hamburger

const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

// Toggle hamburger dan nav-menu visibility saat hamburger diklik
hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});

// Klik di luar hamburger untuk menutup menu
window.addEventListener('click', function(e) {
    if (!hamburger.contains(e.target) && !navMenu.contains(e.target)) {
        hamburger.classList.remove('hamburger-active');
        navMenu.classList.add('hidden');
    }
});

// Contact person




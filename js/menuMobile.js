// Seleciona elementos do menu mobile
const btnMenu = document.getElementById('btn-menu');
const menuMobileUl = document.querySelector('#mobile ul');
const menuIcon = btnMenu.querySelector('i');

// Controla abertura/fechamento do menu mobile
btnMenu.addEventListener('click', () => {
    const isActive = menuMobileUl.classList.contains('active');

    if (isActive) {
        // Fecha menu
        menuMobileUl.classList.remove('active');
        menuIcon.classList.remove('fa-xmark');
        menuIcon.classList.add('fa-bars');
        document.body.classList.remove('menu-open'); // se usar para bloquear scroll no body
    } else {
        // Abre menu
        menuMobileUl.classList.add('active');
        menuIcon.classList.remove('fa-bars');
        menuIcon.classList.add('fa-xmark');
        document.body.classList.add('menu-open'); // se quiser bloquear scroll no body
    }
});
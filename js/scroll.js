document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const href = this.getAttribute('href');

        if (href.length > 1 && href.startsWith('#')) {
            e.preventDefault();

            const target = document.querySelector(href);
            if (!target) return;

            const isMenuOpen = menuMobileUl.classList.contains('active');

            if (isMenuOpen) {
                // Fecha o menu antes do scroll
                menuMobileUl.classList.remove('active');
                menuIcon.classList.remove('fa-xmark');
                menuIcon.classList.add('fa-bars');
                document.body.classList.remove('menu-open');

                // Espera fechar o menu para dar scroll
                setTimeout(() => {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    history.pushState(null, null, href);
                }, 300);
            } else {
                // Scroll direto
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                history.pushState(null, null, href);
            }
        }
    });
});

// Scroll suave ao carregar página com hash na URL
window.addEventListener('load', () => {
    const hash = window.location.hash;
    if (hash) {
        const target = document.querySelector(hash);
        if (target) {
            setTimeout(() => {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }, 500);
        }
    }
});

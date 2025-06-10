function aparecerNoScroll(seletor) {
    const elementos = document.querySelectorAll(seletor);

    const observer = new IntersectionObserver((entradas) => {
        entradas.forEach(entrada => {
            if (entrada.isIntersecting) {
                entrada.target.classList.add('aparecer');
            } else {
                entrada.target.classList.remove('aparecer');
            }
        });
    }, {
        threshold: 0.1 // Quando 10% do elemento aparecer na tela
    });

    elementos.forEach(el => observer.observe(el));
}

aparecerNoScroll('.sumir');
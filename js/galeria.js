document.addEventListener("DOMContentLoaded", () => {
    const btnGaleriaAbrir = document.querySelector('#btn-galeria');
    const btnGaleriaFechar = document.querySelector('#fechar-galeria');
    const galeria = document.querySelector('.galeria');

    btnGaleriaAbrir.addEventListener('click', () => galeria.classList.add('ativo'));
    btnGaleriaFechar.addEventListener('click', () => galeria.classList.remove('ativo'));
});
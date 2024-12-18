function toggleDrop(event) {
    const drop = document.querySelector('.drop');

    if (drop.style.opacity === '0' || drop.style.opacity === '') {
        drop.style.visibility = 'visible';
        drop.style.opacity = '1';
        drop.classList.remove('magictime', 'puffOut');
        drop.classList.add('magictime', 'puffIn');
    } else {
        drop.classList.remove('magictime', 'puffIn');
        drop.classList.add('magictime', 'puffOut');
        setTimeout(() => {
            drop.style.opacity = '0';
            drop.style.visibility = 'hidden';
        }, 500);
    }
}

document.addEventListener('click', function (event) {
    const drop = document.querySelector('.drop');
    const button = document.querySelector('.btn-opciones');

    if (!button.contains(event.target) && !drop.contains(event.target)) {
        if (drop.style.opacity === '1') {
            drop.classList.remove('magictime', 'puffIn');
            drop.classList.add('magictime', 'puffOut');
            setTimeout(() => {
                drop.style.opacity = '0';
                drop.style.visibility = 'hidden';
            }, 500);
        }
    }
});

const btnClose = document.querySelector('.btn-close');
const barraLateral = document.querySelector('.barraLateral');
const contenedorDerecha = document.querySelector('.contenedorDerecha');

btnClose.addEventListener('click', () => {
    barraLateral.classList.toggle('compacta');
        if (barraLateral.classList.contains('compacta')) {
            barraLateral.style.width = '50px';
            contenedorDerecha.style.marginLeft = '50px';
        } else {
            barraLateral.style.width = '250px';
            contenedorDerecha.style.marginLeft = '250px';
        }
}); 
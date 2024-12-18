//Navegación De Los Botones
function showTab(tabName) {

    const tabs = document.querySelectorAll('.tab-content');
    tabs.forEach(tab => {
        tab.classList.remove('active');
    });
    const activeTab = document.getElementById(tabName);
    activeTab.classList.add('active');
}

document.addEventListener('DOMContentLoaded', () => {
    showTab('emision');
}); 


//Estilos Del Widget
function showTab(tabId) {
    const buttons = document.querySelectorAll('.tab-button');
        buttons.forEach(button => button.classList.remove('active'));

    const activeButton = document.querySelector(`.tab-button[onclick="showTab('${tabId}')"]`);
        if (activeButton) {
            activeButton.classList.add('active');
        }

    const tabs = document.querySelectorAll('.tab-content');
        tabs.forEach(tab => tab.classList.remove('active'));

    const activeTab = document.getElementById(tabId);
        if (activeTab) {
            activeTab.classList.add('active');
        }
}


//Fecha Diaria
function updateDateTime() {
    const input = document.getElementById("datetime");
    const now = new Date();
    const formattedDateTime = now.toLocaleDateString() + " " + 
        now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', hour12: true });
        input.value = formattedDateTime;
}

    setInterval(updateDateTime, 60000);
    updateDateTime();


//Limpiar Campo De Entrada y Mostrar Ventana Emergente
function limpiarInput() {
    document.getElementById("descripcionInput").value = "";
}
function limpiarTacho() {
    document.getElementById("codigoInput").value = "";
}


//Pintar El Color Del Nombre Del Metodo De Pago
document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('.seleccionable');

    images.forEach(img => {
        img.addEventListener('click', () => {
            document.querySelectorAll('.desPago.active').forEach(activeItem => {
                activeItem.classList.remove('active');
            });

            const parent = img.closest('section');
            const desPago = parent.querySelector('.desPago');
            desPago.classList.add('active');
        });
    });
});


//Aparecer y Desaparecer Ventana De Busqueda Mayoritaria
function toggleBusqueda(event) {
    const contenedorBusqueda = document.querySelector('.contenedorBusqueda');

    if (contenedorBusqueda.style.opacity === '0' || contenedorBusqueda.style.opacity === '') {
        contenedorBusqueda.style.visibility = 'visible';
        contenedorBusqueda.style.opacity = '1';
        contenedorBusqueda.classList.remove('magictime', 'spaceOutDown');
        contenedorBusqueda.classList.add('magictime', 'spaceInUp');
    } else {
        contenedorBusqueda.classList.remove('magictime', 'spaceInUp');
        contenedorBusqueda.classList.add('magictime', 'spaceOutDown');
        setTimeout(() => {
            contenedorBusqueda.style.opacity = '0';
            contenedorBusqueda.style.visibility = 'hidden';
        }, 500);
    }
}

document.querySelector('.buscarBtn').addEventListener('click', toggleBusqueda);

document.querySelector('.btnCerrar').addEventListener('click', function() {
    const contenedorBusqueda = document.querySelector('.contenedorBusqueda');
    contenedorBusqueda.classList.remove('magictime', 'spaceInUp');
    contenedorBusqueda.classList.add('magictime', 'spaceOutUp');
    setTimeout(() => {
        contenedorBusqueda.style.opacity = '0';
        contenedorBusqueda.style.visibility = 'hidden';
    }, 500);
});

document.addEventListener('click', function (event) {
    const contenedorBusqueda = document.querySelector('.contenedorBusqueda');
    const buscarBtn = document.querySelector('.buscarBtn');

    if (!buscarBtn.contains(event.target) && !contenedorBusqueda.contains(event.target)) {
        if (contenedorBusqueda.style.opacity === '1') {
            contenedorBusqueda.classList.remove('magictime', 'spaceInUp');
            contenedorBusqueda.classList.add('magictime', 'spaceOutUp');
            setTimeout(() => {
                contenedorBusqueda.style.opacity = '0';
                contenedorBusqueda.style.visibility = 'hidden';
            }, 500);
        }
    }
});

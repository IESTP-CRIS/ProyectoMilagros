<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assent/CSS/Global.css">
    <link rel="stylesheet" href="../Assent/CSS/VentasFacturas.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magic/1.1.0/magic.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <title>Factura Online</title>
</head>

<body>
    <header class="head">
        <section class="headIzquierda">
            <div class="contenedorLogo">
                <figure>
                    <img src="../Assent/logotipo.png" alt="Logotipo De Stock Master">
                </figure>
            </div>
            <button class="btn btn-close">
                <i class="fa-solid fa-bars"></i>
            </button>
        </section>

        <section class="headDerecha">
            <section class="contenedorDrop">
                <button class="btn btn-opciones" onclick="toggleDrop(event)">
                    <i class="fa-solid fa-user"></i>
                    Administrador
                </button>
                <section class="drop">
                    <a href="#">
                        <i class="fa-solid fa-user"></i>
                        Perfil
                    </a>
                    <a href="#">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Salir
                    </a>
                </section>
            </section>
        </section>
    </header>


    <aside class="barraLateral">
        <nav>
            <li>
                <span>
                    <i class="fa-solid fa-file"></i>
                </span>
                <a href="#" class="enlace">Facturas</a>
            </li>
            <li>
                <span>
                    <i class="fa-solid fa-file"></i>
                </span>
                <a href="#" class="enlace">Boletas</a>

            </li>
            <li>
                <span>
                    <i class="fa-solid fa-file"></i>
                </span>
                <a href="" class="enlace">G. De Remisión</a>
            </li>
            <li>
                <span>
                    <i class="fa-solid fa-clipboard"></i>
                </span>
                <a href="#" class="enlace">Proforma</a>
            </li>
            <li>
                <span>
                    <i class="fa-solid fa-sheet-plastic"></i>
                </span>
                <a href="#" class="enlace">Reportes</a>
            </li>
            <li>
                <span>
                    <i class="fa-solid fa-boxes-stacked"></i>
                </span>
                <a href="#" class="enlace">Productos</a>
            </li>
            <li>
                <span>
                    <i class="fa-solid fa-boxes-packing"></i>
                </span>
                <a href="" class="enlace">Ingresar Stock</a>
            </li>
        </nav>
    </aside>

    <!-----Contenedor Para Busqueda Mayoritaria----->
    <section class="contenedorBusqueda">
        <section class="busquedaMayoritaria">
            <section class="contenedorArriba">
                <section class="busqueda">
                    <h5>Búsqueda:</h5>
                    <section class="mayoritaria">
                        <input type="text" placeholder="Descripción Del Producto">
                        <button class="btnLupa">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </section>
                </section>

                <section class="datosMostrados">
                    <h5>Agregados
                        <span class="contadorAgregados" id="contadorAgregados">0</span>
                    </h5>
                    <h5>Importe Total
                        <span class="contadorTotal" id="contadorTotal">0</span>
                    </h5>
                </section>
            </section>

            <hr>

            <section class="contenedorIntermedio">
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Producto</th>
                            <th>Precio De Venta</th>
                            <th>Precio De Costo</th>
                            <th>Stock</th>
                            <th>Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </section>

            <hr>

            <section class="contenedorAbajo">
                <section class="busquedaCodigo">
                    <h5>Código:</h5>
                    <section class="codigoProducto">
                        <input type="text" placeholder="Buscar Por Código De Producto" id="codigoInput">
                        <button class="btnTacho" onclick="limpiarTacho()">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </section>
                </section>

                <section class="contenedorCerrar">
                    <button class="btnCerrar">
                        Cerrar
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </section>
            </section>
        </section>
    </section>
    <!-----Fin----->

    <main class="contenedorDerecha">
        <section class="widget-container">
            <section class="tabs">
                <button class="tab-button btnUno" onclick="showTab('emision')">Emisión</button>
                <button class="tab-button btnDos" onclick="showTab('emitidas')">Emitidas</button>
            </section>

            <section class="tab-content" id="emision">
                <section class="contenedorUno">
                    <h4>Facturación Electronica</h4>
                    <input type="text" id="datetime" disabled>
                </section>

                <section class="contenedorDos">
                    <section class="contenedorInputUno">
                        <section class="casilleroUno">
                            <section class="ruc">
                                <input type="text" placeholder="RUC" id="ruc" name="ruc" onkeypress="consultarRUC(event)">
                            </section>
                            <section class="razonSocial">
                                <input type="text" placeholder="Razón Social" id="nombre" name="nombre">
                            </section>
                        </section>

                        <section class="casilleroUno">
                            <section class="direccion">
                                <input type="text" placeholder="Dirección" id="direccion" name="direccion" disabled>
                            </section>
                        </section>
                    </section>

                    <section class="contenedorInputDos">
                        <section class="casilleroDos">
                            <section class="medida">
                                <input type="text" value="1" min="0" step="1">
                            </section>

                            <section class="tipo">
                                <select name="unidadDeMedida" id="unidadDeMedida">
                                    <option value="" disabled selected>U. Medida</option>
                                    <option value="unidad">Unidad</option>
                                    <option value="docena">Docena</option>
                                    <option value="millares">Millares</option>
                                    <option value="cajas">Cajas</option>
                                </select>
                            </section>

                            <section class="precio">
                                <input type="text" placeholder="Precio U.">
                            </section>
                            <section class="igv">
                                <input type="text" placeholder="IGV" disabled>
                            </section>

                            <section class="codigo">
                                <input type="text" min="0" maxlength="6" placeholder="C. Producto">
                            </section>
                        </section>

                        <section class="casilleroDos">
                            <section class="descripcion">
                                <input type="text" placeholder="Descripcion Del Producto" id="descripcionInput">

                                <section class="contenedorOpciones">
                                    <button class="limpiarBtn" onclick="limpiarInput()">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                    <button class="buscarBtn">
                                        <i class="fa-solid fa-list"></i>
                                    </button>
                                </section>

                            </section>
                        </section>
                    </section>

                    <section class="contenedorInputTres">
                        <section class="casilleroTres">
                            <section class="logoYape">
                                <section class="yape">
                                    <img src="../Assent/Yape.png" alt="Logotipo De Yape"
                                        class="seleccionable" data-metodo="yape">
                                    <span class="desPago">
                                        YAPE
                                    </span>
                                </section>
                            </section>

                            <section class="logoPlin">
                                <section class="plin">
                                    <img src="../Assent/Plin.png" alt="Logotipo De Plin"
                                        class="seleccionable" data-metodo="plin">
                                    <span class="desPago">
                                        PLIN
                                    </span>
                                </section>
                            </section>

                            <section class="logoEfectivo">
                                <section class="efectivo">
                                    <img src="../Assent/Efectivo.png" alt="Logotipo De Efectivo"
                                        class="seleccionable" data-metodo="efectivo">
                                    <span class="desPago">
                                        EFECTIVO
                                    </span>
                                </section>
                            </section>

                            <section class="logoCredito">
                                <section class="credito">
                                    <img src="../Assent/Credito.png" alt="Logotipo De Credito"
                                        class="seleccionable" data-metodo="credito">
                                    <span class="desPago">
                                        CREDITO
                                    </span>
                                </section>
                            </section>

                            <section class="logoDeposito">
                                <section class="deposito">
                                    <img src="../Assent/Deposito.png" alt="Logotipo De Deposito"
                                        class="seleccionable" data-metodo="deposito">
                                    <span class="desPago">
                                        DEPOSITO
                                    </span>
                                </section>
                            </section>
                        </section>

                        <section class="casilleroTres">
                            <section class="contenedorBtn">
                                <button class="btn-agregar">
                                    AGREGAR
                                </button>
                            </section>
                        </section>
                    </section>
                </section>

                <section class="contenedorTres">
                    <table class="tabla">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Cantidad</th>
                                <th>Descripción</th>
                                <th>Stock</th>
                                <th>Precio Unitario</th>
                                <th>Valor Total</th>
                                <th>IGV</th>
                                <th>Precio Total</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </section>

                <section class="contenedorCuatro">
                    <section class="contenedorImporte">
                        <section class="tituloImporte">
                            <h4>Venta Total</h4>
                        </section>
                        <hr>
                        <section class="datosImporte">
                            <section class="titulos">
                                <span>IGV:</span>
                                <span>Venta Grabada:</span>
                                <span>Venta:</span>
                            </section>

                            <section class="simbolos">
                                <span>S/.</span>
                                <span>S/.</span>
                                <span>S/.</span>
                            </section>

                            <section class="datos">
                                <span class="txtIgv" id="txtIgv">0</span>
                                <span class="txtVentaGrabada" id="txtVentaGrabada">0</span>
                                <span class="txtVenta" id="txtVenta">0</span>
                                <section class="contenedorEmision">
                                    <button class="btnEmitir">
                                        Emitir
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </button>
                                </section>
                            </section>
                        </section>
                    </section>
                </section>
            </section>

            <section class="tab-content" id="emitidas">
                <h2>Emitidas</h2>
                <p>Contenido relacionado con las EMITIDAS.</p>
            </section>
        </section>
    </main>

    <script>
        function consultarRUC(event) {
            if (event.key === 'Enter') {
                const ruc = document.getElementById('ruc').value;
                if (!ruc) {
                    alert('Por favor, ingrese un RUC válido.');
                    return;
                }

                // Enviar el RUC al backend
                fetch('consultaRUC.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            ruc
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Datos recibidos:', data);
                        if (data.error) {
                            alert('Error: ' + data.error);
                        } else {
                            document.getElementById('nombre').value = data.razonSocial || 'Razón social no disponible';
                            document.getElementById('direccion').value = data.direccion || 'Dirección no disponible';
                        }
                    })
                    .catch(error => console.error('Error al consultar la API:', error));
            }
        }
    </script>
    <script src="../Assent/JS/Global.js"></script>
    <script src="../Assent/JS/Administrador.js"></script>
</body>

</html>
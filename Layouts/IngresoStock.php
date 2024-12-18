<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assent/CSS/Global.css">
    <link rel="stylesheet" href="../Assent/CSS/VentasFacturas.css">
    <link rel="stylesheet" href="../Assent/CSS/IngresoStock.css">
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
                <a href="./VentasFacturas.php" class="enlace">Facturas</a>
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
                <a href="./GuiaRemision.php" class="enlace">G. De Remisión</a>
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
                <a href="#" class="enlace">Ingresar Stock</a>
            </li>
        </nav>
    </aside>

    <main class="contenedorDerecha">
        <section class="widget-container">
            <section class="tabs">
                <button class="tab-button btnUno" onclick="showTab('emision')">Registro De Entrada</button>
                <button class="tab-button btnDos" onclick="showTab('emitidas')">Kardex De Entrada</button>
                <button class="tab-button btnTres" onclick="showTab('consultas')">Kardex De Salida</button>
            </section>

            <section class="tab-content" id="emision">
                <section class="contenedorButton">
                    <button class="btn-agregar">
                        Agregar Stock
                        <i class="fa-solid fa-boxes-stacked"></i>
                </section>

                <section class="contenedorFormulario">
                    <section class="contenedorCuatro">

                        <section class="contenedorInputTres">
                            <section class="casilleroTres">

                                <section class="buscar">
                                    <select name="buscar" id="buscar">
                                        <option value="" disabled selected>Sin Documento</option>
                                        <option value="buscarRUC">RUC</option>
                                        <option value="buscarDNI">DNI</option>
                                    </select>
                                </section>

                                <section class="buscarDocumento">
                                    <input type="text" placeholder="Documento" disabled>
                                </section>

                                <section class="buscarRazon">
                                    <input type="text" placeholder="Razón Social" disabled>
                                </section>

                                <section class="buscarDireccion">
                                    <input type="text" placeholder="Dirección">
                                </section>

                                <section class="insertarFecha">
                                    <input type="date">
                                </section>
                            </section>
                        </section>


                        <section class="contenedorInputCuatro">
                            <section class="casilleroCuatro">

                                <section class="insertarProducto">
                                    <input type="text" placeholder="Ingrese el producto">
                                </section>

                                <section class="insertarTipo">
                                    <select name="insertarMedida" id="insertarMedida">
                                        <option value="" disabled selected>U. Medida</option>
                                        <option value="insertarunidad">Unidad</option>
                                        <option value="insertardocena">Docena</option>
                                        <option value="insertarmillares">Millares</option>
                                        <option value="insertarcajas">Cajas</option>
                                    </select>
                                </section>

                                <section class="insertarCantidad">
                                    <input type="text" placeholder="Ingrese La Cantidad">
                                </section>

                                <section class="insertarAlmacen">
                                    <select name="" id="" class="Almacen">
                                        <option value="" disabled selected>Selecciona Un Almacén</option>
                                        <option value="primerPiso">Almacén Primer Piso</option>
                                        <option value="segundoPiso">Almacén Segundo Piso</option>
                                        <option value="tercerPiso">Almacén Tercer Piso</option>
                                        <option value="cuartoPiso">Almacén Cuarto Piso</option>
                                        <option value="quintoPiso">Almacén Quinto Piso</option>
                                        <option value="sextoPiso">Almacén Sexto Piso</option>
                                    </select>
                                </section>
                            </section>

                            <section class="insertarButton">
                                <button>
                                    Agregar
                                </button>
                            </section>
                        </section>
                    </section>
                </section>

                <section class="table-container">
                    <table class="tabla" id="dataTable">
                        <thead>
                            <tr>
                                <th>Almacen</th>
                                <th>RUC Proveedor</th>
                                <th>Razon Social</th>
                                <th>Fecha Ingreso</th>
                                <th>Tipo.Doc</th>
                                <th>Total</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                    <section id="pagination" style="margin-top: 10px; text-align: center;">
                        <button id="prev" disabled>Anterior</button>
                        <span id="pageInfo">Página 1</span>
                        <button id="next">Siguiente</button>
                    </section>
                </section>
            </section>

            <section class="tab-content" id="emitidas">
                <h2>Emitidas</h2>
                <p>Contenido relacionado con las EMITIDAS.</p>
            </section>

            <section class="tab-content" id="consultas">
                <h2>Consultas</h2>
                <p>Contenido relacionado con las CONSULTAS.</p>
            </section>
        </section>
    </main>

    <script>
        const rowsPerPage = 10;
        let currentPage = 1;

        function renderTable(page) {
            const tableBody = document.querySelector('#dataTable tbody');
            tableBody.innerHTML = '';

            const start = (page - 1) * rowsPerPage;
            const end = start + rowsPerPage;
            const pageData = data.slice(start, end);

            pageData.forEach(row => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
        <td>${row.almacen}</td>
        <td>${row.rucProveedor}</td>
        <td>${row.razonSocial}</td>
        <td>${row.fechaIngreso}</td>
        <td>${row.tipoDoc}</td>
        <td>${row.total}</td>
        <td>${row.acciones}</td>
    `;
                tableBody.appendChild(tr);
            });

            document.getElementById('pageInfo').textContent = `Página ${page}`;
            document.getElementById('prev').disabled = page === 1;
            document.getElementById('next').disabled = end >= data.length;
        }

        document.getElementById('prev').addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                renderTable(currentPage);
            }
        });

        document.getElementById('next').addEventListener('click', () => {
            if (currentPage * rowsPerPage < data.length) {
                currentPage++;
                renderTable(currentPage);
            }
        });

        renderTable(currentPage);
    </script>
    <script src="../Assent/JS/Global.js"></script>
    <script src="../Assent/JS/Administrador.js"></script>
</body>

</html>
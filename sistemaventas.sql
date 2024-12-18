
-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS sistema_ventas;
USE sistema_ventas;

-- Tabla Clientes
DROP TABLE IF EXISTS Clientes;
CREATE TABLE Clientes (
    id_clientes VARCHAR(8) PRIMARY KEY,
    dni INT(11),
    ruc INT(11),
    nombre VARCHAR(50),
    direccion VARCHAR(50),
    telefono VARCHAR(15)
);

-- Tabla Vendedor
DROP TABLE IF EXISTS Vendedor;
CREATE TABLE Vendedor (
    id_vendedor VARCHAR(8) PRIMARY KEY,
    nombre VARCHAR(20),
    apellido VARCHAR(20),
    telefono VARCHAR(15)
);

-- Tabla Pedido
DROP TABLE IF EXISTS Pedido;
CREATE TABLE Pedido (
    id_pedido VARCHAR(8) PRIMARY KEY,
    id_clientes VARCHAR(8),
    fecha_pedido DATE,
    FOREIGN KEY (id_clientes) REFERENCES Clientes(id_clientes)
);

-- Tabla DetallePedido
DROP TABLE IF EXISTS DetallePedido;
CREATE TABLE DetallePedido (
    id_detalle VARCHAR(8) PRIMARY KEY,
    id_pedido VARCHAR(8),
    id_producto VARCHAR(8),
    cantidad INT,
    precio DECIMAL(5,2),
    FOREIGN KEY (id_pedido) REFERENCES Pedido(id_pedido),
    FOREIGN KEY (id_producto) REFERENCES Producto(id_producto)
);

-- Tabla Producto
DROP TABLE IF EXISTS Producto;
CREATE TABLE Producto (
    id_producto VARCHAR(8) PRIMARY KEY,
    id_categoria VARCHAR(8),
    id_proveedor VARCHAR(8),
    nombre VARCHAR(50),
    descripcion VARCHAR(50),
    precio DECIMAL(5,2),
    FOREIGN KEY (id_categoria) REFERENCES CategoriaProducto(id_categoria),
    FOREIGN KEY (id_proveedor) REFERENCES Proveedor(id_proveedor)
);

-- Tabla CategoriaProducto
DROP TABLE IF EXISTS CategoriaProducto;
CREATE TABLE CategoriaProducto (
    id_categoria VARCHAR(8) PRIMARY KEY,
    nom_categoria VARCHAR(20)
);

-- Tabla Proveedor
DROP TABLE IF EXISTS Proveedor;
CREATE TABLE Proveedor (
    id_proveedor VARCHAR(8) PRIMARY KEY,
    nombre VARCHAR(20),
    telefono VARCHAR(20),
    email VARCHAR(20)
);

-- Tabla Kardex
DROP TABLE IF EXISTS Kardex;
CREATE TABLE Kardex (
    id_kardex INT PRIMARY KEY,
    id_producto VARCHAR(8),
    id_almacen INT,
    doc_ref VARCHAR(10),
    entradas_prod INT,
    precio DECIMAL(10,2),
    stock_anual INT,
    FOREIGN KEY (id_producto) REFERENCES Producto(id_producto),
    FOREIGN KEY (id_almacen) REFERENCES Almacen(id_almacen)
);

-- Tabla Almacen
DROP TABLE IF EXISTS Almacen;
CREATE TABLE Almacen (
    id_almacen INT PRIMARY KEY,
    nombre VARCHAR(20),
    ubicacion VARCHAR(20),
    descripcion VARCHAR(50)
);

-- Tabla PersonalDeAlmacen
DROP TABLE IF EXISTS PersonalDeAlmacen;
CREATE TABLE PersonalDeAlmacen (
    id_personal VARCHAR(8) PRIMARY KEY,
    id_inventario VARCHAR(8),
    id_proveedor VARCHAR(8),
    id_almacen INT,
    cargo VARCHAR(20),
    email VARCHAR(20),
    FOREIGN KEY (id_inventario) REFERENCES Inventario(id_inventario),
    FOREIGN KEY (id_proveedor) REFERENCES Proveedor(id_proveedor),
    FOREIGN KEY (id_almacen) REFERENCES Almacen(id_almacen)
);

-- Tabla Inventario
DROP TABLE IF EXISTS Inventario;
CREATE TABLE Inventario (
    id_inventario VARCHAR(8) PRIMARY KEY,
    id_producto VARCHAR(8),
    cant_disponible VARCHAR(20),
    FOREIGN KEY (id_producto) REFERENCES Producto(id_producto)
);

-- Tabla Precio
DROP TABLE IF EXISTS Precio;
CREATE TABLE Precio (
    id_precio INT PRIMARY KEY,
    precio DECIMAL(10,2),
    moneda VARCHAR(10)
);

-- Tabla MetodoDePago
DROP TABLE IF EXISTS MetodoDePago;
CREATE TABLE MetodoDePago (
    id_metodopago VARCHAR(8) PRIMARY KEY,
    nombreMetodo VARCHAR(20)
);

-- Tabla ComprobanteDePago
DROP TABLE IF EXISTS ComprobanteDePago;
CREATE TABLE ComprobanteDePago (
    id_comprobante VARCHAR(8) PRIMARY KEY,
    id_precio INT,
    id_metodopago VARCHAR(8),
    fecha_comprobante DATE,
    total DECIMAL(10,2),
    FOREIGN KEY (id_precio) REFERENCES Precio(id_precio),
    FOREIGN KEY (id_metodopago) REFERENCES MetodoDePago(id_metodopago)
);

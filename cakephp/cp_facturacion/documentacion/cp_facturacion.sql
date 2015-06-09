-- phpMyAdmin SQL Dump
-- version 2.11.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-07-2008 a las 01:37:11
-- Versión del servidor: 4.0.25
-- Versión de PHP: 4.4.4


--
-- Base de datos: dt000117_c65ef8
--

DROP DATABASE IF EXISTS cp_facturacion;
CREATE DATABASE IF NOT EXISTS cp_facturacion DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE cp_facturacion;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla clientes
--

CREATE TABLE IF NOT EXISTS clientes (
  id bigint(20) unsigned NOT NULL auto_increment,
  nombre char(50) NOT NULL default '',
  telefono char(50) default NULL,
  direccion char(50) NOT NULL default '',
  IVA smallint(5) unsigned NOT NULL default '0',
  fecha_facturacion char(2) default NULL,
  cuit char(15) default NULL,
  facturacion bigint(20) unsigned default NULL,
  mail char(50) default NULL,
  localidad_id bigint(20) unsigned NOT NULL default '0',
  saldo decimal(10,2) NOT NULL default '0.00',
  PRIMARY KEY  (id),
  KEY nombre (nombre,direccion,fecha_facturacion,mail)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla clientes
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla cobros
--

CREATE TABLE IF NOT EXISTS cobros (
  id bigint(20) unsigned NOT NULL auto_increment,
  cliente_id bigint(20) unsigned NOT NULL default '0',
  monto decimal(10,2) unsigned NOT NULL default '0.00',
  fecha date NOT NULL default '0000-00-00',
  resto decimal(10,2) unsigned NOT NULL default '0.00',
  PRIMARY KEY  (id),
  KEY clienteid (cliente_id)
) ENGINE=MyISAM AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla cobros
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla compras
--

CREATE TABLE IF NOT EXISTS compras (
  id bigint(20) unsigned NOT NULL auto_increment,
  fecha date NOT NULL default '0000-00-00',
  proveedor_id bigint(20) NOT NULL default '0',
  total decimal(10,2) unsigned NOT NULL default '0.00',
  debe decimal(10,2) unsigned NOT NULL default '0.00',
  detalle varchar(255) NOT NULL default '',
  decontado tinyint(1) NOT NULL default '0',
  anulado smallint(5) unsigned NOT NULL default '0',
  tipodoc varchar(10) NOT NULL default '',
  nrodoc varchar(50) NOT NULL default '',
  neto decimal(10,2) unsigned NOT NULL default '0.00',
  importe_IVA decimal(10,2) unsigned NOT NULL default '0.00',
  nogravados decimal(10,2) unsigned NOT NULL default '0.00',
  retenciones decimal(10,2) unsigned NOT NULL default '0.00',
  PRIMARY KEY  (id),
  KEY anulado (anulado)
) ENGINE=MyISAM AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla compras
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla condicioniva
--

CREATE TABLE IF NOT EXISTS condicioniva (
  id bigint(20) unsigned NOT NULL auto_increment,
  que char(50) NOT NULL default '',
  factura char(1) NOT NULL default '',
  porcentaje smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla condicioniva
--

INSERT INTO condicioniva (id, que, factura, porcentaje) VALUES
(1, 'responsable inscripto (A)', 'A', 21),
(2, 'responsable no inscripto (A)', 'A', 21),
(3, 'exento', 'B', 31),
(4, 'consumidor final', 'B', 31),
(5, 'responsable no inscripto (B)', 'B', 31),
(6, 'responsable monotributo (B)', 'B', 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla facturas
--

CREATE TABLE IF NOT EXISTS facturas (
  id bigint(20) unsigned NOT NULL auto_increment,
  numero varchar(13) NOT NULL default '',
  anulado int(10) unsigned NOT NULL default '0',
  fecha date NOT NULL default '0000-00-00',
  nombre varchar(50) NOT NULL default '',
  direccion varchar(50) default NULL,
  localidad varchar(100) default NULL,
  condicion_iva varchar(50) NOT NULL default '',
  cuit varchar(15) default NULL,
  condicion_venta smallint(5) unsigned NOT NULL default '0',
  bidon8 int(10) unsigned NOT NULL default '0',
  bidon8p decimal(10,2) unsigned NOT NULL default '0.00',
  bidon10 int(10) unsigned NOT NULL default '0',
  bidon10p decimal(10,2) unsigned NOT NULL default '0.00',
  bidon20 int(10) unsigned NOT NULL default '0',
  bidon20p decimal(10,2) unsigned NOT NULL default '0.00',
  dispenser int(10) unsigned NOT NULL default '0',
  dispenserp decimal(10,2) unsigned NOT NULL default '0.00',
  vasosx100 int(10) unsigned NOT NULL default '0',
  vasosx100p decimal(10,2) unsigned NOT NULL default '0.00',
  sub_total decimal(10,2) unsigned NOT NULL default '0.00',
  porcentaje_IVA smallint(5) unsigned NOT NULL default '0',
  monto_IVA decimal(10,2) unsigned NOT NULL default '0.00',
  total decimal(10,2) unsigned NOT NULL default '0.00',
  IVA bigint(20) unsigned NOT NULL default '0',
  cliente_id bigint(20) unsigned NOT NULL default '0',
  PRIMARY KEY  (id),
  KEY numero (numero,anulado)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla facturas
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla localidades
--

CREATE TABLE IF NOT EXISTS localidades (
  id bigint(20) unsigned NOT NULL auto_increment,
  nombre varchar(100) NOT NULL default '',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla localidades
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla pagoacompras
--

CREATE TABLE IF NOT EXISTS pagoacompras (
  id bigint(20) unsigned NOT NULL auto_increment,
  pago_id bigint(20) unsigned NOT NULL default '0',
  compra_id bigint(20) unsigned NOT NULL default '0',
  valor decimal(10,2) unsigned NOT NULL default '0.00',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla pagoacompras
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla pagoaventas
--

CREATE TABLE IF NOT EXISTS pagoaventas (
  id bigint(20) unsigned NOT NULL auto_increment,
  cobro_id bigint(20) unsigned NOT NULL default '0',
  venta_id bigint(20) unsigned NOT NULL default '0',
  valor decimal(10,2) unsigned NOT NULL default '0.00',
  PRIMARY KEY  (id),
  KEY pago_id (cobro_id,venta_id)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla pagoaventas
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla pagos
--

CREATE TABLE IF NOT EXISTS pagos (
  id bigint(20) unsigned NOT NULL auto_increment,
  proveedor_id bigint(20) unsigned NOT NULL default '0',
  monto decimal(10,2) unsigned NOT NULL default '0.00',
  fecha date NOT NULL default '0000-00-00',
  resto decimal(10,2) unsigned NOT NULL default '0.00',
  PRIMARY KEY  (id),
  KEY clienteid (proveedor_id,fecha)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla pagos
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla productos
--

CREATE TABLE IF NOT EXISTS productos (
  productoid smallint(5) unsigned NOT NULL default '0',
  descripcion char(100) NOT NULL default '',
  precio decimal(10,2) NOT NULL default '0.00',
  KEY productoid (productoid)
) ENGINE=MyISAM;

--
-- Volcar la base de datos para la tabla productos
--

INSERT INTO productos (productoid, descripcion, precio) VALUES
(1, 'Vasos por 100 unidades', 0.00),
(2, 'Bidon 10 litros', 0.00),
(3, 'Bidon 12 litros', 0.00),
(4, 'Bidon 20 litros', 0.00),
(5, 'Dispenser Frio-calor', 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla proveedores
--

CREATE TABLE IF NOT EXISTS proveedores (
  id bigint(20) unsigned NOT NULL auto_increment,
  nombre char(50) NOT NULL default '',
  telefono char(50) default NULL,
  direccion char(50) NOT NULL default '',
  cuit char(15) default NULL,
  mail char(50) default NULL,
  saldo decimal(10,2) NOT NULL default '0.00',
  PRIMARY KEY  (id),
  KEY nombre (nombre,direccion,mail)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla proveedores
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla tipofacturacion
--

CREATE TABLE IF NOT EXISTS tipofacturacion (
  id bigint(20) unsigned NOT NULL auto_increment,
  que char(50) NOT NULL default '',
  PRIMARY KEY  (id)
) ENGINE=MyISAM AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla tipofacturacion
--

INSERT INTO tipofacturacion (id, que) VALUES
(1, 'por dia\r\n'),
(2, 'por semana\r\n'),
(3, 'por mes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla ventas
--

CREATE TABLE IF NOT EXISTS ventas (
  id bigint(20) unsigned NOT NULL auto_increment,
  nrofactura bigint(20) NOT NULL default '0',
  fecha date NOT NULL default '0000-00-00',
  clienteid bigint(20) NOT NULL default '0',
  total decimal(10,2) unsigned NOT NULL default '0.00',
  debe decimal(10,2) unsigned NOT NULL default '0.00',
  bidon8 int(10) unsigned NOT NULL default '0',
  bidon10 int(10) unsigned NOT NULL default '0',
  bidon20 int(10) unsigned NOT NULL default '0',
  dispenser int(10) unsigned NOT NULL default '0',
  vasosx100 int(10) unsigned NOT NULL default '0',
  descuento int(2) unsigned NOT NULL default '0',
  bidon8p decimal(10,2) unsigned NOT NULL default '0.00',
  bidon10p decimal(10,2) unsigned NOT NULL default '0.00',
  bidon20p decimal(10,2) unsigned NOT NULL default '0.00',
  dispenserp decimal(10,2) unsigned NOT NULL default '0.00',
  vasosx100p decimal(10,2) unsigned NOT NULL default '0.00',
  ivaincluido smallint(5) unsigned NOT NULL default '0',
  decontado tinyint(1) NOT NULL default '0',
  anulado smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (id),
  KEY nrofactura (nrofactura,fecha,clienteid),
  KEY debe (debe),
  KEY decontado (decontado),
  KEY anulado (anulado)
) ENGINE=MyISAM AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla ventas
--


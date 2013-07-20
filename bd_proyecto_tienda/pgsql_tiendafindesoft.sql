/*
*   tiendaFindesoft
*   SQL para posgrest
*
*/
CREATE  TABLE IF NOT EXISTS productos (
  idproductos SERIAL,
  nombre_producto VARCHAR(45) NULL ,
  valor_publico_prod DOUBLE PRECISION NULL ,
  valor_unitario_producto DOUBLE PRECISION NULL ,
  PRIMARY KEY (idproductos) )

-- -----------------------------------------------------
-- Table `mydb`.`clientes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS clientes (
  idclientes INT NOT NULL ,
  nombre_cliente VARCHAR(45) NULL ,
  direccion VARCHAR(80) NULL ,
  ciudad VARCHAR(45) NULL ,
  telefono VARCHAR(20) NULL ,
  celular VARCHAR(45) NULL ,
  email VARCHAR(45) NULL ,
  PRIMARY KEY (idclientes) )

-- -----------------------------------------------------
-- Table `mydb`.`factura`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS factura (
  idfactura  SERIAL NOT NULL,
  fecha_factura TIMESTAMP NULL ,
  estado BOOLEAN NULL ,
  clientes_idclientes INT NOT NULL ,
  PRIMARY KEY (idfactura) ,
  CONSTRAINT fk_factura_clientes1
    FOREIGN KEY (clientes_idclientes )
    REFERENCES clientes (idclientes )
    ON DELETE CASCADE

-- -----------------------------------------------------
-- Table bodega
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS bodega (
  stock INT NULL ,
  stock_minimo INT NULL ,
  fecha_pedito TIMESTAMP NULL ,
  valor_total_pedido DOUBLE PRECISION NULL ,
  productos_idproductos INT NOT NULL ,
  CONSTRAINT fk_bodega_productos1
    FOREIGN KEY (productos_idproductos )
    REFERENCES productos (idproductos )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
-- -----------------------------------------------------
-- Table `mydb`.`detalle_factura`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS detalle_factura (
  iddetalle_factura SERIAL NOT NULL ,
  fecha_consumo TIMESTAMP NULL ,
  cantidad INT NULL ,
  productos_idproductos INT NOT NULL ,
  factura_idfactura INT NOT NULL ,
  factura_clientes_idclientes INT NOT NULL ,
  PRIMARY KEY (iddetalle_factura, productos_idproductos, factura_idfactura, factura_clientes_idclientes),
 
  CONSTRAINT fk_detalle_factura_productos
    FOREIGN KEY (productos_idproductos)
    REFERENCES productos (idproductos)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT fk_detalle_factura_factura1
    FOREIGN KEY (factura_idfactura)
    REFERENCES factura (idfactura)
    ON DELETE CASCADE
    ON UPDATE CASCADE)


/***************************/
CREATE  TABLE IF NOT EXISTS detalle_factura (
  iddetalle_factura INT NOT NULL AUTO_INCREMENT ,
  fecha_consumo TIMESTAMP NULL ,
  cantidad INT NULL ,
  factura_idfactura INT NOT NULL ,
  factura_clientes_idclientes INT NOT NULL ,
  bodega_productos_idproductos INT NOT NULL ,
  PRIMARY KEY (iddetalle_factura) ,
  INDEX fk_detalle_factura_factura1_idx (factura_idfactura, factura_clientes_idclientes) ,
  INDEX fk_detalle_factura_bodega1_idx (bodega_productos_idproductos ) ,
  CONSTRAINT fk_detalle_factura_factura1
    FOREIGN KEY (factura_idfactura , factura_clientes_idclientes )
    REFERENCES factur (idfactura , clientes_idclientes )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT fk_detalle_factura_bodega1
    FOREIGN KEY (bodega_productos_idproductos )
    REFERENCES bodega (productos_idproductos )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)

-- SESSIONES USERS

CREATE  TABLE IF NOT EXISTS registro_sessiones (
  idregistro SERIAL NOT NULL,
  fecha_session TIMESTAMP NULL,
  users_iduser INT NOT NULL,
  PRIMARY KEY (idregistro),
 
  CONSTRAINT fk_registro_sessiones_usuarios1
    FOREIGN KEY (users_iduser)
    REFERENCES users(iduser)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)



// insert

UPDATE users SET contrasenia='21232f297a57a5a743894a0e4a801fc3' WHERE iduser=1
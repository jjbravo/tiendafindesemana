SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`productos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS productos (
  idproductos INT NOT NULL AUTO_INCREMENT ,
  nombre_producto VARCHAR(45) NULL ,
  valor_publico_prod DOUBLE NULL ,
  valor_unitario_producto DOUBLE NULL ,
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
  idfactura INT NOT NULL AUTO_INCREMENT ,
  fecha_factura DATETIME NULL ,
  estado TINYINT(1) NULL ,
  clientes_idclientes INT NOT NULL ,
  PRIMARY KEY (idfactura) ,

  CONSTRAINT fk_factura_clientes1
    FOREIGN KEY (clientes_idclientes )
    REFERENCES clientes (idclientes )
    ON DELETE CASCADE
    ON UPDATE CASCADE)



-- -----------------------------------------------------
-- Table `mydb`.`bodega`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS bodega (
  stock INT NULL ,
  stock_minimo INT NULL ,
  fecha_pedito DATETIME NULL ,
  valor_total_pedido DOUBLE NULL ,
  productos_idproductos INT NOT NULL ,
  INDEX fk_bodega_productos1_idx (productos_idproductos ) ,
  CONSTRAINT fk_bodega_productos1
    FOREIGN KEY (productos_idproductos )
    REFERENCES productos (idproductos )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table `mydb`.`detalle_factura`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS detalle_factura (
  iddetalle_factura INT NOT NULL AUTO_INCREMENT ,
  fecha_consumo DATETIME NULL ,
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



-- -----------------------------------------------------
-- Table `mydb`.`usuarios`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS users (
  idusuarios INT NOT NULL AUTO_INCREMENT ,
  usuario VARCHAR(45) NULL ,
  contrasenia VARCHAR(50) NULL ,
  estado VARCHAR(10) NULL ,
  PRIMARY KEY (idusuarios) )



-- -----------------------------------------------------
-- Table `mydb`.`registro_sessiones`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS registro_sessiones (
  idregistro INT NOT NULL AUTO_INCREMENT ,
  fecha_session DATETIME NULL ,
  usuarios_idusuarios INT NOT NULL ,
  PRIMARY KEY (idregistro) ,
  INDEX fk_registro_sessiones_usuarios1_idx (usuarios_idusuarios) ,
  CONSTRAINT fk_registro_sessiones_usuarios1
    FOREIGN KEY (usuarios_idusuarios )
    REFERENCES usuarios (idusuarios )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)




SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

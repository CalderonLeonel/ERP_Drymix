-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema erp_dry_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema erp_dry_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `erp_dry_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `erp_dry_db` ;

-- -----------------------------------------------------
-- Table `erp_dry_db`.`provider`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`provider` (
  `idProvider` TINYINT NOT NULL AUTO_INCREMENT,
  `providerName` VARCHAR(80) NOT NULL,
  `contact` VARCHAR(40) NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idProvider`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`department`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`department` (
  `idDepartment` TINYINT NOT NULL AUTO_INCREMENT,
  `nameDepartment` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`idDepartment`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`charge`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`charge` (
  `idCharge` TINYINT NOT NULL AUTO_INCREMENT,
  `chargeName` VARCHAR(60) NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  `accessLevel` TINYINT NOT NULL DEFAULT '0',
  `idDepartment` TINYINT NOT NULL,
  PRIMARY KEY (`idCharge`),
  INDEX `fk_Charge_Area1_idx` (`idDepartment` ASC) VISIBLE,
  CONSTRAINT `fk_Charge_Area1`
    FOREIGN KEY (`idDepartment`)
    REFERENCES `erp_dry_db`.`department` (`idDepartment`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`employee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`employee` (
  `idEmployee` SMALLINT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `secondSurname` VARCHAR(255) NOT NULL,
  `surname` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `bithdate` DATE NOT NULL,
  `department` VARCHAR(45) NOT NULL,
  `employeeCode` VARCHAR(45) NOT NULL,
  `ci` VARCHAR(20) NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  `idArea` TINYINT NOT NULL,
  `idCharge` TINYINT NOT NULL,
  PRIMARY KEY (`idEmployee`),
  INDEX `fk_Employee_Area1_idx` (`idArea` ASC) VISIBLE,
  INDEX `fk_Employee_Charge1_idx` (`idCharge` ASC) VISIBLE,
  CONSTRAINT `fk_Employee_Area1`
    FOREIGN KEY (`idArea`)
    REFERENCES `erp_dry_db`.`department` (`idDepartment`),
  CONSTRAINT `fk_Employee_Charge1`
    FOREIGN KEY (`idCharge`)
    REFERENCES `erp_dry_db`.`charge` (`idCharge`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`user` (
  `idUser` SMALLINT NOT NULL,
  `userName` VARCHAR(45) NOT NULL,
  `userPassword` VARCHAR(45) NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idUser`),
  INDEX `fk_User_Employee1_idx` (`idUser` ASC) VISIBLE,
  CONSTRAINT `fk_User_Employee1`
    FOREIGN KEY (`idUser`)
    REFERENCES `erp_dry_db`.`employee` (`idEmployee`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`adquisitionquote`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`adquisitionquote` (
  `idAdquisitionQuote` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `idUser` SMALLINT NOT NULL,
  `idProvider` TINYINT NOT NULL,
  `name` VARCHAR(30) NOT NULL,
  `quoteState` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idAdquisitionQuote`),
  INDEX `fk_AdquisitionQuote_User1_idx` (`idUser` ASC) VISIBLE,
  INDEX `fk_AdquisitionQuote_Provider1_idx` (`idProvider` ASC) VISIBLE,
  CONSTRAINT `fk_AdquisitionQuote_Provider1`
    FOREIGN KEY (`idProvider`)
    REFERENCES `erp_dry_db`.`provider` (`idProvider`),
  CONSTRAINT `fk_AdquisitionQuote_User1`
    FOREIGN KEY (`idUser`)
    REFERENCES `erp_dry_db`.`user` (`idUser`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`branchoffice`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`branchoffice` (
  `idBranchOffice` TINYINT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `address` VARCHAR(250) NULL DEFAULT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idBranchOffice`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`line`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`line` (
  `idLine` TINYINT NOT NULL AUTO_INCREMENT,
  `lineName` VARCHAR(30) NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idLine`))
ENGINE = InnoDB
AUTO_INCREMENT = 14
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`producttype`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`producttype` (
  `idProductType` TINYINT NOT NULL AUTO_INCREMENT,
  `productTypeName` VARCHAR(70) NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  `idLine` TINYINT NOT NULL,
  PRIMARY KEY (`idProductType`),
  INDEX `fk_ProductType_Line1_idx` (`idLine` ASC) VISIBLE,
  CONSTRAINT `fk_ProductType_Line1`
    FOREIGN KEY (`idLine`)
    REFERENCES `erp_dry_db`.`line` (`idLine`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`format`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`format` (
  `idFormat` TINYINT NOT NULL AUTO_INCREMENT,
  `formatName` VARCHAR(30) NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idFormat`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`product` (
  `idProduct` SMALLINT NOT NULL AUTO_INCREMENT,
  `idProductType` TINYINT NOT NULL,
  `idFormat` TINYINT NOT NULL,
  `productName` VARCHAR(70) NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idProduct`),
  INDEX `fk_ProductType_Format1_idx` (`idFormat` ASC) VISIBLE,
  INDEX `fk_Product_ProductType1_idx` (`idProductType` ASC) VISIBLE,
  CONSTRAINT `fk_Product_ProductType1`
    FOREIGN KEY (`idProductType`)
    REFERENCES `erp_dry_db`.`producttype` (`idProductType`),
  CONSTRAINT `fk_ProductType_Format1`
    FOREIGN KEY (`idFormat`)
    REFERENCES `erp_dry_db`.`format` (`idFormat`))
ENGINE = InnoDB
AUTO_INCREMENT = 46
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`branchoffice_producttype`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`branchoffice_producttype` (
  `idBranchOffice` TINYINT NOT NULL,
  `idProduct` SMALLINT NOT NULL,
  `stock` SMALLINT NOT NULL DEFAULT '0',
  PRIMARY KEY (`idBranchOffice`, `idProduct`),
  INDEX `fk_BranchOffice_has_Product_Product1_idx` (`idProduct` ASC) VISIBLE,
  INDEX `fk_BranchOffice_has_Product_BranchOffice1_idx` (`idBranchOffice` ASC) VISIBLE,
  CONSTRAINT `fk_BranchOffice_has_Product_BranchOffice1`
    FOREIGN KEY (`idBranchOffice`)
    REFERENCES `erp_dry_db`.`branchoffice` (`idBranchOffice`),
  CONSTRAINT `fk_BranchOffice_has_Product_Product1`
    FOREIGN KEY (`idProduct`)
    REFERENCES `erp_dry_db`.`product` (`idProduct`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`clienttype`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`clienttype` (
  `idClientType` TINYINT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(30) NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idClientType`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`client`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`client` (
  `idClient` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `idClientType` TINYINT NOT NULL,
  `fullname` VARCHAR(60) NOT NULL,
  `description` VARCHAR(150) NULL DEFAULT NULL,
  `cellphone` VARCHAR(30) NULL DEFAULT NULL,
  `entity` VARCHAR(60) NULL DEFAULT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idClient`),
  INDEX `fk_Client_ClientType1_idx` (`idClientType` ASC) VISIBLE,
  CONSTRAINT `fk_Client_ClientType1`
    FOREIGN KEY (`idClientType`)
    REFERENCES `erp_dry_db`.`clienttype` (`idClientType`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`clientquote`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`clientquote` (
  `idClientQuote` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `idUser` SMALLINT NOT NULL,
  `idClient` MEDIUMINT NOT NULL,
  `name` VARCHAR(30) NOT NULL,
  `quoteState` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idClientQuote`),
  INDEX `fk_ClientQuote_User1_idx` (`idUser` ASC) VISIBLE,
  INDEX `fk_ClientQuote_Client1_idx` (`idClient` ASC) VISIBLE,
  CONSTRAINT `fk_ClientQuote_Client1`
    FOREIGN KEY (`idClient`)
    REFERENCES `erp_dry_db`.`client` (`idClient`),
  CONSTRAINT `fk_ClientQuote_User1`
    FOREIGN KEY (`idUser`)
    REFERENCES `erp_dry_db`.`user` (`idUser`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`config`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`config` (
  `idConfig` TINYINT NOT NULL AUTO_INCREMENT,
  `path` VARCHAR(500) NOT NULL,
  `type` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`idConfig`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`itemtype`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`itemtype` (
  `idItemType` SMALLINT NOT NULL AUTO_INCREMENT,
  `itemTypeName` VARCHAR(45) NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idItemType`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`item`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`item` (
  `idItem` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `idItemType` SMALLINT NOT NULL,
  `itemName` VARCHAR(80) NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idItem`),
  INDEX `fk_item_ItemType1_idx` (`idItemType` ASC) VISIBLE,
  CONSTRAINT `fk_item_ItemType1`
    FOREIGN KEY (`idItemType`)
    REFERENCES `erp_dry_db`.`itemtype` (`idItemType`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`department_item`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`department_item` (
  `idDepartment` TINYINT NOT NULL,
  `idItem` MEDIUMINT NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `stock` MEDIUMINT NOT NULL,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idDepartment`, `idItem`),
  INDEX `fk_Department_has_Item_Item1_idx` (`idItem` ASC) VISIBLE,
  INDEX `fk_Department_has_Item_Department1_idx` (`idDepartment` ASC) VISIBLE,
  CONSTRAINT `fk_Department_has_Item_Department1`
    FOREIGN KEY (`idDepartment`)
    REFERENCES `erp_dry_db`.`department` (`idDepartment`),
  CONSTRAINT `fk_Department_has_Item_Item1`
    FOREIGN KEY (`idItem`)
    REFERENCES `erp_dry_db`.`item` (`idItem`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`documentcategory`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`documentcategory` (
  `idDocumentCategory` SMALLINT NOT NULL AUTO_INCREMENT,
  `nameCategory` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`idDocumentCategory`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`document`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`document` (
  `idDocument` INT NOT NULL AUTO_INCREMENT,
  `idDocumentCategory` SMALLINT NOT NULL,
  `idUser` SMALLINT NOT NULL,
  `nameDocument` VARCHAR(80) NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idDocument`),
  INDEX `fk_Document_DocumentCategory1_idx` (`idDocumentCategory` ASC) VISIBLE,
  INDEX `fk_Document_User1_idx` (`idUser` ASC) VISIBLE,
  CONSTRAINT `fk_Document_DocumentCategory1`
    FOREIGN KEY (`idDocumentCategory`)
    REFERENCES `erp_dry_db`.`documentcategory` (`idDocumentCategory`),
  CONSTRAINT `fk_Document_User1`
    FOREIGN KEY (`idUser`)
    REFERENCES `erp_dry_db`.`user` (`idUser`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`dosification`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`dosification` (
  `idDosification` INT NOT NULL AUTO_INCREMENT,
  `autoriztionNumber` VARCHAR(50) NOT NULL,
  `limitDate` DATE NOT NULL,
  `dosificationKey` VARCHAR(70) NOT NULL,
  `initialNumberFacture` INT NOT NULL,
  `finalNumberFacture` INT NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idDosification`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`factory`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`factory` (
  `idfactory` INT NOT NULL AUTO_INCREMENT,
  `factoryName` VARCHAR(100) NOT NULL,
  `address` VARCHAR(200) NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idfactory`))
ENGINE = InnoDB
AUTO_INCREMENT = 11
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`storage`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`storage` (
  `idStorage` TINYINT NOT NULL AUTO_INCREMENT,
  `storageName` VARCHAR(45) NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idStorage`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`section`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`section` (
  `idSection` SMALLINT NOT NULL AUTO_INCREMENT,
  `idStorage` TINYINT NOT NULL,
  `sectionName` VARCHAR(60) NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idSection`),
  INDEX `fk_Section_Storage1_idx` (`idStorage` ASC) VISIBLE,
  CONSTRAINT `fk_Section_Storage1`
    FOREIGN KEY (`idStorage`)
    REFERENCES `erp_dry_db`.`storage` (`idStorage`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`stand`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`stand` (
  `idStand` SMALLINT NOT NULL AUTO_INCREMENT,
  `idSection` SMALLINT NOT NULL,
  `nameStand` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idStand`),
  INDEX `fk_Stand_Section1_idx` (`idSection` ASC) VISIBLE,
  CONSTRAINT `fk_Stand_Section1`
    FOREIGN KEY (`idSection`)
    REFERENCES `erp_dry_db`.`section` (`idSection`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`storage_item`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`storage_item` (
  `idSection` SMALLINT NOT NULL,
  `idItem` MEDIUMINT NOT NULL,
  `idStand` SMALLINT NULL DEFAULT NULL,
  `stock` MEDIUMINT NOT NULL,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idSection`, `idItem`),
  INDEX `fk_Storage_has_item_item1_idx` (`idItem` ASC) VISIBLE,
  INDEX `fk_StorageItem_Section1_idx` (`idSection` ASC) VISIBLE,
  INDEX `fk_Storage_Item_Stand1_idx` (`idStand` ASC) VISIBLE,
  CONSTRAINT `fk_Storage_has_item_item1`
    FOREIGN KEY (`idItem`)
    REFERENCES `erp_dry_db`.`item` (`idItem`),
  CONSTRAINT `fk_Storage_Item_Stand1`
    FOREIGN KEY (`idStand`)
    REFERENCES `erp_dry_db`.`stand` (`idStand`),
  CONSTRAINT `fk_StorageItem_Section1`
    FOREIGN KEY (`idSection`)
    REFERENCES `erp_dry_db`.`section` (`idSection`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`itemin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`itemin` (
  `idSection` SMALLINT NOT NULL,
  `idItem` MEDIUMINT NOT NULL,
  `idStand` SMALLINT NULL DEFAULT NULL,
  `units` SMALLINT NOT NULL,
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  INDEX `fk_ItemIn_Storage_Item1_idx` (`idSection` ASC, `idItem` ASC) VISIBLE,
  CONSTRAINT `fk_ItemIn_Storage_Item1`
    FOREIGN KEY (`idSection` , `idItem`)
    REFERENCES `erp_dry_db`.`storage_item` (`idSection` , `idItem`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`itemout`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`itemout` (
  `idSection` SMALLINT NOT NULL,
  `idItem` MEDIUMINT NOT NULL,
  `idStand` SMALLINT NULL DEFAULT NULL,
  `units` SMALLINT NOT NULL,
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  INDEX `fk_ItemOut_Storage_Item1_idx` (`idSection` ASC, `idItem` ASC) VISIBLE,
  CONSTRAINT `fk_ItemOut_Storage_Item1`
    FOREIGN KEY (`idSection` , `idItem`)
    REFERENCES `erp_dry_db`.`storage_item` (`idSection` , `idItem`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`laboratoryreport`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`laboratoryreport` (
  `idLaboratoryReport` SMALLINT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(60) NOT NULL,
  `description` VARCHAR(200) NULL DEFAULT NULL,
  `reportType` TINYINT NOT NULL DEFAULT '1',
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idLaboratoryReport`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`movement`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`movement` (
  `idMovement` INT NOT NULL AUTO_INCREMENT,
  `quantity` VARCHAR(45) NOT NULL,
  `state` TINYINT NOT NULL,
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idMovement`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`movementproduct`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`movementproduct` (
  `idMovement` INT NOT NULL,
  `idProduct` SMALLINT NOT NULL,
  `quantity` INT NOT NULL,
  `state` TINYINT NOT NULL,
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idMovement`, `idProduct`),
  INDEX `fk_MovementProduct_product1_idx` (`idProduct` ASC) VISIBLE,
  CONSTRAINT `fk_MovementProduct_Movement1`
    FOREIGN KEY (`idMovement`)
    REFERENCES `erp_dry_db`.`movement` (`idMovement`),
  CONSTRAINT `fk_MovementProduct_product1`
    FOREIGN KEY (`idProduct`)
    REFERENCES `erp_dry_db`.`product` (`idProduct`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`phase`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`phase` (
  `idPhase` TINYINT NOT NULL AUTO_INCREMENT,
  `namePhase` VARCHAR(60) NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  `idProduct` SMALLINT NOT NULL,
  PRIMARY KEY (`idPhase`),
  INDEX `fk_Phase_ProductType1_idx` (`idProduct` ASC) VISIBLE,
  CONSTRAINT `fk_Phase_ProductType1`
    FOREIGN KEY (`idProduct`)
    REFERENCES `erp_dry_db`.`product` (`idProduct`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`phase_labreport`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`phase_labreport` (
  `idPhase` TINYINT NOT NULL,
  `idLaboratoryReport` SMALLINT NOT NULL,
  PRIMARY KEY (`idPhase`, `idLaboratoryReport`),
  INDEX `fk_Phase_has_LaboratoryReport_LaboratoryReport1_idx` (`idLaboratoryReport` ASC) VISIBLE,
  INDEX `fk_Phase_has_LaboratoryReport_Phase1_idx` (`idPhase` ASC) VISIBLE,
  CONSTRAINT `fk_Phase_has_LaboratoryReport_LaboratoryReport1`
    FOREIGN KEY (`idLaboratoryReport`)
    REFERENCES `erp_dry_db`.`laboratoryreport` (`idLaboratoryReport`),
  CONSTRAINT `fk_Phase_has_LaboratoryReport_Phase1`
    FOREIGN KEY (`idPhase`)
    REFERENCES `erp_dry_db`.`phase` (`idPhase`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`sale`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`sale` (
  `idSale` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `total` DECIMAL(7,2) NOT NULL,
  `controlCode` VARCHAR(50) NOT NULL,
  `nit` VARCHAR(20) NOT NULL,
  `businessName` VARCHAR(50) NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idSale`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`product_sale`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`product_sale` (
  `idProduct` SMALLINT NOT NULL,
  `idSale` MEDIUMINT NOT NULL,
  `quantity` INT NOT NULL,
  `granel` DECIMAL(8,2) NOT NULL,
  `subTotal` DECIMAL(8,2) NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idProduct`, `idSale`),
  INDEX `fk_Product_has_Sale_Sale1_idx` (`idSale` ASC) VISIBLE,
  INDEX `fk_Product_has_Sale_Product1_idx` (`idProduct` ASC) VISIBLE,
  CONSTRAINT `fk_Product_has_Sale_Product1`
    FOREIGN KEY (`idProduct`)
    REFERENCES `erp_dry_db`.`product` (`idProduct`),
  CONSTRAINT `fk_Product_has_Sale_Sale1`
    FOREIGN KEY (`idSale`)
    REFERENCES `erp_dry_db`.`sale` (`idSale`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`rawmaterial`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`rawmaterial` (
  `idRawMaterial` SMALLINT NOT NULL,
  `rawMaterialName` VARCHAR(100) NOT NULL,
  `rawMaterialType` VARCHAR(60) NOT NULL,
  `state` TINYINT NOT NULL DEFAULT '1',
  `createDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idRawMaterial`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `erp_dry_db`.`rawmaterial_product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `erp_dry_db`.`rawmaterial_product` (
  `RawMaterial_idRawMaterial` SMALLINT NOT NULL,
  `Product_idProduct` SMALLINT NOT NULL,
  PRIMARY KEY (`RawMaterial_idRawMaterial`, `Product_idProduct`),
  INDEX `fk_RawMaterial_has_Product_Product1_idx` (`Product_idProduct` ASC) VISIBLE,
  INDEX `fk_RawMaterial_has_Product_RawMaterial1_idx` (`RawMaterial_idRawMaterial` ASC) VISIBLE,
  CONSTRAINT `fk_RawMaterial_has_Product_Product1`
    FOREIGN KEY (`Product_idProduct`)
    REFERENCES `erp_dry_db`.`product` (`idProduct`),
  CONSTRAINT `fk_RawMaterial_has_Product_RawMaterial1`
    FOREIGN KEY (`RawMaterial_idRawMaterial`)
    REFERENCES `erp_dry_db`.`rawmaterial` (`idRawMaterial`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

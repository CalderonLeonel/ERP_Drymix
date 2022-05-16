use erp_dry_db;
-- Usen este .sql para escribir y guardar sus scripts


-- 1 MODULO DE CUENTAS DE USUARIO  --


-- 2 MODULO DE PRODUCCION  --


-- Del pdf "02_Drymix_BOLIVIA_17_05_2021", he identificado las siguientes materias primas y productos:
-- TABLA ItemType
INSERT INTO ItemType(itemTypeName) VALUES('Materia Prima');
INSERT INTO ItemType(itemTypeName) VALUES('Insumo de Producción');
INSERT INTO ItemType(itemTypeName) VALUES('Sustancia Peligrosa de Producción');
-- SELECT * FROM ItemType;

-- TABLA Item
INSERT INTO Item(idItemType, itemName) VALUES(1,'Mineral de Sulfato de Calcio con pureza del 95%');
INSERT INTO Item(idItemType, itemName) VALUES(1,'Arena fina de canto rodado de 5mm o menor');
INSERT INTO Item(idItemType, itemName) VALUES(1,'Cemento');
INSERT INTO Item(idItemType, itemName) VALUES(1,'Mineral de Azufre');
INSERT INTO Item(idItemType, itemName) VALUES(1,'Mineral de Carbonato de Calcio');
INSERT INTO Item(idItemType, itemName) VALUES(2,'Retenedor de Agua');
INSERT INTO Item(idItemType, itemName) VALUES(2,'Aireador');
INSERT INTO Item(idItemType, itemName) VALUES(2,'Bolsas de papel Kraft para embolado');
INSERT INTO Item(idItemType, itemName) VALUES(3,'Ácido cítrico');
-- Hay más sustancias peligrosas usadas como aditivo, pero son secreto de su fórmula, dejar que registren ellos.


-- TABLA Line
INSERT INTO line(lineName) VALUES('Yeso');
INSERT INTO line(lineName) VALUES('Mortero Seco');
-- SELECT * FROM Line;

-- TABLA Format
INSERT INTO Format(formatName) VALUES('30 kilos');
INSERT INTO Format(formatName) VALUES('50 kilos');
INSERT INTO Format(formatName) VALUES('100 kilos');
INSERT INTO Format(formatName) VALUES('granel');
-- SELECT * FROM Format;

-- TABLA ProductType

INSERT INTO ProductType(idLine, idFormat, productName) VALUES(1, 1, 'Bolsa de yeso grueso de 30 kilos');
INSERT INTO ProductType(idLine, idFormat, productName) VALUES(1, 2, 'Bolsa de yeso grueso de 50 kilos');
INSERT INTO ProductType(idLine, idFormat, productName) VALUES(1, 3, 'Bolsa de yeso grueso de 100 kilos');
INSERT INTO ProductType(idLine, idFormat, productName) VALUES(1, 4, 'Bolsa de yeso grueso a granel');

INSERT INTO ProductType(idLine, idFormat, productName) VALUES(1, 1, 'Bolsa de yeso fino de 30 kilos');
INSERT INTO ProductType(idLine, idFormat, productName) VALUES(1, 2, 'Bolsa de yeso fino de 50 kilos');
INSERT INTO ProductType(idLine, idFormat, productName) VALUES(1, 3, 'Bolsa de yeso fino de 100 kilos');
INSERT INTO ProductType(idLine, idFormat, productName) VALUES(1, 4, 'Bolsa de yeso fino a granel');

INSERT INTO ProductType(idLine, idFormat, productName) VALUES(1, 1, 'Bolsa de yeso regulado de 30 kilos');
INSERT INTO ProductType(idLine, idFormat, productName) VALUES(1, 2, 'Bolsa de yeso regulado de 50 kilos');
INSERT INTO ProductType(idLine, idFormat, productName) VALUES(1, 3, 'Bolsa de yeso regulado de 100 kilos');
INSERT INTO ProductType(idLine, idFormat, productName) VALUES(1, 4, 'Bolsa de yeso regulado a granel');
-- SELECT * FROM ProductType;
-- 3 MODULO DE DOCUMENTACION  --


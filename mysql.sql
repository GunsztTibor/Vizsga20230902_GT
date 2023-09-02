CREATE DATABASE `vizsga_webfejleszto_gt`;
USE `vizsga_webfejleszto_gt`;

CREATE TABLE `telepulesek` (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `orszag` varchar(30) NOT NULL,
    `irsz` varchar(15) NOT NULL ,
    `telepulesNev` varchar(20) NOT NULL,
    CONSTRAINT `fk_telepules_orszag_irsz_telepulesNev` UNIQUE (`orszag`, `irsz`, `telepulesNev`) 
);

CREATE TABLE `kepek` (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `kepeleresiut` varchar(250) NOT NULL UNIQUE,
    `kepNev` varchar(50) NOT NULL
);

CREATE TABLE `felhasznalo`(
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `jelszo` varchar(15) NOT NULL,
    `email` varchar(30) NOT NULL UNIQUE,
    `vnev` varchar(20) NOT NULL,
    `knev` varchar(20) NOT NULL,
    `unev` varchar(20) NULL default '',
    `orszag` varchar(30) NOT NULL,
    `irsz` varchar(15) NOT NULL ,
    `telepules` varchar(20) NOT NULL,
    `szuletesidatum` DATE NOT NULL,
    `allampolgarsag` varchar(50) NULL,
    `bemutatkozas` text default '',
    `kepId1` int NULL,
    `kepId2` int NULL,
    `kepId3` int NULL,
    `foprofilkepSzam` Tinyint NULL default 0,
    CONSTRAINT `fk_felhasznalo_kepId1` FOREIGN KEY (`kepId1`) REFERENCES `kepek` (`id`),
    CONSTRAINT `fk_felhasznalo_kepId2` FOREIGN KEY (`kepId2`) REFERENCES `kepek` (`id`),
    CONSTRAINT `fk_felhasznalo_kepId3` FOREIGN KEY (`kepId3`) REFERENCES `kepek` (`id`)
);

CREATE TABLE `telefonszamok` (
    `telefonszam` varchar(15) NOT NULL PRIMARY KEY,
    `felhasznaloId` int NOT NULL,
    CONSTRAINT `fk_telefonszamok_FelhasznaloId` FOREIGN KEY (`felhasznaloId`) REFERENCES `felhasznalo` (`id`)
);

CREATE TABLE `hobbik` (
    `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `hobbi` varchar(30) NOT NULL UNIQUE
);

CREATE TABLE `felhasznalokeshobbijaik` (
    `felhasznaloId` int NOT NULL,
    `hobbiId` int NOT NULL,
    CONSTRAINT `fk_felhasznalokeshobbijaik_felhasznaloId` FOREIGN KEY (`felhasznaloId`) REFERENCES `felhasznalo` (`id`),
    CONSTRAINT `fk_felhasznalokeshobbijaik_hobbiId` FOREIGN KEY (`hobbiId`) REFERENCES `hobbik` (`id`),
    CONSTRAINT `pk_felhasznalo_hobbijai` UNIQUE (`felhasznaloId`,`hobbiId`)
);



INSERT INTO `felhasznalo` (`id`, `jelszo`, `email`, `vnev`, `knev`, `unev`, `orszag`, `irsz`, `telepules`, `szuletesidatum`, `allampolgarsag`, `bemutatkozas`, `kepId1`, `kepId2`, `kepId3`, `foprofilkepSzam`) 
VALUES (NULL, '12345678', 'Teszt@teszt.hu', 'V', 'K', 'U', 'Magyar', '1234', 'Budapest', '2023-09-01', 'Magyar', 'Teszt szöveg 1', NULL, NULL, NULL, '0');
INSERT INTO `felhasznalo` (`id`, `jelszo`, `email`, `vnev`, `knev`, `unev`, `orszag`, `irsz`, `telepules`, `szuletesidatum`, `allampolgarsag`, `bemutatkozas`, `kepId1`, `kepId2`, `kepId3`, `foprofilkepSzam`) 
VALUES (NULL, '87654321', 'Teszt2@teszt2.hu', 'V2', 'K2', 'U2', 'Magyar', '9876', 'Pécs', '2023-09-02', 'Magyar', 'Teszt szöveg 2', NULL, NULL, NULL, '0');
INSERT INTO `felhasznalo` (`id`, `jelszo`, `email`, `vnev`, `knev`, `unev`, `orszag`, `irsz`, `telepules`, `szuletesidatum`, `allampolgarsag`, `bemutatkozas`, `kepId1`, `kepId2`, `kepId3`, `foprofilkepSzam`) 
VALUES (NULL, '13579135', 'Teszt3@teszt3.hu', 'V3', 'K3', 'U3', 'Magyar', '2468', 'Miskolc', '2023-08-03', 'Magyar', 'Teszt szöveg 3', NULL, NULL, NULL, '0');
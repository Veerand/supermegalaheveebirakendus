<?php
$servername = "localhost";
$username = "username";
$password = "password";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE DATABASE SOOVITUSLEHT;

CREATE TABLE IF NOT EXISTS SOOVITUSLEHT.`POLIITIK` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Eesinimi` VARCHAR(45) NOT NULL,
  `Perekonnanimi` VARCHAR(45) NOT NULL,
  `Partei` VARCHAR(45) NOT NULL,
  `Kandidaat` INT NOT NULL,
  `Kirjeldus` VARCHAR(300) NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS SOOVITUSLEHT.`SOOVITAJA` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Eesnimi` VARCHAR(45) NOT NULL,
  `Perekonnanimi` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS SOOVITUSLEHT.`SOOVITUS` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `PoliitikID` INT NOT NULL,
  `Pohjus` VARCHAR(300) NULL,
  `SoovitajaID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC))
ENGINE = InnoDB;


INSERT INTO SOOVITUSLEHT.`POLIITIK` (`ID`, `Eesinimi`, `Perekonnanimi`, `Partei`, `Kandidaat`, `Kirjeldus`) VALUES (1, 'Siim', 'Neljandik', 'Lahedad inimesed', 1, 'Ma olen nii lahe');
INSERT INTO SOOVITUSLEHT.`POLIITIK` (`ID`, `Eesinimi`, `Perekonnanimi`, `Partei`, `Kandidaat`, `Kirjeldus`) VALUES (2, 'Ain', 'Lambi', 'Suvalised mehed', 5, 'Ma olen suvaline mees');
INSERT INTO SOOVITUSLEHT.`POLIITIK` (`ID`, `Eesinimi`, `Perekonnanimi`, `Partei`, `Kandidaat`, `Kirjeldus`) VALUES (3, 'X', 'X', 'XXX', 3, NULL);
INSERT INTO SOOVITUSLEHT.`POLIITIK` (`ID`, `Eesinimi`, `Perekonnanimi`, `Partei`, `Kandidaat`, `Kirjeldus`) VALUES (4, 'Bob', 'Bobson', 'Bob', 4, 'Bob');
INSERT INTO SOOVITUSLEHT.`POLIITIK` (`ID`, `Eesinimi`, `Perekonnanimi`, `Partei`, `Kandidaat`, `Kirjeldus`) VALUES (5, 'Hodor', 'Hodor', 'Lahedad inimesed', 2, 'Hodor!');

INSERT INTO SOOVITUSLEHT.`SOOVITAJA` (`ID`, `Eesnimi`, `Perekonnanimi`) VALUES (1, 'Siim', 'Neljandik');
INSERT INTO SOOVITUSLEHT.`SOOVITAJA` (`ID`, `Eesnimi`, `Perekonnanimi`) VALUES (2, 'Hodor', 'Hodor');
INSERT INTO SOOVITUSLEHT.`SOOVITAJA` (`ID`, `Eesnimi`, `Perekonnanimi`) VALUES (3, 'Maamees', 'Joonas');
INSERT INTO SOOVITUSLEHT.`SOOVITAJA` (`ID`, `Eesnimi`, `Perekonnanimi`) VALUES (4, 'Maido', 'Maakas');

INSERT INTO SOOVITUSLEHT.`SOOVITUS` (`ID`, `PoliitikID`, `Pohjus`, `SoovitajaID`) VALUES (1, 1, 'Ma olen lihtsalt nii lahe', 1);
INSERT INTO SOOVITUSLEHT.`SOOVITUS` (`ID`, `PoliitikID`, `Pohjus`, `SoovitajaID`) VALUES (2, 5, 'Hodor', 2);
INSERT INTO SOOVITUSLEHT.`SOOVITUS` (`ID`, `PoliitikID`, `Pohjus`, `SoovitajaID`) VALUES (3, 3, 'Hoolitseb maa meeste eest', 3);
INSERT INTO SOOVITUSLEHT.`SOOVITUS` (`ID`, `PoliitikID`, `Pohjus`, `SoovitajaID`) VALUES (4, 3, 'Ma valin alati parteid XXX', 4);
INSERT INTO SOOVITUSLEHT.`SOOVITUS` (`ID`, `PoliitikID`, `Pohjus`, `SoovitajaID`) VALUES (5, 5, 'No kui sa mind ei vali siis vali mu parteikaaslane', 1);

select SOOVITUSLEHT.POLIITIK.Perekonnanimi, SOOVITUSLEHT.POLIITIK.Kandidaat, SOOVITUSLEHT.POLIITIK.Partei, SOOVITUSLEHT.SOOVITUS.Pohjus
from SOOVITUSLEHT.SOOVITUS
inner join SOOVITUSLEHT.POLIITIK
on SOOVITUSLEHT.SOOVITUS.PoliitikID=SOOVITUSLEHT.POLIITIK.ID


select kandidaat, count( foo.Kandidaat) as soovitusi 
from(select SOOVITUSLEHT.POLIITIK.Kandidaat as Kandidaat,SOOVITUSLEHT.SOOVITUS.Pohjus 
from SOOVITUSLEHT.SOOVITUS 
left join SOOVITUSLEHT.POLIITIK
on SOOVITUSLEHT.SOOVITUS.PoliitikID=SOOVITUSLEHT.POLIITIK.ID)
as foo group by Kandidaat;";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
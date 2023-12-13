use vinculation

CREATE TABLE `User`
(   
	 `idUser` INT NOT NULL AUTO_INCREMENT,
	 `name` varchar(50) NOT NULL,
	 `password` varchar(50) NOT NULL,
	 `email`  varchar(50) NOT NULL,
	 `status` bit NOT NULL DEFAULT 1,
	   PRIMARY KEY (`idUser`)
);
CREATE TABLE `Empreneur`(
`idEmpreneur` int NOT NULL AUTO_INCREMENT,
`request` varchar(50) NOT NULL,
`objetive` varchar(50) NOT NULL,
`codeOfEmpreneur` varchar(50) NOT NULL,
`workteam` varchar(50)NOT NULL,
`startdate` date NOT NULL,
`finaldate` date NOT NULL,
`duration` varchar(50) NOT NULL,
`idEmployee` int NOT NULL,
`idStudent` int NOT NULL,
 `status` BIT NOT NULL DEFAULT b'1' ,
`idUserCreate` INT NOT NULL , 
`dateCreate` DATE NOT NULL , 
`idUserModified` INT NOT NULL , 
`dateModified` DATE NOT NULL ,
Primary KEY(`idEmpreneur`)
);

 CREATE TABLE `Student`
(   
	 `idStudent` int NOT NULL AUTO_INCREMENT,
	 `name` varchar(50) NOT NULL,
	 `lastName` varchar(50) NOT NULL,
	 `mothersthestName` varchar(50) NOT NULL,
	 `enrollment` varchar(50) NOT NULL,
	 `birthdate` date NOT NULL,
	 `curp` char (18 )NOT NULL,
	 `phone` char (10 )NOT NULL,
	 `rfc` char (13 )NOT NULL,
	 `socialSegurity` char (11) NOT NULL,
	 `idEmployee` int NOT NULL,
`status` BIT NOT NULL DEFAULT b'1' , 
`idUserCreate` INT NOT NULL , 
`dateCreate` DATE NOT NULL , 
`idUserModified` INT NOT NULL , 
`dateModified` DATE NOT NULL ,
	 PRIMARY KEY (`idStudent`)
);
CREATE TABLE `Employee` (
`idEmployee` int  NOT NULL AUTO_INCREMENT,
`name` varchar(50) NOT NULL,
`lastname` varchar (50) NOT NULL,
`mothersLastName` varchar(50)NOT NULL,
`gender` varchar(50) NOT NULL,
`phone` char(10) NOT NULL,
`email` varchar(50) NOT NULL,
`address` varchar(100)NOT NULL, 
`socialSecurity` char(11)NOT NULL,
`dateOfHire` date NOT NULL,
`idSubject` int NOT NULL,
`status` BIT NOT NULL DEFAULT b'1' , 
`idUserCreate` INT NOT NULL , 
`dateCreate` DATE NOT NULL , 
`idUserModified` INT NOT NULL , 
`dateModified` DATE NOT NULL ,
Primary KEY(`idEmployee`)
);

INSERT INTO `User`(`name`,`password`,`email`)
VALUES ('Nallely', '130218','toledo@gmail.com');

INSERT INTO `Student` (`name`,`lastname`,`mothersthestName`,`enrollment`,`birthdate`,`curp`,`phone`,`rfc`,`socialSegurity`,`idEmployee`,`idUsercreate`,`dateCREATE`,`IdUserModifIED`,`datemodified`)
VALUES ('Nallely','Toledo','Alonso','I15171917','1996-06-09','TOASMNL000NLLN9654','8667882323','TOASMNL000NLL','44180032043',1,1,NOW(),1,NOW());
       ('Alberto','Salazar','Zuñiga','I18050517','2000-04-08','SAZA000408HCLLXLA6','8661222321','SAZA000408K61','44180032089',2,1,NOW(),1,NOW()),
	   ('Antonio','Perez','Gaitan','I23050517','2003-08-20','PEGA030820HCLLXKLR','8664322321','PEGA030820HCL','44180032090',3,1,NOW(),1,NOW()),
	   ('Maria','Rivera','Soledad','I20050517','2005-01-25','RISM000408HCLLXLA6','8662332321','RISM000408HCL','44180032011',4,1,NOW(),1,NOW()),
	   ('Bertha','Ibarra','Vazquez','I17050517','2007-09-17','VAVB000408HCLLXLO6','8666542321','VAVB000408HCL','44180032055',5,1,NOW(),1,NOW());
	   
INSERT INTO  `Employee` ( `name`,`lastname`,`mothersLastName`,`gender`,`phone`,`email`,`address`,`socialSecurity`,`dateOfHire`,`idSubject`,`idUsercreate`,`dateCreate`,`idUserModified`,`dateModified`)
VALUES ('Luis Alfonso','Rodriguez','Perez','Hombre','8662567822','luis@gmail.com','Ayuntamiento 212 Occidental','44180032044','2023-01-23',1,1,NOW(),1,NOW()),
       ('Alberto','Salazar','Zuñiga','Hombre','8662347822','alberto@gmail.com','Ignacio allende 313 La sierrita','44180032042','2023-02-12',2,1,NOW(),1,NOW()),
	   ('Antonio','Rodriguez','Tovar','Hombre','8661227822','antonio@gmail.com','Jalisco nte 1700 Monclova','44180032043','2023-02-10',3,1,NOW(),1,NOW()),
	   ('Gabriela','Mendoza','Aguilar','Mujer','8662137822','gabriela@gmail.com','C. Monaco 1010 Monclova','44180032044','2023-04-11',4,1,NOW(),1,NOW()),
	   ('Patricia','Hernendez','Mata','Mujer','8665437822','patricia@gmail.com','C. Zaragoza 227 Frontera','44180032045','2023-07-25',5,1,NOW(),1,NOW());

GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
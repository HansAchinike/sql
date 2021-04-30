CREATE TABLE `mydb`.`users` ( 
`id` INT(10) NOT NULL AUTO_INCREMENT , 
`Firstname` VARCHAR(100) NOT NULL , 
`Lastname` VARCHAR(100) NOT NULL , 
`Dob` DATE NOT NULL ,
`email` VARCHAR(50) NOT NULL , 
`course` VARCHAR(10) NOT NULL , 
`Password` VARCHAR(100) NOT NULL ,
PRIMARY KEY (`id`)) ENGINE = InnoDB;
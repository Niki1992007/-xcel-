CREATE DATABASE  IF NOT EXISTS `daltasertDB`;
CREATE TABLE `daltasertDB`.`input_data` (      
	`user_id` INT(11) NOT NULL AUTO_INCREMENT , 
	`surname` VARCHAR(250) NULL ,
	`name` VARCHAR(250) NULL ,
	`second_name` VARCHAR(250) NULL , 
	`sex` VARCHAR (250) NULL ,
	`day_birthday` DATE NOT NULL ,
	`month_birthday` DATE NOT NULL ,
	`year_birthday` DATE NOT NULL ,
	`weight` REAL NULL , /* Возможна ошибка в типе */
	`height` REAL NULL , /* Возможна ошибка в типе */
	PRIMARY KEY (`user_id`))
ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;
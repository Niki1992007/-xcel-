CREATE DATABASE  IF NOT EXISTS `daltasertDB`;
CREATE TABLE `daltasertDB`.`input_data` (      
	`user_id` INT(11) NOT NULL AUTO_INCREMENT , 
	`surname` VARCHAR(250) NULL ,
	`name` VARCHAR(250) NULL ,
	`second_name` VARCHAR(250) NULL , 
	`sex` TEXT (250) NULL ,
	`day_birthday` INT (30) NOT NULL ,
	`month_birthday` INT (12) NOT NULL ,
	`year_birthday` INT (30) NOT NULL ,
	`weight` INT (30) NOT NULL ,
	`height` INT (30) NOT NULL ,
	PRIMARY KEY (`user_id`))
ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;

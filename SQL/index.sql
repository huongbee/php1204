CREATE TABLE `apple4`.`users` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `name` VARCHAR(50) NOT NULL , 
    `email` VARCHAR(100) NOT NULL , 
    `password` VARCHAR(100) NOT NULL , 
    `birthdate` DATE NULL DEFAULT NULL , 
    `phone` VARCHAR(20) NULL DEFAULT NULL , 
    `status` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '0: false; 1:true' , 
    PRIMARY KEY (`id`), 
    UNIQUE `unique` (`email`)
) ENGINE = InnoDB;


ALTER TABLE `users` ADD `address` VARCHAR(100) NULL DEFAULT NULL AFTER `phone`;
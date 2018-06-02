CREATE TABLE `users` (
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


ALTER TABLE users 
ADD  FOREIGN KEY (id_role)
REFERENCES role(id)


INSERT INTO users(name, email, id_role, password, birthdate, phone)
VALUES( 'Teo', 'teo@gmail.com', 2, md5(111), '1998-5-30', '23456743534')


INSERT INTO users
VALUES( 4, 'Ti', 'ti@gmail.com', 2, md5(111), '1998-5-30', '23456743534', "Quan 1", 1);
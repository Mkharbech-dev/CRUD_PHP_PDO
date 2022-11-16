CREATE DATABASE registration;

CREATE TABLE `registration`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `firstname` VARCHAR(50) NOT NULL , `lastname` VARCHAR(50) NOT NULL , `address` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
?>

CREATE TABLE `fsinterativa01`.`comments` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`description` VARCHAR( 455 ) NOT NULL ,
`parent_id` INT NULL
) ENGINE = InnoDB;

CREATE TABLE `fsinterativa01`.`comments_users` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`user_id` INT NOT NULL ,
`comment_id` INT NOT NULL
) ENGINE = InnoDB;

CREATE TABLE `fsinterativa01`.`comments_establishments` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`establishment_id` INT NOT NULL ,
`comment_id` INT NOT NULL
) ENGINE = InnoDB;

CREATE TABLE `fsinterativa01`.`profiles` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`description` VARCHAR( 255 ) NOT NULL ,
`gender` VARCHAR( 1 ) NOT NULL ,
`full_name` VARCHAR( 255 ) NOT NULL ,
`path_to_profile_image` VARCHAR( 255 ) NOT NULL
) ENGINE = InnoDB;

ALTER TABLE `users` ADD `profile_id` INT NOT NULL AFTER `password` 
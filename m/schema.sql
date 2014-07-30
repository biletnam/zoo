SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`masters`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`masters` (
  `id_master` INT NOT NULL AUTO_INCREMENT ,
  `firstname` VARCHAR(255) NOT NULL ,
  `surname` VARCHAR(255) NOT NULL ,
  `lastname` VARCHAR(255) NOT NULL ,
  `city` VARCHAR(100) NOT NULL ,
  `street` VARCHAR(45) NOT NULL ,
  `n_home` VARCHAR(5) NOT NULL ,
  `n_apart` INT NULL ,
  `telephone_1` VARCHAR(45) NULL ,
  `telephone_2` VARCHAR(45) NULL ,
  `telephone_3` VARCHAR(45) NULL ,
  `description` VARCHAR(255) NULL ,
  PRIMARY KEY (`id_master`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`types`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`types` (
  `id_type` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
  `description` VARCHAR(255) NULL ,
  PRIMARY KEY (`id_type`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`animals`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`animals` (
  `id_animal` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(100) NOT NULL ,
  `id_type` INT NOT NULL ,
  `sex` TINYINT(1)  NOT NULL DEFAULT 0 ,
  `age` INT NULL ,
  `reg_num` VARCHAR(45) NULL ,
  `date_reg` DATETIME NULL ,
  `date_death` DATETIME NULL ,
  `id_anemnes` INT NULL ,
  `id_priv` INT NULL ,
  `id_master` INT NOT NULL ,
  `description` VARCHAR(255) NULL ,
  PRIMARY KEY (`id_animal`) ,
  INDEX `fk_animals_masters` (`id_master` ASC) ,
  INDEX `fk_animals_types1` (`id_type` ASC) ,
  CONSTRAINT `fk_animals_masters`
    FOREIGN KEY (`id_master` )
    REFERENCES `mydb`.`masters` (`id_master` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_animals_types1`
    FOREIGN KEY (`id_type` )
    REFERENCES `mydb`.`types` (`id_type` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`medics`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`medics` (
  `id_medic` INT NOT NULL AUTO_INCREMENT ,
  `firstname` VARCHAR(45) NOT NULL ,
  `surname` VARCHAR(45) NOT NULL ,
  `lastname` VARCHAR(45) NOT NULL ,
  `description` VARCHAR(45) NULL ,
  `work` VARCHAR(45) NULL ,
  PRIMARY KEY (`id_medic`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`anemneses`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`anemneses` (
  `id_anemnes` INT NOT NULL AUTO_INCREMENT ,
  `date` DATETIME NOT NULL ,
  `description` BLOB NOT NULL ,
  `summ` FLOAT NOT NULL DEFAULT 0 ,
  `id_animal` INT NOT NULL ,
  `id_medic` INT NOT NULL ,
  PRIMARY KEY (`id_anemnes`, `id_animal`) ,
  INDEX `fk_anemneses_animals1` (`id_animal` ASC) ,
  INDEX `fk_anemneses_medics1` (`id_medic` ASC) ,
  CONSTRAINT `fk_anemneses_animals1`
    FOREIGN KEY (`id_animal` )
    REFERENCES `mydb`.`animals` (`id_animal` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_anemneses_medics1`
    FOREIGN KEY (`id_medic` )
    REFERENCES `mydb`.`medics` (`id_medic` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`priv`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`priv` (
  `id_priv` INT NOT NULL AUTO_INCREMENT ,
  `date` DATETIME NOT NULL ,
  `description` VARCHAR(255) NOT NULL ,
  `id_animal` INT NOT NULL ,
  PRIMARY KEY (`id_priv`) ,
  INDEX `fk_priv_animals1` (`id_animal` ASC) ,
  CONSTRAINT `fk_priv_animals1`
    FOREIGN KEY (`id_animal` )
    REFERENCES `mydb`.`animals` (`id_animal` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

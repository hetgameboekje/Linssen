CREATE TABLE `tb_melding_spoed`(
    `melding_spoed_uuid` CHAR(36) NOT NULL,
    `tijd_melding` TIMESTAMP NOT NULL,
    `gebruikersnaam` VARCHAR(30) NOT NULL,
    `locatie_gps` VARCHAR(12) NOT NULL
);
ALTER TABLE
    `tb_melding_spoed` ADD PRIMARY KEY(`melding_spoed_uuid`);
CREATE TABLE `tb_gebruiker`(
    `uuid_gebruiker` CHAR(36) NOT NULL,
    `gebruikersnaam` VARCHAR(30) NOT NULL,
    `wachtwoord` VARCHAR(30) NOT NULL
);
ALTER TABLE
    `tb_gebruiker` ADD PRIMARY KEY(`uuid_gebruiker`);
CREATE TABLE `tb_gebruiker_status`(
    `status_uuid` CHAR(36) NOT NULL,
    `status_gebruiker` INT NOT NULL,
    `melding_uuid` CHAR(36) NOT NULL,
    `functie_gebruiker` INT NOT NULL
);
ALTER TABLE
    `tb_gebruiker_status` ADD PRIMARY KEY(`status_uuid`);
CREATE TABLE `tb_melding_info`(
    `melding_info_uuid` CHAR(36) NOT NULL,
    `type_ongeval` TINYINT(1) NOT NULL,
    `bericht` TEXT NOT NULL
);
ALTER TABLE
    `tb_melding_info` ADD PRIMARY KEY(`melding_info_uuid`);
ALTER TABLE
    `tb_melding_info` ADD CONSTRAINT `tb_melding_info_melding_info_uuid_foreign` FOREIGN KEY(`melding_info_uuid`) REFERENCES `tb_melding_spoed`(`melding_spoed_uuid`);
ALTER TABLE
    `tb_gebruiker_status` ADD CONSTRAINT `tb_gebruiker_status_melding_uuid_foreign` FOREIGN KEY(`melding_uuid`) REFERENCES `tb_melding_info`(`melding_info_uuid`);
ALTER TABLE
    `tb_gebruiker` ADD CONSTRAINT `tb_gebruiker_gebruikersnaam_foreign` FOREIGN KEY(`gebruikersnaam`) REFERENCES `tb_melding_spoed`(`gebruikersnaam`);
ALTER TABLE
    `tb_gebruiker_status` ADD CONSTRAINT `tb_gebruiker_status_melding_uuid_foreign` FOREIGN KEY(`melding_uuid`) REFERENCES `tb_melding_spoed`(`melding_spoed_uuid`);
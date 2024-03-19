CREATE TABLE `hoerbuecher` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `titel` varchar(254) DEFAULT NULL,
    `author_id` int(11) NOT NULL,
    `sprecher_id` int(11) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
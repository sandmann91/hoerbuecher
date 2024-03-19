CREATE TABLE `_einstellungen` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(254) COLLATE latin1_german2_ci NOT NULL,
    `beschreibung` text COLLATE latin1_german2_ci,
    `global` int(11) NOT NULL DEFAULT '0',
    `berechtigung` int(11) NOT NULL DEFAULT '0',
    `standard` text COLLATE latin1_german2_ci,
    `standard_admin` text COLLATE latin1_german2_ci,
    `wert` text COLLATE latin1_german2_ci,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET = latin1 COLLATE = latin1_german2_ci ROW_FORMAT = DYNAMIC;

INSERT INTO `_einstellungen` (`id`, `name`, `beschreibung`, `global`, `berechtigung`, `standard`, `standard_admin`, `wert`) VALUES
(1, 'adressen', 'Die Berechtigung wird benötigt, damit man alle Adressen angezeigt bekommt', 0, 1, '0', NULL, NULL),
(2, 'mailserver', 'Hier wird der Mail Server eingestellt', 1, 0, NULL, NULL, '1'),
(3, 'bild_anzeigen', 'Entscheidet ob das Bild dieses Benutzers den anderen Benutzern angezeigt werden darf', 0, 1,  NULL, NULL, NULL);



-- (2, 'kontakte', 'Die Berechtigung wird benötigt, damit man alle Kontakte angezeigt bekommt', 1, 0, NULL, NULL, NULL, NULL),
-- (3, 'artikel', 'Die Berechtigung wird benötigt, damit man alle Artikel angezeigt bekommt', 1, 0, NULL, NULL, NULL, NULL),
-- (4, 'ident', 'Die Berechtigung wird benötigt, damit man alle Ident angezeigt bekommt', 1, 0, NULL, NULL, NULL, NULL),
-- (5, 'mitarbeiter', 'Die Berechtigung wird benötigt, damit man alle Mitarbeiter angezeigt bekommt', 1, 0, NULL, NULL, NULL, NULL),
-- (6, 'inventar', 'Die Berechtigung wird benötigt, damit man alle Inventar angezeigt bekommt', 1, 0, NULL, NULL, NULL, NULL),
-- (7, 'weitere_stammdaten', 'Die Berechtigung wird benötigt, damit man alle wWitere Stammdaten angezeigt bekommt', 1, 0, NULL, NULL, NULL, NULL),
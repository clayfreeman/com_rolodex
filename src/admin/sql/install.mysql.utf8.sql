---
-- This file defines the schema required to store "Card" records in a database.
--
-- @author     Clay Freeman <git@clayfreeman.com>
-- @copyright  2018 Clay Freeman. All rights reserved.
-- @license    GNU General Public License v3 (GPL-3.0).
---
CREATE TABLE IF NOT EXISTS `#__rolodex_cards` (
  `id`               INT(11)          NOT NULL AUTO_INCREMENT,
  `published`        TINYINT(4)       NOT NULL DEFAULT 1,
  `checked_out`      INT(11) UNSIGNED NOT NULL DEFAULT 0,
  `checked_out_time` DATETIME         NOT NULL DEFAULT '1970-01-01 00:00:01',
  `name`             VARCHAR(191)     NOT NULL,
  `phone`            VARCHAR(191)     NOT NULL,
  PRIMARY KEY (`id`),
  KEY `published` (`published`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;

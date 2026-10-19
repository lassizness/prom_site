ALTER TABLE `balls`
  MODIFY COLUMN `diameter` DECIMAL(4,1) NOT NULL,
  MODIFY COLUMN `price` DECIMAL(12,2) DEFAULT NULL,
  ADD INDEX `idx_catalog_diameter_price` (`diameter`, `price`, `id`),
  ADD INDEX `idx_catalog_price` (`price`, `id`);

ALTER TABLE `batter`
  MODIFY COLUMN `diameter` DECIMAL(4,1) NOT NULL,
  MODIFY COLUMN `price` DECIMAL(12,2) DEFAULT NULL,
  ADD INDEX `idx_catalog_diameter_price` (`diameter`, `price`, `id`),
  ADD INDEX `idx_catalog_price` (`price`, `id`);

ALTER TABLE `singl`
  MODIFY COLUMN `diameter` DECIMAL(4,1) NOT NULL,
  MODIFY COLUMN `price` DECIMAL(12,2) DEFAULT NULL,
  ADD INDEX `idx_catalog_diameter_price` (`diameter`, `price`, `id`),
  ADD INDEX `idx_catalog_price` (`price`, `id`);

ALTER TABLE `singleline`
  MODIFY COLUMN `diameter` DECIMAL(4,1) NOT NULL,
  MODIFY COLUMN `price` DECIMAL(12,2) DEFAULT NULL,
  ADD INDEX `idx_catalog_diameter_price` (`diameter`, `price`, `id`),
  ADD INDEX `idx_catalog_price` (`price`, `id`);

ALTER TABLE `scenepir`
  MODIFY COLUMN `diameter` DECIMAL(4,1) NOT NULL,
  MODIFY COLUMN `price` DECIMAL(12,2) DEFAULT NULL,
  ADD INDEX `idx_catalog_diameter_price` (`diameter`, `price`, `id`),
  ADD INDEX `idx_catalog_price` (`price`, `id`);

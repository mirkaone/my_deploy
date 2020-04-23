<?php declare(strict_types=1);

namespace Shopware\Core\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1571981437AddSeoColumns extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1571981437;
    }

    public function update(Connection $connection): void
    {
        $this->addProductColum($connection);

        $this->addCategoryColumns($connection);
    }

    public function updateDestructive(Connection $connection): void
    {
        $connection->executeQuery('
            ALTER TABLE `product_translation`
            DROP COLUMN `additional_text`
        ');
    }

    private function addProductColum(Connection $connection): void
    {
        $connection->executeQuery('
            ALTER TABLE `product_translation`
            ADD COLUMN `meta_description` varchar(255) NULL AFTER `additional_text`
        ');
        $connection->executeQuery('
            UPDATE `product_translation`
            SET `meta_description` = `additional_text`;
        ');
    }

    private function addCategoryColumns(Connection $connection): void
    {
        $connection->executeQuery('
            ALTER TABLE `category_translation`
            ADD COLUMN `meta_title` varchar(255) NULL AFTER `description`
        ');

        $connection->executeQuery('
            ALTER TABLE `category_translation`
            ADD COLUMN `meta_description` varchar(255) NULL AFTER `meta_title`
        ');

        $connection->executeQuery('
            ALTER TABLE `category_translation`
            ADD COLUMN `keywords` varchar(255) NULL AFTER `meta_description`
        ');
    }
}

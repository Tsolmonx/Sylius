<?php

declare(strict_types=1);

namespace Sylius\Bundle\CoreBundle\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250117074640 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sylius_adjustment CHANGE amount amount BIGINT NOT NULL');
        $this->addSql('ALTER TABLE sylius_channel_pricing CHANGE price price BIGINT DEFAULT NULL, CHANGE original_price original_price BIGINT DEFAULT NULL, CHANGE minimum_price minimum_price BIGINT DEFAULT 0, CHANGE lowest_price_before_discount lowest_price_before_discount BIGINT DEFAULT NULL');
        $this->addSql('ALTER TABLE sylius_channel_pricing_log_entry CHANGE price price BIGINT NOT NULL, CHANGE original_price original_price BIGINT DEFAULT NULL');
        $this->addSql('ALTER TABLE sylius_order CHANGE items_total items_total BIGINT NOT NULL, CHANGE adjustments_total adjustments_total BIGINT NOT NULL, CHANGE total total BIGINT NOT NULL');
        $this->addSql('ALTER TABLE sylius_order_item CHANGE unit_price unit_price BIGINT NOT NULL, CHANGE units_total units_total BIGINT NOT NULL, CHANGE adjustments_total adjustments_total BIGINT NOT NULL, CHANGE total total BIGINT NOT NULL, CHANGE original_unit_price original_unit_price BIGINT DEFAULT NULL');
        $this->addSql('ALTER TABLE sylius_payment CHANGE amount amount BIGINT NOT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE available_at available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE messenger_messages CHANGE created_at created_at DATETIME NOT NULL, CHANGE available_at available_at DATETIME NOT NULL, CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE sylius_adjustment CHANGE amount amount INT NOT NULL');
        $this->addSql('ALTER TABLE sylius_channel_pricing CHANGE price price INT DEFAULT NULL, CHANGE original_price original_price INT DEFAULT NULL, CHANGE minimum_price minimum_price INT DEFAULT 0, CHANGE lowest_price_before_discount lowest_price_before_discount INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sylius_channel_pricing_log_entry CHANGE price price INT NOT NULL, CHANGE original_price original_price INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sylius_order CHANGE items_total items_total INT NOT NULL, CHANGE adjustments_total adjustments_total INT NOT NULL, CHANGE total total INT NOT NULL');
        $this->addSql('ALTER TABLE sylius_order_item CHANGE unit_price unit_price INT NOT NULL, CHANGE original_unit_price original_unit_price INT DEFAULT NULL, CHANGE units_total units_total INT NOT NULL, CHANGE adjustments_total adjustments_total INT NOT NULL, CHANGE total total INT NOT NULL');
        $this->addSql('ALTER TABLE sylius_payment CHANGE amount amount INT NOT NULL');
    }
}

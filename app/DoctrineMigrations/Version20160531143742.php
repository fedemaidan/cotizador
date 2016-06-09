<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160531143742 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE concepto (id INT NOT NULL, obra_id INT DEFAULT NULL, codigo VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, secuencia VARCHAR(255) NOT NULL, INDEX IDX_648388D03C2672C8 (obra_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE concepto_obra (id INT AUTO_INCREMENT NOT NULL, concepto_id INT DEFAULT NULL, obra_id INT DEFAULT NULL, secuencia VARCHAR(255) NOT NULL, INDEX IDX_3031F7516C2330BD (concepto_id), INDEX IDX_3031F7513C2672C8 (obra_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE concepto ADD CONSTRAINT FK_648388D03C2672C8 FOREIGN KEY (obra_id) REFERENCES obra (id)');
        $this->addSql('ALTER TABLE concepto_obra ADD CONSTRAINT FK_3031F7516C2330BD FOREIGN KEY (concepto_id) REFERENCES concepto (id)');
        $this->addSql('ALTER TABLE concepto_obra ADD CONSTRAINT FK_3031F7513C2672C8 FOREIGN KEY (obra_id) REFERENCES obra (id)');
        $this->addSql('ALTER TABLE detalle_presupuesto ADD concepto_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE detalle_presupuesto ADD CONSTRAINT FK_577C85A06C2330BD FOREIGN KEY (concepto_id) REFERENCES concepto (id)');
        $this->addSql('CREATE INDEX IDX_577C85A06C2330BD ON detalle_presupuesto (concepto_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE concepto_obra DROP FOREIGN KEY FK_3031F7516C2330BD');
        $this->addSql('ALTER TABLE detalle_presupuesto DROP FOREIGN KEY FK_577C85A06C2330BD');
        $this->addSql('DROP TABLE concepto');
        $this->addSql('DROP TABLE concepto_obra');
        $this->addSql('DROP INDEX IDX_577C85A06C2330BD ON detalle_presupuesto');
        $this->addSql('ALTER TABLE detalle_presupuesto DROP concepto_id');
    }
}

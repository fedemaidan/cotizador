<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160512154356 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE rango (id INT AUTO_INCREMENT NOT NULL, desde INT NOT NULL, hasta INT NOT NULL, codigo VARCHAR(255) NOT NULL, tasa VARCHAR(255) NOT NULL, tipo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE obra (id INT AUTO_INCREMENT NOT NULL, categoria_id INT DEFAULT NULL, descripcion VARCHAR(255) NOT NULL, tipoCalculo VARCHAR(255) NOT NULL, tasa VARCHAR(255) NOT NULL, minimo VARCHAR(255) NOT NULL, rango_codigo VARCHAR(255) DEFAULT NULL, tipoMedidaPrincipal VARCHAR(255) NOT NULL, tipoMedidaAdicional VARCHAR(255) DEFAULT NULL, articulo18 TINYINT(1) DEFAULT NULL, articulo_ley TINYINT(1) DEFAULT NULL, INDEX IDX_2EEE6DBD3397707A (categoria_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE presupuesto (id INT AUTO_INCREMENT NOT NULL, fecha VARCHAR(255) DEFAULT NULL, nombre_director VARCHAR(255) NOT NULL, nombre_propietario VARCHAR(255) NOT NULL, cuit_director VARCHAR(255) NOT NULL, cuit_propietario VARCHAR(255) NOT NULL, mail VARCHAR(255) DEFAULT NULL, telefono VARCHAR(255) DEFAULT NULL, tipo_presupuesto VARCHAR(255) DEFAULT NULL, firma VARCHAR(255) DEFAULT NULL, matricula VARCHAR(255) DEFAULT NULL, consejo VARCHAR(255) DEFAULT NULL, ubicacion VARCHAR(255) DEFAULT NULL, seccion VARCHAR(255) DEFAULT NULL, manzana VARCHAR(255) DEFAULT NULL, parcela VARCHAR(255) DEFAULT NULL, domicilio VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE detalle_presupuesto (id INT AUTO_INCREMENT NOT NULL, prespuesto_id INT DEFAULT NULL, obra_id INT DEFAULT NULL, numero INT NOT NULL, articulo11 TINYINT(1) NOT NULL, articulo12 TINYINT(1) DEFAULT NULL, articulo6 TINYINT(1) DEFAULT NULL, cantidadPrincipal INT NOT NULL, tipoMedidaPrincipal VARCHAR(255) NOT NULL, cantidadAdicional INT DEFAULT NULL, tipoMedidaAdicional VARCHAR(255) DEFAULT NULL, total INT DEFAULT NULL, articulo18 TINYINT(1) DEFAULT NULL, articulo_ley TINYINT(1) DEFAULT NULL, impuesto INT DEFAULT NULL, recargo VARCHAR(255) DEFAULT NULL, descuento VARCHAR(255) DEFAULT NULL, INDEX IDX_577C85A0F730DCF8 (prespuesto_id), INDEX IDX_577C85A03C2672C8 (obra_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categoria (id INT AUTO_INCREMENT NOT NULL, descripcion VARCHAR(255) NOT NULL, tipo_obra TINYINT(1) DEFAULT NULL, tipo_plan_unico TINYINT(1) DEFAULT NULL, tipo_instalaciones TINYINT(1) DEFAULT NULL, tipo_transferencia TINYINT(1) DEFAULT NULL, orden INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE obra ADD CONSTRAINT FK_2EEE6DBD3397707A FOREIGN KEY (categoria_id) REFERENCES categoria (id)');
        $this->addSql('ALTER TABLE detalle_presupuesto ADD CONSTRAINT FK_577C85A0F730DCF8 FOREIGN KEY (prespuesto_id) REFERENCES presupuesto (id)');
        $this->addSql('ALTER TABLE detalle_presupuesto ADD CONSTRAINT FK_577C85A03C2672C8 FOREIGN KEY (obra_id) REFERENCES obra (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE detalle_presupuesto DROP FOREIGN KEY FK_577C85A03C2672C8');
        $this->addSql('ALTER TABLE detalle_presupuesto DROP FOREIGN KEY FK_577C85A0F730DCF8');
        $this->addSql('ALTER TABLE obra DROP FOREIGN KEY FK_2EEE6DBD3397707A');
        $this->addSql('DROP TABLE rango');
        $this->addSql('DROP TABLE obra');
        $this->addSql('DROP TABLE presupuesto');
        $this->addSql('DROP TABLE detalle_presupuesto');
        $this->addSql('DROP TABLE categoria');
    }
}

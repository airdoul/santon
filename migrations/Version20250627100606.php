<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250627100606 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE santon DROP FOREIGN KEY FK_5848FBBA98260155
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE santon DROP FOREIGN KEY FK_5848FBBAA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE santon ADD CONSTRAINT FK_5848FBBA98260155 FOREIGN KEY (region_id) REFERENCES region (id) ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE santon ADD CONSTRAINT FK_5848FBBAA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE SET NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE santon DROP FOREIGN KEY FK_5848FBBA98260155
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE santon DROP FOREIGN KEY FK_5848FBBAA76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE santon ADD CONSTRAINT FK_5848FBBA98260155 FOREIGN KEY (region_id) REFERENCES region (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE santon ADD CONSTRAINT FK_5848FBBAA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
    }
}

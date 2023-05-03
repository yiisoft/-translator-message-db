<?php

declare(strict_types=1);

namespace Yiisoft\Translator\Message\Db\Tests\Driver\Pgsql;

use Yiisoft\Translator\Message\Db\Tests\Common\AbstractDbHelperTest;
use Yiisoft\Translator\Message\Db\Tests\Support\PgsqlFactory;

/**
 * @group Pgsql
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class DbHelperTest extends AbstractDbHelperTest
{
    protected function setUp(): void
    {
        // create connection dbms-specific
        $this->db = (new PgsqlFactory())->createConnection();

        // set table prefix
        $this->db->setTablePrefix('pgsql_');

        parent::setUp();
    }
}

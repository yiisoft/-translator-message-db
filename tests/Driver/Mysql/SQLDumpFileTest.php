<?php

declare(strict_types=1);

namespace Yiisoft\Translator\Message\Db\Tests\Driver\Mysql;

use Yiisoft\Translator\Message\Db\Tests\Common\AbstractSQLDumpFileTest;
use Yiisoft\Translator\Message\Db\Tests\Support\MysqlFactory;

/**
 * @group Mysql
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class SQLDumpFileTest extends AbstractSQLDumpFileTest
{
    protected function setUp(): void
    {
        // create connection dbms-specific
        $this->db = (new MysqlFactory())->createConnection();

        parent::setUp();
    }
}

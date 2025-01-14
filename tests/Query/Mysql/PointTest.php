<?php

namespace DoctrineExtensions\Tests\Query\Mysql;

use DoctrineExtensions\Tests\Query\MysqlTestCase;

class PointTest extends MysqlTestCase
{
    public function testPoint()
    {
        $this->assertDqlProducesSql(
            "SELECT POINT(1 2) from DoctrineExtensions\Tests\Entities\Blank b",
            'SELECT POINT(1 2) AS sclr_0 FROM Blank b0_'
        );
    }
}

<?php
/*
 * This file is part of the Shieldon Simple Cache package.
 *
 * (c) Terry L. <contact@terryl.in>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Shieldon\Test\SimpleCache;

use Psr\SimpleCache\CacheInterface;
use Shieldon\Test\SimpleCache\DriverTestCase;
use Shieldon\SimpleCache\Driver\Sqlite;

class SqliteTest extends DriverTestCase
{
    public function getCacheDriver()
    {
        $cache = new Sqlite([
            'storage' => create_tmp_directory()
        ]);

        return $cache;
    }

    public function testCacheDriver()
    {
        $driver = $this->getCacheDriver();
        $this->assertTrue($driver instanceof CacheInterface);
    }
}
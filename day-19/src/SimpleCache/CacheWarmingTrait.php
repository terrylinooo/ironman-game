<?php
/*
 * This file is part of the Shieldon Simple Cache package.
 *
 * (c) Terry L. <contact@terryl.in>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Shieldon\SimpleCache;

/**
 * For Cache Drivers which need to be cache-warming for performance reasons.
 */
Trait CacheWarmingTrait
{
    /**
     * A cache-warming pool in where stores data.
     *
     * [
     *   [
     *     'value'     => (mixed) $value
     *     'ttl'       => (int)   $ttl,
     *     'timestamp' => (int)   $timestamp,
     *   ],
     *   ...
     * ]
     *
     * @var array[]
     */
    protected  $pool = [];

    /**
     * The cached items will be deleted later.
     *
     * @var array
     */
    protected $expiredPool = [];

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function setPool()
    {

    }
}
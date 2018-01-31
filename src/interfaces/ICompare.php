<?php
namespace deflou\interfaces;

use deflou\components\compares\CompareDefault;

/**
 * Interface ICompare
 *
 * @package deflou\interfaces
 * @author deflou.dev@gmail.com
 */
interface ICompare
{
    const EQUAL = 'eq';
    const NOT_EQUAL = 'neq';
    const GREATER = 'gt';
    const LOWER = 'lt';
    const LIKE = 'like';

    const DEFAULT_COMPARE = CompareDefault::class;

    /**
     * @param $currentValue
     * @param $compareTo
     * @param string $modification use modification to clarify clause
     *
     * @return mixed
     */
    public function compare($currentValue, $compareTo, $modification = '');
}

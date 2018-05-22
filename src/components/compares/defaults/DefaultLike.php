<?php
namespace deflou\components\compares\defaults;

use deflou\components\compares\CompareAbstract;

/**
 * Class DefaultLike
 *
 * @package deflou\components\compares\defaults
 * @author deflou.dev@gmail.com
 */
class DefaultLike extends CompareAbstract
{
    /**
     * @param $currentValue
     * @param $compareTo
     * @param string $modification
     *
     * @return bool
     */
    public function compare($currentValue, $compareTo, $modification = '')
    {
        return stripos($currentValue, $compareTo) !== false;
    }
}

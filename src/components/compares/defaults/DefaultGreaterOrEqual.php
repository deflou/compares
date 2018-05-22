<?php
namespace deflou\components\compares\defaults;

use deflou\components\compares\CompareAbstract;

/**
 * Class DefaultGreaterOrEqual
 *
 * @package deflou\components\compares\defaults
 * @author deflou.dev@gmail.com
 */
class DefaultGreaterOrEqual extends CompareAbstract
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
        $greater = new DefaultGreater();
        $isGreater = $greater->compare($currentValue, $compareTo);

        $equal = new DefaultEqual();
        $isEqual = $equal->compare($currentValue, $compareTo);

        return $isGreater || $isEqual;
    }
}

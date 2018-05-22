<?php
namespace deflou\components\compares\defaults;

use deflou\components\compares\CompareAbstract;

/**
 * Class DefaultLowerOrEqual
 *
 * @package deflou\components\compares\defaults
 * @author deflou.dev@gmail.com
 */
class DefaultLowerOrEqual extends CompareAbstract
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
        $lower = new DefaultLower();
        $isLower = $lower->compare($currentValue, $compareTo);

        $equal = new DefaultEqual();
        $isEqual = $equal->compare($currentValue, $compareTo);

        return $isLower || $isEqual;
    }
}

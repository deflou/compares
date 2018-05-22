<?php
namespace deflou\components\compares\defaults;

use deflou\components\compares\CompareAbstract;

/**
 * Class DefaultLower
 *
 * @package deflou\components\compares\defaults
 * @author deflou.dev@gmail.com
 */
class DefaultLower extends CompareAbstract
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
        if (is_numeric($currentValue)) {
            return $currentValue < $compareTo;
        }

        $cmp = strcasecmp($currentValue, $compareTo);

        return $cmp < 0;
    }
}

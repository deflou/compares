<?php
namespace deflou\components\compares\defaults;

use deflou\components\compares\CompareAbstract;

/**
 * Class DefaultEqual
 *
 * @package deflou\components\compares\defaults
 * @author deflou.dev@gmail.com
 */
class DefaultEqual extends CompareAbstract
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
            $result = ($currentValue == $compareTo);
        } else {
            $cmp = strcmp(strtolower($currentValue), strtolower($compareTo));
            $result = $cmp ? false : true;
        }

        return $result;
    }
}

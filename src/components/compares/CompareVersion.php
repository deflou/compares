<?php
namespace deflou\components\compares;

/**
 * Class CompareVersion
 *
 * @package deflou\components\compares'
 * @author deflou.dev@gmail.com
 */
class CompareVersion extends CompareAbstract
{
    /**
     * @param $current
     * @param $compareTo
     * @param string $modification
     *
     * @return bool|mixed
     */
    public function compare($current, $compareTo, $modification = '')
    {
        return version_compare($current, $compareTo, $modification);
    }
}
